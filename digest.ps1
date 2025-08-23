# digest.ps1 (v3 — fix "EmptyPipeElement" & backticks)

[CmdletBinding()]
param(
  [string]$OutFile = "project_digest.md",
  [string]$Root = (Get-Location).Path,
  [string[]]$ExcludePatterns = @(
    '\.git\', '\.github\', '\.vscode\', '\.idea\',
    '\node_modules\', '\vendor\',
    '\storage\debugbar\', '\storage\logs\', '\public\build\', '\public\storage\',
    '\dist\', '\build\', '\.next\', '\.nuxt\', '\.parcel-cache\', '\.cache\',
    '\venv\', '\.venv\', '__pycache__\', '\target\', '\bin\', '\obj\'
  ),
  [string[]]$IncludeExtensions = @(
    '.php','.blade.php','.js','.ts','.jsx','.tsx','.vue',
    '.json','.md','.yml','.yaml','.env','.env.example',
    '.py','.go','.rb','.java','.cs',
    '.css','.scss','.sass','.html','.twig'
  )
)

$ErrorActionPreference = "SilentlyContinue"
Set-Location $Root

function Is-IncludedPath([string]$path) {
  foreach ($p in $ExcludePatterns) {
    if ($path -replace '/','\' -match [regex]::Escape($p)) { return $false }
  }
  return $true
}

function Write-Title([string]$text) {
  Add-Content -Encoding UTF8 -Path $OutFile -Value ""
  Add-Content -Encoding UTF8 -Path $OutFile -Value "## $text"
}

function Write-CodeBlock([object]$content) {
  Add-Content -Encoding UTF8 -Path $OutFile -Value '```'
  if ($null -ne $content) {
    if ($content -is [System.Array]) {
      Add-Content -Encoding UTF8 -Path $OutFile -Value $content
    } else {
      Add-Content -Encoding UTF8 -Path $OutFile -Value ($content | Out-String)
    }
  }
  Add-Content -Encoding UTF8 -Path $OutFile -Value '```'
  Add-Content -Encoding UTF8 -Path $OutFile -Value ""
}

# reset output
"# Project Digest" | Set-Content -Encoding UTF8 $OutFile
"_Generated: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')_" | Add-Content -Encoding UTF8 $OutFile
"**Root:** $Root" | Add-Content -Encoding UTF8 $OutFile
"" | Add-Content -Encoding UTF8 $OutFile

# 1) Struktur
Write-Title "Struktur (filtered, no depth limit)"
$structure = Get-ChildItem -Recurse -Force |
  Where-Object { Is-IncludedPath $_.FullName -and ( $_.PSIsContainer -or ($IncludeExtensions -contains $_.Extension) ) } |
  Select-Object -ExpandProperty FullName |
  ForEach-Object { $_.Replace($Root,'').TrimStart('\','/') }
Write-CodeBlock $structure

# 2) Git info
Write-Title "Git"
$gitOut = & {
  git -C $Root rev-parse --is-inside-work-tree | Out-Null
  if ($LASTEXITCODE -eq 0) {
    "Remote:"; git remote -v
    ""; "Branch:"; git rev-parse --abbrev-ref HEAD
    ""; "Last 5 commits:"; git --no-pager log --oneline -5
  } else { "Not a git repo" }
}
Write-CodeBlock $gitOut

# 3) Dependencies ringkas
Write-Title "Dependencies (summary)"
$depOut = & {
  if (Test-Path "$Root\composer.json") {
    "composer.json (require):"
    try { (Get-Content "$Root\composer.json" | ConvertFrom-Json).require.GetEnumerator() | % { "  $($_.Key): $($_.Value)" } } catch { "  (parse error / none)" }
    "composer.json (require-dev):"
    try { (Get-Content "$Root\composer.json" | ConvertFrom-Json).'require-dev'.GetEnumerator() | % { "  $($_.Key): $($_.Value)" } } catch { "  (parse error / none)" }
  }
  if (Test-Path "$Root\package.json") {
    ""; "package.json (dependencies):"
    try { (Get-Content "$Root\package.json" | ConvertFrom-Json).dependencies.GetEnumerator() | % { "  $($_.Key): $($_.Value)" } } catch { "  (parse error / none)" }
    "package.json (devDependencies):"
    try { (Get-Content "$Root\package.json" | ConvertFrom-Json).devDependencies.GetEnumerator() | % { "  $($_.Key): $($_.Value)" } } catch { "  (parse error / none)" }
  }
  if (Test-Path "$Root\requirements.txt") { ""; "requirements.txt:"; Get-Content "$Root\requirements.txt" }
  if (Test-Path "$Root\pyproject.toml") { ""; "pyproject.toml (head):"; Get-Content "$Root\pyproject.toml" -TotalCount 80 }
}
Write-CodeBlock $depOut

# 4) Konfigurasi (env redacted) + Docker
if (Test-Path "$Root\.env" -or Test-Path "$Root\.env.example") {
  Write-Title "Konfigurasi Penting (.env redacted)"
  $envPath = if (Test-Path "$Root\.env") { "$Root\.env" } else { "$Root\.env.example" }
  $envOut = Get-Content $envPath | ForEach-Object {
    if ($_ -match '^\s*#' -or $_ -match '^\s*$') { $_ }
    elseif ($_ -match '^\s*([\w\.\-]+)\s*=\s*(.+)$') { "$($Matches[1])=****" } else { $_ }
  }
  Write-CodeBlock $envOut
}
if (Test-Path "$Root\docker-compose.yml") {
  Write-Title "docker-compose.yml (head)"
  Write-CodeBlock (Get-Content "$Root\docker-compose.yml" -TotalCount 120)
}
if (Test-Path "$Root\Dockerfile") {
  Write-Title "Dockerfile (head)"
  Write-CodeBlock (Get-Content "$Root\Dockerfile" -TotalCount 120)
}

# 5) Routes (auto detect; opsional)
Write-Title "Routes (auto-detected, if any)"
$routesOut = & {
  try {
    if (Test-Path "$Root\artisan") {
      $r = php artisan route:list 2>$null
      if ($r) { $r } else { "Laravel detected, but 'php artisan route:list' failed or empty." }
    } elseif (Get-ChildItem -Recurse -Filter "bin/console" | Select-Object -First 1) {
      $c = (Get-ChildItem -Recurse -Filter "bin/console" | Select-Object -First 1).FullName
      & $c debug:router 2>$null
    } elseif (Test-Path "$Root\config\routes.rb") {
      rails routes 2>$null
    } else {
      "No known route command detected. (Laravel/Symfony/Rails not found)"
    }
  } catch { "Route scan failed (ignored)." }
}
Write-CodeBlock $routesOut

# 6) Controllers (auto-detected)
Write-Title "Controllers (auto-detected)"
$controllerGlobs = @(
  "app\Http\Controllers\*.php",
  "app\Controllers\*.php",
  "src\Controller\*.php",
  "src\Controllers\*.php"
)
$controllerFiles = @()
foreach ($g in $controllerGlobs) {
  if (Test-Path $g) {
    $controllerFiles += Get-ChildItem -Recurse $g -Force | Where-Object { Is-IncludedPath $_.FullName }
  }
}
$ctrlOut = @()
if ($controllerFiles.Count -eq 0) {
  $ctrlOut += "No controllers found."
} else {
  foreach ($f in $controllerFiles) {
    $ctrlOut += "===== $($f.FullName) ====="
    $ctrlOut += (Get-Content $f.FullName) -replace "`t","    "
    $ctrlOut += ""
  }
}
Write-CodeBlock $ctrlOut

# 7) Models (auto-detected)
Write-Title "Models (auto-detected)"
$modelDirs = @("app\Models","src\Models","models")
$modelFiles = @()
foreach ($d in $modelDirs) {
  if (Test-Path $d) {
    $modelFiles += Get-ChildItem -Recurse $d -Filter *.php -Force | Where-Object { Is-IncludedPath $_.FullName }
  }
}
$modelOut = @()
if ($modelFiles.Count -eq 0) {
  $modelOut += "No models found or non-PHP models ignored."
} else {
  foreach ($f in $modelFiles) {
    $modelOut += "===== $($f.FullName) ====="
    $modelOut += (Get-Content $f.FullName) -replace "`t","    "
    $modelOut += ""
  }
}
Write-CodeBlock $modelOut

# 8) Views & UI Files
Write-Title "Views & UI Files (listing)"
$viewLists = @()
if (Test-Path "resources\views") {
  $viewLists += Get-ChildItem -Recurse "resources\views" -Include *.blade.php -Force | Where-Object { Is-IncludedPath $_.FullName } | Select-Object -Expand FullName
}
$viewLists += Get-ChildItem -Recurse -Include *.twig,*.cshtml -Force | Where-Object { Is-IncludedPath $_.FullName } | Select-Object -Expand FullName
$viewLists += Get-ChildItem -Recurse -Include *.vue,*.jsx,*.tsx -Force | Where-Object { Is-IncludedPath $_.FullName } | Select-Object -Expand FullName
$viewOut = if ($viewLists.Count -eq 0) { @("No view/UI files found.") } else { $viewLists | Sort-Object | ForEach-Object { $_.Replace($Root,'').TrimStart('\','/') } }
Write-CodeBlock $viewOut

# 9) Entry Points
Write-Title "Entry Points (heuristic)"
$entries = @()
$entries += Get-ChildItem -Recurse -Include "public\index.php","server.php","artisan","app\Console\Kernel.php" -Force | % FullName
$entries += Get-ChildItem -Recurse -Include "src\main.ts","src\main.js","resources\js\app.js","vite.config.*","webpack.*" -Force | % FullName
$entries += Get-ChildItem -Recurse -Include "manage.py","wsgi.py","asgi.py" -Force | % FullName
$entryOut = if ($entries.Count -eq 0) { @("No common entry points found.") } else { $entries | Sort-Object | ForEach-Object { $_.Replace($Root,'').TrimStart('\','/') } }
Write-CodeBlock $entryOut

"== Selesai ==" | Add-Content -Encoding UTF8 $OutFile
Write-Host ("Digest generated: {0}" -f $OutFile)

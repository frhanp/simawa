<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orang;
use Illuminate\Validation\Rule;


class OrangController extends Controller
{
    public function index()
{
    // [DITAMBAHKAN] Ambil query pencarian & filter jabatan dari request
    $q = request('q');             // keyword pencarian (opsional)
    $jabatan = request('jabatan'); // filter jabatan (opsional)

    // [DITAMBAHKAN] Sediakan daftar opsi jabatan untuk dropdown di view
    $roles = [
        'Penanggung Jawab',
        'Wakil Penanggung Jawab',
        'Ketua Tim',
        'Anggota Tim',
        'Pengendali Teknis',
        'Penunjang',
    ];

    // [DIUBAH] Query: sekarang mendukung kombinasi pencarian + filter jabatan
    $items = Orang::query()
        // [DITAMBAHKAN] Filter "q" untuk kolom nama atau jabatan (LIKE)
        ->when($q, function ($w) use ($q) {
            $w->where(function ($x) use ($q) {
                $x->where('nama', 'like', "%{$q}%")
                  ->orWhere('jabatan', 'like', "%{$q}%");
            });
        })
        // [DITAMBAHKAN] Filter persis berdasarkan "jabatan" (equal)
        ->when($jabatan, fn ($w) => $w->where('jabatan', $jabatan))
        ->orderBy('nama')
        ->paginate(15)
        // [DITAMBAHKAN] Pertahankan query string saat berpindah halaman
        ->withQueryString();

    // [DIUBAH] Kirim variabel tambahan ke view: $jabatan & $roles
    return view('inspektur.orang.index', compact('items', 'q', 'jabatan', 'roles'));
}   

    public function create()
    {
        $roles = $this->roles();
        return view('inspektur.orang.create', compact('roles'));
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'nama'    => ['required','string','max:150'],
            'jabatan' => ['required', Rule::in($this->roles())],
        ]);
        Orang::create($data);
        return redirect()->route('inspektur.orang.index')->with('ok','Personel ditambahkan.');
    }

    public function edit(Orang $orang)
    {
        $roles = $this->roles();
        return view('inspektur.orang.edit', compact('orang','roles'));
    }

    public function update(Request $r, Orang $orang)
    {
        $data = $r->validate([
            'nama'    => ['required','string','max:150'],
            'jabatan' => ['required', Rule::in($this->roles())],
        ]);
        $orang->update($data);
        return redirect()->route('inspektur.orang.index')->with('ok','Perubahan disimpan.');
    }

    public function destroy(Orang $orang)
    {
        $orang->delete();
        return back()->with('ok','Data dihapus.');
    }

    private function roles(): array
    {
        return [
            'Penanggung Jawab',
            'Wakil Penanggung Jawab',
            'Ketua Tim',
            'Anggota Tim',
            'Pengendali Teknis',
            'Penunjang',
        ];
    }
}

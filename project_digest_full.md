# Project Digest (Full Content)
_Generated: 2025-09-22 08:14:29_
**Root:** D:\Laragon\www\simawa


## Struktur Proyek (filtered, no depth limit)
```
.git
app
baileys-server
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
phpunit.xml
postcss.config.js
project_digest_full.md
README.md
tailwind.config.js
vite.config.js
app\Console
app\Exceptions
app\Http
app\Models
app\Policies
app\Providers
app\View
app\Console\Kernel.php
app\Exceptions\Handler.php
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Kernel.php
app\Http\Controllers\Auth
app\Http\Controllers\Sekretaris
app\Http\Controllers\AdminController.php
app\Http\Controllers\Controller.php
app\Http\Controllers\DashboardController.php
app\Http\Controllers\InspekturController.php
app\Http\Controllers\LHPController.php
app\Http\Controllers\NotificationController.php
app\Http\Controllers\OrangController.php
app\Http\Controllers\PelaksanaanController.php
app\Http\Controllers\PelaporanController.php
app\Http\Controllers\PreparationController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\SekretarisController.php
app\Http\Controllers\TaskController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Sekretaris\TaskController.php
app\Http\Middleware\Authenticate.php
app\Http\Middleware\EncryptCookies.php
app\Http\Middleware\IsAdmin.php
app\Http\Middleware\IsInspektur.php
app\Http\Middleware\PreventRequestsDuringMaintenance.php
app\Http\Middleware\RedirectIfAuthenticated.php
app\Http\Middleware\SekretarisMiddleware.php
app\Http\Middleware\TrimStrings.php
app\Http\Middleware\TrustHosts.php
app\Http\Middleware\TrustProxies.php
app\Http\Middleware\ValidateSignature.php
app\Http\Middleware\VerifyCsrfToken.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Models\Assignment.php
app\Models\EntryMeeting.php
app\Models\LHP.php
app\Models\LhpOtp.php
app\Models\Notification.php
app\Models\Orang.php
app\Models\Pelaksanaan.php
app\Models\Pelaporan.php
app\Models\Preparation.php
app\Models\Spt.php
app\Models\Task.php
app\Models\User.php
app\Providers\AppServiceProvider.php
app\Providers\AuthServiceProvider.php
app\Providers\BroadcastServiceProvider.php
app\Providers\EventServiceProvider.php
app\Providers\RouteServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
baileys-server\baileys_auth_info
baileys-server\node_modules
baileys-server\package-lock.json
baileys-server\package.json
baileys-server\server.js
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4K.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4M.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4O.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4Q.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4R.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4S.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4T.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4U.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4V.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4W.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4X.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4Y.json
baileys-server\baileys_auth_info\app-state-sync-key-AAAAAN4Z.json
baileys-server\baileys_auth_info\app-state-sync-key-AAcAAN4a.json
baileys-server\baileys_auth_info\app-state-sync-key-AAcAAN4L.json
baileys-server\baileys_auth_info\app-state-sync-key-AAcAAN4N.json
baileys-server\baileys_auth_info\app-state-sync-key-AAcAAN4P.json
baileys-server\baileys_auth_info\app-state-sync-version-critical_block.json
baileys-server\baileys_auth_info\app-state-sync-version-regular.json
baileys-server\baileys_auth_info\app-state-sync-version-regular_high.json
baileys-server\baileys_auth_info\app-state-sync-version-regular_low.json
baileys-server\baileys_auth_info\creds.json
baileys-server\baileys_auth_info\pre-key-10.json
baileys-server\baileys_auth_info\pre-key-15.json
baileys-server\baileys_auth_info\pre-key-18.json
baileys-server\baileys_auth_info\pre-key-20.json
baileys-server\baileys_auth_info\pre-key-23.json
baileys-server\baileys_auth_info\pre-key-26.json
baileys-server\baileys_auth_info\pre-key-27.json
baileys-server\baileys_auth_info\pre-key-29.json
baileys-server\baileys_auth_info\pre-key-32.json
baileys-server\baileys_auth_info\pre-key-33.json
baileys-server\baileys_auth_info\pre-key-34.json
baileys-server\baileys_auth_info\pre-key-35.json
baileys-server\baileys_auth_info\pre-key-36.json
baileys-server\baileys_auth_info\pre-key-37.json
baileys-server\baileys_auth_info\pre-key-38.json
baileys-server\baileys_auth_info\pre-key-39.json
baileys-server\baileys_auth_info\pre-key-40.json
baileys-server\baileys_auth_info\pre-key-41.json
baileys-server\baileys_auth_info\pre-key-42.json
baileys-server\baileys_auth_info\pre-key-43.json
baileys-server\baileys_auth_info\pre-key-44.json
baileys-server\baileys_auth_info\pre-key-45.json
baileys-server\baileys_auth_info\pre-key-46.json
baileys-server\baileys_auth_info\pre-key-47.json
baileys-server\baileys_auth_info\pre-key-48.json
baileys-server\baileys_auth_info\pre-key-49.json
baileys-server\baileys_auth_info\pre-key-50.json
baileys-server\baileys_auth_info\pre-key-51.json
baileys-server\baileys_auth_info\pre-key-52.json
baileys-server\baileys_auth_info\pre-key-53.json
baileys-server\baileys_auth_info\pre-key-54.json
baileys-server\baileys_auth_info\pre-key-55.json
baileys-server\baileys_auth_info\pre-key-56.json
baileys-server\baileys_auth_info\pre-key-57.json
baileys-server\baileys_auth_info\pre-key-58.json
baileys-server\baileys_auth_info\pre-key-59.json
baileys-server\baileys_auth_info\pre-key-60.json
baileys-server\baileys_auth_info\pre-key-7.json
baileys-server\baileys_auth_info\pre-key-8.json
baileys-server\baileys_auth_info\sender-key-120363421135933006@g.us--134935490900175--1.json
baileys-server\baileys_auth_info\sender-key-status@broadcast--6285343941074--0.json
baileys-server\baileys_auth_info\session-134935490900175.1.json
baileys-server\baileys_auth_info\session-6282296036930.0.json
baileys-server\baileys_auth_info\session-6285179841091.0.json
baileys-server\baileys_auth_info\session-6285179841091.16.json
baileys-server\baileys_auth_info\session-6285179841091.17.json
baileys-server\baileys_auth_info\session-6285179841091.19.json
baileys-server\baileys_auth_info\session-6285179841091.7.json
baileys-server\baileys_auth_info\session-6285342513758.0.json
baileys-server\baileys_auth_info\session-6285342513758.39.json
baileys-server\baileys_auth_info\session-6285342513758.40.json
baileys-server\baileys_auth_info\session-6285343941074.0.json
bootstrap\cache
bootstrap\app.php
bootstrap\cache\.gitignore
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\broadcasting.php
config\cache.php
config\cors.php
config\database.php
config\filesystems.php
config\hashing.php
config\logging.php
config\mail.php
config\queue.php
config\sanctum.php
config\services.php
config\session.php
config\view.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\2014_10_12_000000_create_users_table.php
database\migrations\2014_10_12_100000_create_password_reset_tokens_table.php
database\migrations\2019_08_19_000000_create_failed_jobs_table.php
database\migrations\2019_12_14_000001_create_personal_access_tokens_table.php
database\migrations\2024_10_13_064842_add_role_to_users_table.php
database\migrations\2024_10_13_081536_create_tasks_table.php
database\migrations\2024_10_13_103146_add_status_column_to_task_table.php
database\migrations\2024_10_14_015440_add_created_by_and_supervisor_id_to_tasks_table.php
database\migrations\2024_10_14_034113_add_rejection_reason_to_tasks_table.php
database\migrations\2024_10_15_074533_create_km4_table.php
database\migrations\2024_10_15_074533_create_pka_table.php
database\migrations\2024_10_15_074538_create_entry_meetings_table.php
database\migrations\2024_10_21_095145_create_spts_table.php
database\migrations\2024_10_21_140538_create_preparations_table.php
database\migrations\2024_10_22_032400_create_pelaksanaan_table.php
database\migrations\2024_10_22_034719_remove_sent_to_inspektur_from_pelaksanaan_table.php
database\migrations\2024_10_23_041546_create_pelaporans_table.php
database\migrations\2024_10_23_043657_create_l_h_p_s_table.php
database\migrations\2024_11_23_181613_add_tanggal_expose_and_status_to_pelaporans_table.php
database\migrations\2024_12_02_115734_add_alasan_tolak_to_pelaporans_table.php
database\migrations\2024_12_24_141937_add_status_to_lhp_table.php
database\migrations\2024_12_24_161537_add_reason_to_lhp_table.php
database\migrations\2024_12_24_172044_change_team_composition_column_type_in_tasks_table.php
database\migrations\2024_12_24_172921_create_orang_table.php
database\migrations\2025_08_23_144728_add_catatan_jadwal_to_pelaporans.php
database\migrations\2025_08_23_152126_alter_status_enum_on_pelaporans.php
database\migrations\2025_09_06_064610_add_phone_number_to_users_table.php
database\migrations\2025_09_06_064619_create_lhp_otps_table.php
database\migrations\2025_09_17_131621_create_notifications_table.php
database\seeders\DatabaseSeeder.php
database\seeders\OrangSeeder.php
database\seeders\UserSeeder.php
public\build
public\css
public\images
public\js
public\storage
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
public\css\pdf_style.css
public\images\hero.png
public\images\hero2.png
public\images\logo_inspektorat.png
public\images\LOGO_KOTA_GORONTALO.png
public\js\alpine.js
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\admin
resources\views\auth
resources\views\components
resources\views\dashboard
resources\views\inspektur
resources\views\layouts
resources\views\lhp
resources\views\pelaksanaan
resources\views\pelaporan
resources\views\preparations
resources\views\profile
resources\views\sekretaris
resources\views\task
resources\views\tasks
resources\views\vendor
resources\views\dashboard.blade.php
resources\views\lp.blade.php
resources\views\welcome.blade.php
resources\views\admin\entry-meeting.blade.php
resources\views\admin\km4.blade.php
resources\views\admin\persiapan.blade.php
resources\views\admin\pka.blade.php
resources\views\admin\spt.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\dashboard\admin.blade.php
resources\views\dashboard\inspektur.blade.php
resources\views\dashboard\sekretaris.blade.php
resources\views\inspektur\orang
resources\views\inspektur\approve_inspektur.blade.php
resources\views\inspektur\orang\create.blade.php
resources\views\inspektur\orang\edit.blade.php
resources\views\inspektur\orang\index.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\lhp\create.blade.php
resources\views\lhp\edit.blade.php
resources\views\lhp\index.blade.php
resources\views\pelaksanaan\create.blade.php
resources\views\pelaksanaan\edit.blade.php
resources\views\pelaksanaan\index.blade.php
resources\views\pelaksanaan\show.blade.php
resources\views\pelaporan\create.blade.php
resources\views\pelaporan\edit.blade.php
resources\views\pelaporan\index.blade.php
resources\views\preparations\admin_index.blade.php
resources\views\preparations\create.blade.php
resources\views\preparations\index.blade.php
resources\views\preparations\show.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\sekretaris\penugasan
resources\views\sekretaris\spt
resources\views\sekretaris\task
resources\views\sekretaris\penugasan\index.blade.php
resources\views\sekretaris\spt\upload.blade.php
resources\views\task\sekretaris
resources\views\task\edit.blade.php
resources\views\task\index.blade.php
resources\views\task\pertimbangan.blade.php
resources\views\task\planning.blade.php
resources\views\tasks\pdf
resources\views\tasks\create_pdf_form.blade.php
resources\views\tasks\pdf\team_composition_with_data.blade.php
routes\api.php
routes\auth.php
routes\channels.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\public
storage\app\.gitignore
storage\app\public\berita_acara_entry
storage\app\public\berita_acara_exit
storage\app\public\entry_meeting_photos
storage\app\public\exit_meeting_photos
storage\app\public\lhp_files
storage\app\public\preparations
storage\app\public\spt_files
storage\app\public\uploads
storage\app\public\.gitignore
storage\app\public\berita_acara_entry\858lfqSb9VtNMhrUEFY8Pa6hkqYCqXyiRRKW9yY0.pdf
storage\app\public\berita_acara_entry\aidKVYRnhrqx8QmNAeV7geOuYVX8M3mczqSh2qv5.pdf
storage\app\public\berita_acara_entry\BQDPr1QSKstrWnbu3hcvh5o6JhwpGAL9MfwVW0dw.docx
storage\app\public\berita_acara_entry\fsgIjz6LiklN9iD8wjv5pMhcmjHKAbTzCKvOBQLS.docx
storage\app\public\berita_acara_entry\GOXosB49i3lYWWxDdaXRhM8Vicg785RoU3jzYfKO.pdf
storage\app\public\berita_acara_entry\HAfBBYS1HJyZjsznr0LOLES9PC2JRyiWTgSxQudl.pdf
storage\app\public\berita_acara_entry\iXwr9T8hGgzOoIGuxw0lqPiOuewO7wnrSdNSCsff.pdf
storage\app\public\berita_acara_entry\JYh2eElzeMkJWBTOatMDVPuv0Y0N5wOKEmzivUvL.pdf
storage\app\public\berita_acara_entry\notYv2ZPCcW3F6Pkdjqd7yuPjY1QNWYZtEX2HPOi.docx
storage\app\public\berita_acara_entry\P0zHlmuyVpPrVrlKsxeTgTiQCfP4mOZqipYtKOYE.pdf
storage\app\public\berita_acara_entry\rdxOwd80IWweB51K9uqnohEl5t8ofE7PwzatyXEy.docx
storage\app\public\berita_acara_exit\57LewcJaEsUXtRZdmhV6Y3qlaHlHLglJpikmypcr.pdf
storage\app\public\berita_acara_exit\5PmroIbrY6e4Z0Yh8CWa64NbmP0Qksp8bGX8k71d.pdf
storage\app\public\berita_acara_exit\9GxIi21pKgSeWdHaMM4yb24UiPqoPnQDDZFnN0uB.pdf
storage\app\public\berita_acara_exit\eEEvD0scsj3q1FO3kyM6ALvosCBfK7CwTP17Syid.docx
storage\app\public\berita_acara_exit\OImvrZurkQMmxeHDYaFNdr39wHqiP5T15RjXvdVb.pdf
storage\app\public\berita_acara_exit\okU1XkngVonhYScIc7kYwnB93fwcqHuETP6uUnAi.docx
storage\app\public\berita_acara_exit\OLjA61e1ox27MG2XBV5nV0SypeuujrPYOkI2QQ7e.docx
storage\app\public\berita_acara_exit\S3Lu7Jfc6iV9JyBvAvcUOHaDTcC393YSBpArlLV1.docx
storage\app\public\berita_acara_exit\vlcOBRCioUhSF7x192M1vwkJo5Rgva9ZdWUsCBJD.docx
storage\app\public\berita_acara_exit\vsOzJXwuBpEtkIsQEm9riVV4iRAScs61HlMSntPF.pdf
storage\app\public\berita_acara_exit\xs2v21bHSi1z9FzD0nv7XYWblZwIu5mWn0jX52Cl.docx
storage\app\public\entry_meeting_photos\BJDKDwnA6MRbBMuF6P3Pa1Gw5aDHyN6AuGyCOYJF.jpg
storage\app\public\entry_meeting_photos\ccKDHrI5RxJWST7kmNn23GhV24XPN3E4FMI8FBu0.png
storage\app\public\entry_meeting_photos\eTiuEThFuPgH2hOrwqOUdzZ1EA3yMo346DUWVyFP.jpg
storage\app\public\entry_meeting_photos\Hdtokg6HxIdh3w4sYQYnrHqj1DZpeXHxegw4F3WK.png
storage\app\public\entry_meeting_photos\jja9uNktHfODSw4xRg0I6HWOCZ8vlp7RujjVs3rP.png
storage\app\public\entry_meeting_photos\jjy9CfVtrNpPTq4rCmpRGeO20ixVp3vwe1w1wqNz.png
storage\app\public\entry_meeting_photos\LXRdINCKdTRs9pCjtzWA2GbAdjmeXs7rFmQIyeWj.png
storage\app\public\entry_meeting_photos\PFLl75nhIG3z1hO68Bysxpp31VbVgHRkfXvpEEOW.jpg
storage\app\public\entry_meeting_photos\vkNIspECSsrqc0RLkD4xjtsJ6QsAS48R35cg9jND.png
storage\app\public\entry_meeting_photos\Z8uo1CHJLWDlr3ajVWVSaKYtqCXOn8JcptN7HZN9.png
storage\app\public\entry_meeting_photos\zgxNwwLfNkyGdpfDHYqQ1iyCGumMajhRwKYK7Yyo.jpg
storage\app\public\exit_meeting_photos\0FQvq71IqSSVYKTj5ESyixMnzOZTmnSBCY4SvfV3.jpg
storage\app\public\exit_meeting_photos\0nTU06EvB6IObncFrFYCgH5KgYaK6RkKm1Hk7My9.jpg
storage\app\public\exit_meeting_photos\1PdxJUYdawy6orVk1maPvZ9kvRU44Mgkirc8jkp7.png
storage\app\public\exit_meeting_photos\9Z7A9GCNedlqJrC3dsYiqTDo2rmRycOcai7PbESy.jpg
storage\app\public\exit_meeting_photos\GhclAGaenVcSTe1txxb3HwKqyS2ltNRaoZ2SawvA.jpg
storage\app\public\exit_meeting_photos\hDK31C5H873Xfsz919pNIRw7Q0unGrTXtfLgaDsS.png
storage\app\public\exit_meeting_photos\kdmaElYdchjlRz3Y6GB2t1Rm2yMbhibFXERL8b5u.png
storage\app\public\exit_meeting_photos\rqraSoTORhBPXrp0EsO2R28okU7Hch57PFpRIFAn.png
storage\app\public\exit_meeting_photos\T4iDsLTetkwXxmRtmnj3l08tuuhS5J8yqQZCWZOP.png
storage\app\public\exit_meeting_photos\U2sZyb5NSzwIva6irwdNufoLCU3s3rDEMNOOMCqY.jpg
storage\app\public\exit_meeting_photos\VoonDSMZ7KjRHqDzOXJ4rDFXIIBUS0pDyUggO9So.png
storage\app\public\lhp_files\KR7mS8KR201iOwvDHxUNbMY3zvlmrg4248CsZiyb.pdf
storage\app\public\lhp_files\rHeGMb8UXPb5J17dOUjJhp4u6AlMZ1TIBzkHBv4d.pdf
storage\app\public\preparations\formulir_km4
storage\app\public\preparations\pka
storage\app\public\preparations\formulir_km4\6B352lbZIUG4dmt0QosOPnpcKIc9lTY4BL9DtN4o.pdf
storage\app\public\preparations\formulir_km4\KHfUC1vRVv4wJCUDNlm4VAVE4u9eYSy7JvkVvTxf.pdf
storage\app\public\preparations\formulir_km4\nrkYleRIT6WpClF5dA1TSWu0tOQbT4JpL9ieftMB.pdf
storage\app\public\preparations\formulir_km4\PDR0x4aaxM8DAAW71XpPRe3yTEHpSfsGA6Dr3ERl.docx
storage\app\public\preparations\formulir_km4\qVWNIlW6dpLEfAuFMXGwiJKBDEJtGWTx0QEO4fMA.pdf
storage\app\public\preparations\formulir_km4\rhAcKgjZfDg7YS9dukTH7GQAebYtC2U2hptbmyth.pdf
storage\app\public\preparations\formulir_km4\sguGHbIKBfga6aD6VWvm0VGmF4ZKvkPeRLddqESR.pdf
storage\app\public\preparations\formulir_km4\TimMUkS9XuDe3Mg7u9I674Hn2wi4xp4l7XGK9CaD.docx
storage\app\public\preparations\formulir_km4\UFu0Vt5afxMI5pDO1JL0w2qIVUAzLyvxB8QiJZP2.pdf
storage\app\public\preparations\formulir_km4\V7Fm5iNwhu3NEkwikqY9XEIUtWMV3FoneMOLdHTi.pdf
storage\app\public\preparations\formulir_km4\WMSIBb645cU5Yq6xyuNpRnigVS24MK8lL1W8Zyyj.pdf
storage\app\public\preparations\formulir_km4\ZZducPwJrANfNxTtfcXGVgF169HfQ4lrZpBLNbNn.pdf
storage\app\public\preparations\pka\0RMp4jvny8crGivDtR88hFXHc78N4mIVOtJXMCJW.pdf
storage\app\public\preparations\pka\13YI139mxsQywKJRbB4xsDKMBoDWa4CkXqjpVbDX.pdf
storage\app\public\preparations\pka\265D8lRzqqocaO0E9bRbeJuFxT2BzvkWGnUBgIGh.docx
storage\app\public\preparations\pka\60NOXvHoF8tNHpOwjSRuYCEfbPfbFFWGpf3M2x1v.pdf
storage\app\public\preparations\pka\71p3bGcERfXxeedeNsng0yImiPfzfOGKseFWRHaS.pdf
storage\app\public\preparations\pka\CdVbCvqx2KBT7nKXuCOQ1HJuLYi5EGucp1vi7CTk.pdf
storage\app\public\preparations\pka\DxFlXFqLvzAVd1qHHvREfRf9bXrudOyaS7GG06kN.pdf
storage\app\public\preparations\pka\HBXO3zCqeBZBoaS5Oz7I9xNnPvceatVWj6WJ5yIH.docx
storage\app\public\preparations\pka\JQB4mgsVn4KxAdXAAgqDDdcN62PfCQIBRoCysZHx.pdf
storage\app\public\preparations\pka\qW3CKrVcQKN8jsTmOPtGMnplUtdGIN73lZMJ2ajx.pdf
storage\app\public\preparations\pka\x7fy5tnSWMIwhGzJlBH2QrmYFzhCxhQaiZsjaS5x.pdf
storage\app\public\preparations\pka\yS8eeTGPSS0uiGcsuDMlIf8bQJ6EP3SGkDqqw0dI.pdf
storage\app\public\spt_files\1729505787_LAPORAN_AUDIT_UPA_PERPUSTAKAAN.docx
storage\app\public\spt_files\1729505824_audit.pdf
storage\app\public\spt_files\1729582924_audit.pdf
storage\app\public\spt_files\1729584426_Pdf_Farhan.pdf
storage\app\public\spt_files\1729737649_document.pdf
storage\app\public\spt_files\1729746974_mqSh9nZ7LH1jjiPx5jGGqianrKkA0RvCBxRJTnS8.docx
storage\app\public\spt_files\1735469026_document_39.pdf
storage\app\public\spt_files\1753715816_PERNYATAAN_BUKAN_PNS.pdf
storage\app\public\spt_files\1757139834_komposisi_tim_1.pdf
storage\app\public\spt_files\1758465993_komposisi_tim_5.pdf
storage\app\public\spt_files\1758468338_1758465993_komposisi_tim_5.pdf
storage\app\public\uploads\lhp
storage\app\public\uploads\pelaporan
storage\app\public\uploads\lhp\3coNH7Yp0fWA1CZh2Q317sQmJ9xsK9jalgPRhjW8.docx
storage\app\public\uploads\lhp\aooFQiJSM6Ko4SH7xsPRdx7RgLDvXqjoF5NtWhMr.pdf
storage\app\public\uploads\lhp\B9MQiQTSLdyGLtec9dTQ757vzOMHNr0tUxB14O9i.pdf
storage\app\public\uploads\lhp\dEFkIS3uCvVFVcuJKLnz9jcv9nBqPbKL1wCcZZTh.pdf
storage\app\public\uploads\lhp\fDel6elGWEL4EvZJYDQyOb2MAi5oXncidGn1fa4M.pdf
storage\app\public\uploads\lhp\fKV7BeVutKkL3Yks8rDmtspJj7w925owuFo1KuSY.pdf
storage\app\public\uploads\lhp\gAsTeXOepy8I8ejHXv9yZdEqUm5dLAjHITOLKdw8.pdf
storage\app\public\uploads\lhp\jlGxqvvZcGdHv2jokP3obua3iBX9JVD2KlM7Zsv2.docx
storage\app\public\uploads\lhp\kUvsDJtAc05OFnmJi7THJTVd7zuYoVBX4lkwsbJr.pdf
storage\app\public\uploads\lhp\NpISWMrnajtv7pcmsKt3CcAKAZfp2QROBvCUUUmE.pdf
storage\app\public\uploads\lhp\qCHV832YqV2Oj87dfAcDZHNc34XOMiNDKJGofdrW.pdf
storage\app\public\uploads\pelaporan\0GjWqgPBahNBKxe32807MGl3aAXrAKqsM9Z4YKsj.pdf
storage\app\public\uploads\pelaporan\16AqappHIJJNcY56nroYLuf8fgrtU7BsXbf6gQIT.pdf
storage\app\public\uploads\pelaporan\2Mze4e6wESnByBEh8p8ndZtbMzEFVOwEagowbXVE.docx
storage\app\public\uploads\pelaporan\2vVaY7bmkNPX069zLZIHpxG0wHCojIHsKxohjIem.docx
storage\app\public\uploads\pelaporan\4fS4ykOSUNvCF4lRGtILLF4aX5GkEIKblgpVZZKY.pdf
storage\app\public\uploads\pelaporan\5AMOjoypdwovnpU5ZtrBDxJ1UFUsUfcgjklPue7r.docx
storage\app\public\uploads\pelaporan\6ug9eJtUsJLlTZN9tFgxdWKcR5PVpnPAlHtx6zsJ.pdf
storage\app\public\uploads\pelaporan\6X77keifZm7d5kNOGTuH76KOsinps3GHsZhGhdr3.pdf
storage\app\public\uploads\pelaporan\8DmkviQ78UwtDHyXFL5tR7lREM5Vyc5PWhlGxMLK.pdf
storage\app\public\uploads\pelaporan\9l08xqDlMg7Y1PYzMklHmAuZNmGt41ErelQA0jzh.pdf
storage\app\public\uploads\pelaporan\9mxkDV6jPJUMuqHDfd51mOlIlNeIgNCYaW7jDfv0.pdf
storage\app\public\uploads\pelaporan\9tbFDr44udPhgNxlRK40kmlTVuvtGM6y0nwb35xp.pdf
storage\app\public\uploads\pelaporan\A3J1xdqQ2SLDHsQDNodlsJOyV9mEA8HtZYmO2mrv.pdf
storage\app\public\uploads\pelaporan\aSanXjBNevhYtLNtpqEQ84bekw3jfnsHn443kOyJ.pdf
storage\app\public\uploads\pelaporan\B66ZGS6QGoSbD6qj6T77whzRmlw2nZ0MmfEMiH0f.pdf
storage\app\public\uploads\pelaporan\B99vDA5NPYzXmnNiGGR9lD2n0LYPI0vN486xikBV.docx
storage\app\public\uploads\pelaporan\bQf0Gev1Hu7h12SuwB25b2mf7mtqxZob9sPH4WpZ.pdf
storage\app\public\uploads\pelaporan\bz37hIFVFCS8Vy3DoGXzOMAU8T6i9uFnU4ftiXKW.pdf
storage\app\public\uploads\pelaporan\c2CMv1usBR46tmIgNVWceioJ6NNMyYA1oDdrsPLd.pdf
storage\app\public\uploads\pelaporan\Cn0EjSSm6fUpJCB2t5YpYzSeEtFO5S4MpeEay3xq.docx
storage\app\public\uploads\pelaporan\CQ07hgFthvwKlM79BDCh9TtVujFkvP1XEwraiJpm.pdf
storage\app\public\uploads\pelaporan\dNUDtTCb3WumQZVqUbafU2Z1O40xYrO5lqHSwRF5.pdf
storage\app\public\uploads\pelaporan\EhW6lNJmAmosHkKwZ7CsY2vXfWmzgSydcamY1mOw.pdf
storage\app\public\uploads\pelaporan\eSttJmDhocqCzoqwpYLmcmhaco8WBLaqvCTcs8Oh.pdf
storage\app\public\uploads\pelaporan\GMbJWXEFn6meGP7u0UhJv18s8T58zGkaadRpBCb8.pdf
storage\app\public\uploads\pelaporan\hULjuip9OxIBu10MgIPMHiyN3OQq08KxdK3jKOv0.pdf
storage\app\public\uploads\pelaporan\iglKtDiYEGvzyO8B1qwLdBQRoTP9HdZpiq7JFpy0.pdf
storage\app\public\uploads\pelaporan\iwY390yYWwRIVhXmZM6AV4mPvi9mh2CKK7bxu7An.pdf
storage\app\public\uploads\pelaporan\jgTCagI4Jl1WGEFRhBORspf2Ov04NnaIf2JO30cb.pdf
storage\app\public\uploads\pelaporan\JIvvFY7gl0CNrSlTEjPEolq8iVJM23J4VyKnxOY0.pdf
storage\app\public\uploads\pelaporan\LINnsHEYFdDqlXeXwFAxSojHKCROAIPD1ZkfxyQr.pdf
storage\app\public\uploads\pelaporan\LqGD6HN8M69JRtnlGVIH8dfrSGNKuxlnhVa5bJtu.pdf
storage\app\public\uploads\pelaporan\mbvyuxexUPbgiTjfaiKOQkfxNtSRiGoa1FGsKwua.pdf
storage\app\public\uploads\pelaporan\mHFcwDij9ZIiAltFkb6oNsM807zJ54YvVn5CthFi.pdf
storage\app\public\uploads\pelaporan\MPPIl8u1CHYSeFerGHO4yTX1APWCTWINIzMaZmgx.docx
storage\app\public\uploads\pelaporan\mqSh9nZ7LH1jjiPx5jGGqianrKkA0RvCBxRJTnS8.docx
storage\app\public\uploads\pelaporan\oGH3GltUGrxExyUX1M7vPY3fGBPDJ4U1EHqEs9a9.pdf
storage\app\public\uploads\pelaporan\oglZXBwIIMViOYZ4Zv7VI5zD8gS3zpLabkL68pXA.pdf
storage\app\public\uploads\pelaporan\oL7xrATaMqnnI7OO4nukoB07UOgrIkxktKf2L53g.pdf
storage\app\public\uploads\pelaporan\OMW95dfTsKy91Jzhnqb3FbQRMV9xJzNYGimDxmzB.docx
storage\app\public\uploads\pelaporan\PjvqbfYqEC855QRkaNIx7vVJkgzL4evDkhG3sIuS.docx
storage\app\public\uploads\pelaporan\Q5FQIdBRDYIIplYEui5V5fU00HGARmijlCQt998K.pdf
storage\app\public\uploads\pelaporan\qmOoKAzQmVHmEn2xQLcAVRYzBXc9pz6K7XZQfYNf.pdf
storage\app\public\uploads\pelaporan\RP0x3cpvrCNm3dBR5h1oExRlsTmSjwhAyGD2Drcl.pdf
storage\app\public\uploads\pelaporan\RU48iq5mpU01UmD19hjpmwVgqKdwQzHBAO4MhIqH.pdf
storage\app\public\uploads\pelaporan\RVrlbqaTeANkStRjZX0OUIPWQLE6gA6sHwL2GOnK.pdf
storage\app\public\uploads\pelaporan\RzfyQhMi3r7jNj1zDgfpxvT85xoq8n2NHDSt3MWw.pdf
storage\app\public\uploads\pelaporan\S856IsGOgWHEAsN1wg7ktFf1CdIbjVzmD01RZF3l.pdf
storage\app\public\uploads\pelaporan\TuMyH53zTZ6G1AmcYSUc9D8tZP3Gcz1rJOrMKwcD.pdf
storage\app\public\uploads\pelaporan\uC9PL6NAiUAzXKmfUEpfMfuwM5Cbnh4h0XScad2J.pdf
storage\app\public\uploads\pelaporan\UOgqFHZkxcg7tMxe280WrP96JVFBQJPP7PLrMSzI.docx
storage\app\public\uploads\pelaporan\UuPi0Ip5xcvY9lZPkXtjWsZfr15SGrG0gaehhAW6.pdf
storage\app\public\uploads\pelaporan\vDTY3s9UFqQaJEC5hYe19V9KFbjUToJygDLoemH5.pdf
storage\app\public\uploads\pelaporan\VFWJ31Zu3uhST6EsGsHcqPzVZ4i79vs7AOzG7XdA.pdf
storage\app\public\uploads\pelaporan\vKQsOwhhbmmO4a4wRLVoDpwGQdVBw51QR6Xs6Zj9.pdf
storage\app\public\uploads\pelaporan\w34YxECpO1wHkaI1j77rPMMjJGhBDpH4uLWDNgg0.pdf
storage\app\public\uploads\pelaporan\WLLIqqBxjYYix28wLqq9pFU70BzW8X4EUZbaSTSI.pdf
storage\app\public\uploads\pelaporan\wMlUMyxRFzt6zOJZXmtBPXND9iD4PSuk8uxJo37k.docx
storage\app\public\uploads\pelaporan\WXeHw1euKyFJNKPRzyxpdWCzxBad5GGKRLBaI70y.pdf
storage\app\public\uploads\pelaporan\xQfvGR8YWh0U890fooUnFf2itbh05t52H4cjaLj0.pdf
storage\app\public\uploads\pelaporan\z16HLum32MPoUUrBzpULDd8ShRK6ylXs4aGV0sH7.pdf
storage\app\public\uploads\pelaporan\zH9paJq9AlFUJuXJLTyHUetHQiYwpg4usdlCDH93.pdf
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\1b
storage\framework\cache\data\2c
storage\framework\cache\data\4a
storage\framework\cache\data\5d
storage\framework\cache\data\6b
storage\framework\cache\data\dc
storage\framework\cache\data\.gitignore
storage\framework\cache\data\1b\fe
storage\framework\cache\data\2c\6e
storage\framework\cache\data\4a\fa
storage\framework\cache\data\5d\fc
storage\framework\cache\data\6b\c5
storage\framework\cache\data\dc\4a
storage\framework\sessions\.gitignore
storage\framework\sessions\oNMQsZEMETNtvQqX8KhWQjglSgk4yIafuEI66cyy
storage\framework\sessions\qlM5913D8kRpnpStNmTgwSxcHmG6uQhskaePAv8y
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\001cb81e1afba3b8d5675e0496c5347d.php
storage\framework\views\008bd6c00a58c2b194356e4be02059c5.php
storage\framework\views\01079774735f0986214c05908affaf45.php
storage\framework\views\03a8676d95d6b63316481cade49d8a73.php
storage\framework\views\0c16913cfa7ee65f45cc147542f16225.php
storage\framework\views\0cd78db15073c3405b694e777e61b3f4.php
storage\framework\views\11c3fc84eb1daa63795b629a1f30d850.php
storage\framework\views\14eddcdb316f568aa09cf92314ed080f.php
storage\framework\views\15d96078c7fcecd8a783424411363bab.php
storage\framework\views\1a23cf467ab7363fff6f96da6ae31a7f.php
storage\framework\views\1a49e2ebe23b0ab30ab3911bd79a1845.php
storage\framework\views\1a7213077000f1cc333294926e426022.php
storage\framework\views\1d03356cfb0ed02f0a916b8e6875f138.php
storage\framework\views\253df6d4b5b2a3ca5e2a98da1717e9b1.php
storage\framework\views\302f9b4d1193ee6a929e2219ff51577d.php
storage\framework\views\361b29ef5e089b1b8f3334ff4d30ff55.php
storage\framework\views\362f08b0410201dfb6378b2d05b79736.php
storage\framework\views\39868c82b77a95800e13feabbc0fb055.php
storage\framework\views\3ee34c4715e4e4a3930b3c52ea10ce63.php
storage\framework\views\3fd1b0b4d0860551569bd0dedb7cba79.php
storage\framework\views\41366b0dbf01c9e09f14970cc6721b90.php
storage\framework\views\43275602a39382386a707c5fcc4ed110.php
storage\framework\views\43702a28f27a884bd3bf76246296158b.php
storage\framework\views\446a1881fb4dfe7fdd02779004b302d1.php
storage\framework\views\4572a8a815e9b553cec092e523d7134b.php
storage\framework\views\50802ededb51788eded50c4f9fa5e2ae.php
storage\framework\views\5458ce64c5666bda60a860f2637dde71.php
storage\framework\views\57ee91cd628703987ae586e1899ae24b.php
storage\framework\views\5fc7f0677dcd7ac040b2a8fb53be5208.php
storage\framework\views\6115783d1d2eed100c219c1cb554287b.php
storage\framework\views\690ef530c0034921160956ff4473c73b.php
storage\framework\views\6dfa1cc236c4a0af00078ad7a13838d7.php
storage\framework\views\6ff7a7021cac1ff696e4e9c7c423f886.php
storage\framework\views\702eaad7ba2516652e9cedfbea36df1b.php
storage\framework\views\76481b0f2e263c898ba4b6327788802f.php
storage\framework\views\7780b41f2da23c4ab4ca8969c4c82a9f.php
storage\framework\views\77d369d0a9489ed38702803c3950320c.php
storage\framework\views\7867e6def22eb864518961c94394a181.php
storage\framework\views\7a4e932c78bd5621752157aa2b036f69.php
storage\framework\views\7e3689e151b1d97f459b9791761870cf.php
storage\framework\views\80f9b9b99c9bc32c0f2a5fa4cdd37253.php
storage\framework\views\813ca7d5f9d6a1955f98170b7d849746.php
storage\framework\views\82589d02f87c1d874dc91d424005a54f.php
storage\framework\views\8766cb5751f6bdd59c8383bfa508e49f.php
storage\framework\views\8af798cf388c0d3b2293767c9f0a68e4.php
storage\framework\views\8cf2bc2dcb53f9c32ef2d1a387b7b3ee.php
storage\framework\views\90b0e8a5260d45aaf586144f86c08fae.php
storage\framework\views\99286b23a7b8def6678f6f178ae251ce.php
storage\framework\views\99940faee05f5ef0a48663f1ae5d8f84.php
storage\framework\views\99d87f68c2f9776465157b17f58f9a21.php
storage\framework\views\9b0354d7b8a069dc16a326bf5a421955.php
storage\framework\views\9bda40237184ff7f7186d780210943a0.php
storage\framework\views\9bf1b33a9d19fa581d2867fe12b53a84.php
storage\framework\views\9f07b91075aca6e845f9b9abb268bd43.php
storage\framework\views\9f13b961e376959e8a95c26069090b71.php
storage\framework\views\a08e64d04d44bf6fcee2d5f358ded9db.php
storage\framework\views\a3ad377f73f225057e339aa84a271556.php
storage\framework\views\a4b8df39fc2fc7bd77de40e1728506f4.php
storage\framework\views\a646a033151ea9d635dc383747aff02e.php
storage\framework\views\a7c1c12690b36cc3d74f04f97879cd36.php
storage\framework\views\a7d1412c273c41a65a2cc0fbc4dfcf35.php
storage\framework\views\a92d77b3d0f61c0d8077ec4c3326ac32.php
storage\framework\views\ab308be6fc63e48096523f1c8abe7325.php
storage\framework\views\b00e8de0ca126c9dbd1ebbcfc33f9a78.php
storage\framework\views\b0f5893baddc3aa76b9a8450522dd3fc.php
storage\framework\views\b2d2c13cfe73f58b55ab770ab48f7dc0.php
storage\framework\views\b5601252a0b605e285d55b42e6edb37c.php
storage\framework\views\b882f1089a1b52536047168761487fad.php
storage\framework\views\bc584e00eda95fd1aac4e74417d4c69b.php
storage\framework\views\c85af56599ef873e2faf5c74a67934ce.php
storage\framework\views\c9155aba4d4b765885080f2491765172.php
storage\framework\views\ca8798e581637abd1033de8d7d49aba1.php
storage\framework\views\cc380330d14c22990abe44d928c063ca.php
storage\framework\views\cc6cc8d357945e273876d6c04caa9d29.php
storage\framework\views\cc94ce07c866a79fc808ab84f78ade83.php
storage\framework\views\d68b3cc517713717a683c17c31ae0878.php
storage\framework\views\d8b8dc0e5136eee3e9e65ac50d059d80.php
storage\framework\views\e1a479134557da9a9f066347070725f1.php
storage\framework\views\e5e526647a8f4f42bc52120dea392140.php
storage\framework\views\e64393e1acf16da68e14cc6840692fec.php
storage\framework\views\e6eefb110d20dcb88aca7054d65f4da8.php
storage\framework\views\e79d152dfa32167edde1bbe390a8cf31.php
storage\framework\views\e800eb8075b408f7721ced44416827bb.php
storage\framework\views\ec214a4fd57e04cbdecd59236226bc7e.php
storage\framework\views\ecc13eea0c775ac1fcacd4b2707fcece.php
storage\framework\views\ed751d4b0363e82e3ff9f4f975e3612e.php
storage\framework\views\ed8b33204dcfe3f283d900c292c0bd15.php
storage\framework\views\f92428ccc800eed1eff6734b15661c01.php
storage\framework\views\fab38667166317a5a840879ec53347ce.php
storage\framework\views\fcc62738355fae8f50ac41072f4f864c.php
tests\Feature
tests\Unit
tests\CreatesApplication.php
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/simawa.git (fetch)
origin	https://github.com/frhanp/simawa.git (push)

Branch:
main

Last 5 commits:
f4deb70 notif admin
a70f9b4 notif inspektur
60eac43 notif admin ke sekretaris
a529d5b implementasi OTP
bfe93f5 testing 1
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\api.php =====
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

===== routes\channels.php =====
<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LHPController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InspekturController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\SekretarisController;
use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PreparationController;
use App\Http\Controllers\OrangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('lp'); // Mengarahkan ke landing page
});

Route::get('/login', function () {
    return view('auth.login'); // Mengarahkan ke halaman login
});



Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //rute pertimbangan
    Route::get('/task/sekretaris/{id}/accept', [TaskController::class, 'acceptForSekretaris'])->name('task.sekretaris.accept');
    //Route::get('/task/sekretaris/{id}/reject', [TaskController::class, 'rejectForSekretaris'])->name('task.sekretaris.reject');
    Route::get('/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');

    // Route untuk sekretaris menolak tugas dengan alasan
    Route::post('/task/sekretaris/reject', [TaskController::class, 'rejectWithReason'])->name('task.sekretaris.reject');


    // Rute untuk Daftar Persiapan (Inspektur)
    //Route::get('/preparations', [PreparationController::class, 'index'])->name('preparations.index')->middleware(['auth', 'isInspektur']);

    // Rute untuk Menampilkan Form Persiapan (SPT)
    Route::get('/spt/{spt}/preparations/create', [PreparationController::class, 'create'])->name('preparations.create')->middleware(['auth']);

    // Rute untuk Menyimpan Persiapan (SPT)
    Route::post('/spt/{spt}/preparations', [PreparationController::class, 'store'])->name('preparations.store')->middleware(['auth']);

    Route::resource('pelaksanaan', PelaksanaanController::class);
    Route::resource('pelaporan', PelaporanController::class);
    Route::resource('lhp', LHPController::class);
    Route::post('/lhp/{id}/acc', [LHPController::class, 'acc'])->name('lhp.acc');
    Route::post('/lhp/reject', [LHPController::class, 'reject'])->name('lhp.reject');

    // ROUTE BARU UNTUK OTP LHP
    Route::post('/lhp/{lhp}/send-otp', [LHPController::class, 'sendOtp'])->name('lhp.sendOtp');
    Route::post('/lhp/{lhp}/verify-otp', [LHPController::class, 'verifyOtp'])->name('lhp.verifyOtp');
    Route::get('/lhp/{lhp}/view-file', [LHPController::class, 'viewFile'])->name('lhp.viewFile');
});
Route::prefix('admin')->middleware(['is_admin'])->group(function () {
    Route::get('/task/planning', [TaskController::class, 'planning'])->name('task.planning');
    Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('/task/view', [TaskController::class, 'view'])->name('task.index');
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('task.update');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
    Route::get('/spt/view', [TaskController::class, 'viewSPT'])->name('task.ViewSpt');
    Route::get('/admin/persiapan/{id}', [AdminController::class, 'persiapan'])->name('admin.persiapan');
    Route::get('spt', [AdminController::class, 'indexSPT'])->name('spt.index');
    // Fitur Persiapan
    //Route::get('/persiapan', [AdminController::class, 'persiapan'])->name('admin.persiapan');
    Route::post('/admin/persiapan/store', [AdminController::class, 'storePersiapan'])->name('admin.persiapan.store');

    // Fitur PKA (Program Kerja Audit)
    Route::get('/admin/pka', [AdminController::class, 'pka'])->name('admin.pka');
    Route::post('/admin/pka/store', [AdminController::class, 'storePKA'])->name('admin.pka.store');

    // Fitur Formulir KM 4
    Route::get('/admin/km4', [AdminController::class, 'km4'])->name('admin.km4');
    Route::post('/admin/km4/store', [AdminController::class, 'storeKM4'])->name('admin.km4.store');

    // Fitur Entry Meeting
    Route::get('/admin/entry-meeting', [AdminController::class, 'entryMeeting'])->name('admin.entry-meeting');
    Route::post('/admin/entry-meeting/store', [AdminController::class, 'storeEntryMeeting'])->name('admin.entry-meeting.store');
    Route::get('preparations', [PreparationController::class, 'adminIndex'])->name('preparations');

    //untuk pelaksanaan 
    //Route::get('/pelaksanaan/create', [PelaksanaanController::class, 'create'])->name('pelaksanaan.create');
    //Route::post('/pelaksanaan', [PelaksanaanController::class, 'store'])->name('pelaksanaan.store');
    //Route::get('/pelaksanaan/{pelaksanaan}/edit', [PelaksanaanController::class, 'edit'])->name('pelaksanaan.edit');
    //Route::put('/pelaksanaan/{pelaksanaan}', [PelaksanaanController::class, 'update'])->name('pelaksanaan.update');
    //Route::delete('/pelaksanaan/{pelaksanaan}', [PelaksanaanController::class, 'destroy'])->name('pelaksanaan.destroy');
});

// Grup rute untuk Inspektur
Route::middleware(['auth', 'isInspektur'])->prefix('inspektur')->name('inspektur.')->group(function () {
    
    // Halaman persetujuan tugas
    Route::get('/approve', [InspekturController::class, 'approveInspektur'])->name('approve_inspektur');

    // Aksi menyetujui tugas
    Route::get('/approve-task/{id}', [InspekturController::class, 'approveTask'])->name('approve');

    // Aksi menolak tugas
    Route::post('/reject-task', [InspekturController::class, 'rejectTask'])->name('reject');
    // Aksi buat SPT

    Route::get('/preparations', [PreparationController::class, 'index'])->name('preparations.index');

    // Rute untuk Menampilkan Detail Persiapan (Inspektur)
    Route::get('/preparations/{preparation}', [PreparationController::class, 'show'])->name('preparations.show');

    // Rute untuk Menyetujui Persiapan (Inspektur)
    Route::post('/preparations/{preparation}/approve', [PreparationController::class, 'approve'])->name('preparations.approve');

    // Rute untuk Menolak Persiapan (Inspektur)
    Route::post('/preparations/{preparation}/reject', [PreparationController::class, 'reject'])->name('preparations.reject');



    //untuk pelaksanaan 
    //Route::get('/pelaksanaan', [PelaksanaanController::class, 'index'])->name('pelaksanaan.index');
    //Route::get('/pelaksanaan/{pelaksanaan}', [PelaksanaanController::class, 'show'])->name('pelaksanaan.show');
    Route::post('/pelaporan/{id}/acc', [InspekturController::class, 'acc'])->name('pelaporan.acc');
    Route::post('/pelaporan/reject', [InspekturController::class, 'reject'])->name('pelaporan.reject');

    Route::resource('orang', OrangController::class)
        ->except(['show']);

    // Manajemen Penugasan (hubungkan ke halaman planning & list task)
    Route::get('penugasan', [TaskController::class, 'planning'])
        ->name('penugasan');
    Route::get('penugasan/list', [TaskController::class, 'view'])
        ->name('penugasan.list');

    Route::post('pelaporan/{id}/confirm', [PelaporanController::class, 'confirm'])
        ->name('pelaporan.confirm');

    // Ubah tanggal expose (reschedule)
    Route::post('pelaporan/{id}/reschedule', [PelaporanController::class, 'reschedule'])
        ->name('pelaporan.reschedule');
});

Route::middleware(['auth', 'isSekretaris'])->group(function () {
    Route::get('/pertimbangan', [SekretarisController::class, 'pertimbangan'])->name('pertimbangan');
    // Route untuk menampilkan form upload SPT
    Route::get('spt/upload/{task}', [SekretarisController::class, 'createSPT'])->name('sekretaris.spt.upload');

    // Route untuk memproses upload SPT
    Route::post('/spt/upload/{task}', [SekretarisController::class, 'storeSPT'])->name('sekretaris.spt.store');

    // Menampilkan form input data
    Route::get('/tasks/{task}/create-pdf', [SekretarisController::class, 'showForm'])->name('task.sekretaris.create_pdf');

    // Menangani form inputan dan menghasilkan PDF
    Route::post('/tasks/{task}/create-pdf', [SekretarisController::class, 'createPdfWithData'])->name('task.sekretaris.create_pdf_with_data');
    Route::get('/pdf', function () {
        return view('tasks.pdf.team_composition_with_data');
    });

    Route::get('/penugasan/planning', [App\Http\Controllers\Sekretaris\TaskController::class, 'planning'])->name('sekretaris.task.planning');
    Route::get('/penugasan/view', [App\Http\Controllers\Sekretaris\TaskController::class, 'view'])->name('sekretaris.task.view');
    Route::post('/penugasan/store', [App\Http\Controllers\Sekretaris\TaskController::class, 'store'])->name('sekretaris.task.store');
    Route::get('/penugasan/{task}/edit', [App\Http\Controllers\Sekretaris\TaskController::class, 'edit'])->name('sekretaris.task.edit');
    Route::put('/penugasan/{task}', [App\Http\Controllers\Sekretaris\TaskController::class, 'update'])->name('sekretaris.task.update');
    Route::delete('/penugasan/{task}', [App\Http\Controllers\Sekretaris\TaskController::class, 'destroy'])->name('sekretaris.task.destroy');
});


require __DIR__ . '/auth.php';

```


## Routes (from command)
```

  GET|HEAD        / ........................................................................................................................... 
  GET|HEAD        _debugbar/assets/javascript ..................................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets .................................. debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} ............................ debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ........................... debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ...................................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain .......................... debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  POST            _ignition/execute-solution .................... ignition.executeSolution ΓÇ║ Spatie\LaravelIgnition ΓÇ║ ExecuteSolutionController
  GET|HEAD        _ignition/health-check ................................ ignition.healthCheck ΓÇ║ Spatie\LaravelIgnition ΓÇ║ HealthCheckController
  POST            _ignition/update-config ............................. ignition.updateConfig ΓÇ║ Spatie\LaravelIgnition ΓÇ║ UpdateConfigController
  GET|HEAD        admin/admin/entry-meeting ................................................ admin.entry-meeting ΓÇ║ AdminController@entryMeeting
  POST            admin/admin/entry-meeting/store ............................... admin.entry-meeting.store ΓÇ║ AdminController@storeEntryMeeting
  GET|HEAD        admin/admin/km4 ............................................................................. admin.km4 ΓÇ║ AdminController@km4
  POST            admin/admin/km4/store ............................................................ admin.km4.store ΓÇ║ AdminController@storeKM4
  POST            admin/admin/persiapan/store .......................................... admin.persiapan.store ΓÇ║ AdminController@storePersiapan
  GET|HEAD        admin/admin/persiapan/{id} ...................................................... admin.persiapan ΓÇ║ AdminController@persiapan
  GET|HEAD        admin/admin/pka ............................................................................. admin.pka ΓÇ║ AdminController@pka
  POST            admin/admin/pka/store ............................................................ admin.pka.store ΓÇ║ AdminController@storePKA
  GET|HEAD        admin/preparations .......................................................... preparations ΓÇ║ PreparationController@adminIndex
  GET|HEAD        admin/spt .............................................................................. spt.index ΓÇ║ AdminController@indexSPT
  GET|HEAD        admin/spt/view ........................................................................ task.ViewSpt ΓÇ║ TaskController@viewSPT
  GET|HEAD        admin/task/planning ................................................................. task.planning ΓÇ║ TaskController@planning
  POST            admin/task/store .......................................................................... task.store ΓÇ║ TaskController@store
  GET|HEAD        admin/task/view ............................................................................ task.index ΓÇ║ TaskController@view
  PUT             admin/tasks/{id} ........................................................................ task.update ΓÇ║ TaskController@update
  DELETE          admin/tasks/{id} ...................................................................... task.destroy ΓÇ║ TaskController@destroy
  GET|HEAD        admin/tasks/{id}/edit ....................................................................... task.edit ΓÇ║ TaskController@edit
  GET|HEAD        api/user .................................................................................................................... 
  GET|HEAD        confirm-password ................................................. password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ................................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ............................................................................. dashboard ΓÇ║ DashboardController@index
  POST            email/verification-notification ...................... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password .................................................. password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password ..................................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        inspektur/approve ........................................ inspektur.approve_inspektur ΓÇ║ InspekturController@approveInspektur
  GET|HEAD        inspektur/approve-task/{id} ............................................. inspektur.approve ΓÇ║ InspekturController@approveTask
  GET|HEAD        inspektur/orang ............................................................... inspektur.orang.index ΓÇ║ OrangController@index
  POST            inspektur/orang ............................................................... inspektur.orang.store ΓÇ║ OrangController@store
  GET|HEAD        inspektur/orang/create ...................................................... inspektur.orang.create ΓÇ║ OrangController@create
  PUT|PATCH       inspektur/orang/{orang} ..................................................... inspektur.orang.update ΓÇ║ OrangController@update
  DELETE          inspektur/orang/{orang} ................................................... inspektur.orang.destroy ΓÇ║ OrangController@destroy
  GET|HEAD        inspektur/orang/{orang}/edit .................................................... inspektur.orang.edit ΓÇ║ OrangController@edit
  POST            inspektur/pelaporan/reject .......................................... inspektur.pelaporan.reject ΓÇ║ InspekturController@reject
  POST            inspektur/pelaporan/{id}/acc .............................................. inspektur.pelaporan.acc ΓÇ║ InspekturController@acc
  POST            inspektur/pelaporan/{id}/confirm .................................. inspektur.pelaporan.confirm ΓÇ║ PelaporanController@confirm
  POST            inspektur/pelaporan/{id}/reschedule ......................... inspektur.pelaporan.reschedule ΓÇ║ PelaporanController@reschedule
  GET|HEAD        inspektur/penugasan ........................................................... inspektur.penugasan ΓÇ║ TaskController@planning
  GET|HEAD        inspektur/penugasan/list ..................................................... inspektur.penugasan.list ΓÇ║ TaskController@view
  GET|HEAD        inspektur/preparations ........................................... inspektur.preparations.index ΓÇ║ PreparationController@index
  GET|HEAD        inspektur/preparations/{preparation} ............................... inspektur.preparations.show ΓÇ║ PreparationController@show
  POST            inspektur/preparations/{preparation}/approve ................. inspektur.preparations.approve ΓÇ║ PreparationController@approve
  POST            inspektur/preparations/{preparation}/reject .................... inspektur.preparations.reject ΓÇ║ PreparationController@reject
  POST            inspektur/reject-task ..................................................... inspektur.reject ΓÇ║ InspekturController@rejectTask
  GET|HEAD        lhp ......................................................................................... lhp.index ΓÇ║ LHPController@index
  POST            lhp ......................................................................................... lhp.store ΓÇ║ LHPController@store
  GET|HEAD        lhp/create ................................................................................ lhp.create ΓÇ║ LHPController@create
  POST            lhp/reject ................................................................................ lhp.reject ΓÇ║ LHPController@reject
  POST            lhp/{id}/acc .................................................................................... lhp.acc ΓÇ║ LHPController@acc
  GET|HEAD        lhp/{lhp} ..................................................................................... lhp.show ΓÇ║ LHPController@show
  PUT|PATCH       lhp/{lhp} ................................................................................. lhp.update ΓÇ║ LHPController@update
  DELETE          lhp/{lhp} ............................................................................... lhp.destroy ΓÇ║ LHPController@destroy
  GET|HEAD        lhp/{lhp}/edit ................................................................................ lhp.edit ΓÇ║ LHPController@edit
  POST            lhp/{lhp}/send-otp ...................................................................... lhp.sendOtp ΓÇ║ LHPController@sendOtp
  POST            lhp/{lhp}/verify-otp ................................................................ lhp.verifyOtp ΓÇ║ LHPController@verifyOtp
  GET|HEAD        lhp/{lhp}/view-file ................................................................... lhp.viewFile ΓÇ║ LHPController@viewFile
  GET|HEAD        login .................................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ............................................................................. Auth\AuthenticatedSessionController@store
  POST            logout ................................................................. logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  GET|HEAD        notifications/{notification}/read .................................... notifications.read ΓÇ║ NotificationController@markAsRead
  PUT             password ................................................................... password.update ΓÇ║ Auth\PasswordController@update
  GET|HEAD        pdf ......................................................................................................................... 
  GET|HEAD        pelaksanaan ................................................................. pelaksanaan.index ΓÇ║ PelaksanaanController@index
  POST            pelaksanaan ................................................................. pelaksanaan.store ΓÇ║ PelaksanaanController@store
  GET|HEAD        pelaksanaan/create ........................................................ pelaksanaan.create ΓÇ║ PelaksanaanController@create
  GET|HEAD        pelaksanaan/{pelaksanaan} ..................................................... pelaksanaan.show ΓÇ║ PelaksanaanController@show
  PUT|PATCH       pelaksanaan/{pelaksanaan} ................................................. pelaksanaan.update ΓÇ║ PelaksanaanController@update
  DELETE          pelaksanaan/{pelaksanaan} ............................................... pelaksanaan.destroy ΓÇ║ PelaksanaanController@destroy
  GET|HEAD        pelaksanaan/{pelaksanaan}/edit ................................................ pelaksanaan.edit ΓÇ║ PelaksanaanController@edit
  GET|HEAD        pelaporan ....................................................................... pelaporan.index ΓÇ║ PelaporanController@index
  POST            pelaporan ....................................................................... pelaporan.store ΓÇ║ PelaporanController@store
  GET|HEAD        pelaporan/create .............................................................. pelaporan.create ΓÇ║ PelaporanController@create
  GET|HEAD        pelaporan/{pelaporan} ............................................................. pelaporan.show ΓÇ║ PelaporanController@show
  PUT|PATCH       pelaporan/{pelaporan} ......................................................... pelaporan.update ΓÇ║ PelaporanController@update
  DELETE          pelaporan/{pelaporan} ....................................................... pelaporan.destroy ΓÇ║ PelaporanController@destroy
  GET|HEAD        pelaporan/{pelaporan}/edit ........................................................ pelaporan.edit ΓÇ║ PelaporanController@edit
  GET|HEAD        penugasan/planning ............................................ sekretaris.task.planning ΓÇ║ Sekretaris\TaskController@planning
  POST            penugasan/store ..................................................... sekretaris.task.store ΓÇ║ Sekretaris\TaskController@store
  GET|HEAD        penugasan/view ........................................................ sekretaris.task.view ΓÇ║ Sekretaris\TaskController@view
  PUT             penugasan/{task} .................................................. sekretaris.task.update ΓÇ║ Sekretaris\TaskController@update
  DELETE          penugasan/{task} ................................................ sekretaris.task.destroy ΓÇ║ Sekretaris\TaskController@destroy
  GET|HEAD        penugasan/{task}/edit ................................................. sekretaris.task.edit ΓÇ║ Sekretaris\TaskController@edit
  GET|HEAD        pertimbangan ............................................................... pertimbangan ΓÇ║ SekretarisController@pertimbangan
  GET|HEAD        profile ............................................................................... profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ........................................................................... profile.update ΓÇ║ ProfileController@update
  DELETE          profile ......................................................................... profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register .................................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register ................................................................................ Auth\RegisteredUserController@store
  POST            reset-password ............................................................ password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ................................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        sanctum/csrf-cookie ....................................... sanctum.csrf-cookie ΓÇ║ Laravel\Sanctum ΓÇ║ CsrfCookieController@show
  GET|HEAD        spt/upload/{task} .................................................... sekretaris.spt.upload ΓÇ║ SekretarisController@createSPT
  POST            spt/upload/{task} ...................................................... sekretaris.spt.store ΓÇ║ SekretarisController@storeSPT
  POST            spt/{spt}/preparations ..................................................... preparations.store ΓÇ║ PreparationController@store
  GET|HEAD        spt/{spt}/preparations/create ............................................ preparations.create ΓÇ║ PreparationController@create
  POST            task/sekretaris/reject ............................................. task.sekretaris.reject ΓÇ║ TaskController@rejectWithReason
  GET|HEAD        task/sekretaris/{id}/accept ..................................... task.sekretaris.accept ΓÇ║ TaskController@acceptForSekretaris
  GET|HEAD        tasks/{task}/create-pdf .......................................... task.sekretaris.create_pdf ΓÇ║ SekretarisController@showForm
  POST            tasks/{task}/create-pdf ....................... task.sekretaris.create_pdf_with_data ΓÇ║ SekretarisController@createPdfWithData
  GET|HEAD        verify-email ................................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ................................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                           Showing [110] routes

```


## Controllers Content
```
===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // // Debugging: Cek nilai yang diterima
        // dd($request->all()); // Ini akan menampilkan semua data yang dikirimkan dalam request

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:admin,sekretaris,inspektur'], // Validasi untuk role
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Menyimpan role yang dipilih
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}

===== app\Http\Controllers\Sekretaris\TaskController.php =====
<?php

namespace App\Http\Controllers\Sekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orang;
use App\Models\Task;
use App\Models\Notification;

class TaskController extends Controller
{
    public function planning()
    {
        $penanggungJawab      = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim             = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim           = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis     = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang            = Orang::where('jabatan', 'Penunjang')->get();

        // ðŸ”’ cari ID yang sudah dipakai di task aktif
        $lockedIds = Task::query()
            ->whereIn('status', ['pending', 'Disetujui Inspektur']) // status aktif
            ->get('team_composition')
            ->flatMap(function ($t) {
                $tc = json_decode($t->team_composition, true) ?? [];
                return collect([
                    $tc['ketua_tim'] ?? null,
                    ...((array)($tc['pengendali_teknis'] ?? [])),
                    ...((array)($tc['anggota_tim'] ?? [])),
                    ...((array)($tc['penunjang'] ?? [])),
                ]);
            })
            ->filter()
            ->map(fn($v) => (string)$v)
            ->unique();

        return view('task.planning', compact(
            'penanggungJawab',
            'ketuaTim',
            'wakilPenanggungJawab',
            'anggotaTim',
            'pengendaliTeknis',
            'penunjang',
            'lockedIds'
        ));
    }

    public function store(Request $request)
    {
        // Validasi tanpa kolom 'status'
        $validatedData = $request->validate([
            'assignment_type' => 'required|string|max:255',
            'penanggung_jawab' => 'required|exists:orang,id',
            'ketua_tim' => 'required|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|exists:orang,id',
            'anggota_tim' => 'required|array',
            'pengendali_teknis' => 'required|array',
            'penunjang' => 'required|array',
            'number_of_days' => 'required|integer|min:1',
        ]);

        // Menambahkan ID user yang sedang login ke 'created_by'
        $validatedData['created_by'] = auth()->id(); // Ambil ID user yang login

        // Menyusun data team_composition dalam format JSON
        $teamComposition = [
            'penanggung_jawab' => $validatedData['penanggung_jawab'],
            'ketua_tim' => $validatedData['ketua_tim'],
            'wakil_penanggung_jawab' => $validatedData['wakil_penanggung_jawab'],
            'anggota_tim' => $validatedData['anggota_tim'], // Array anggota tim
            'pengendali_teknis' => $validatedData['pengendali_teknis'], // Array pengendali teknis
            'penunjang' => $validatedData['penunjang'], // Array penunjang
        ];


        // Memasukkan data ke dalam table tasks
        $task = Task::create([
            'assignment_type' => $validatedData['assignment_type'],
            'team_composition' => json_encode($teamComposition), // Menyimpan dalam format JSON
            'number_of_days' => $validatedData['number_of_days'],
            'created_by' => $validatedData['created_by'],
        ]);

        // --- TAMBAHAN: Logika Notifikasi yang Disesuaikan ---
        // 1. Kumpulkan semua ID pengguna dari semua peran ke dalam satu array
        $allUserIds = array_merge(
            [$validatedData['penanggung_jawab']],
            [$validatedData['ketua_tim']],
            [$validatedData['wakil_penanggung_jawab']],
            $validatedData['anggota_tim'],
            $validatedData['pengendali_teknis'],
            $validatedData['penunjang']
        );

        // 2. Hilangkan ID yang duplikat
        $uniqueUserIds = array_unique($allUserIds);

        // 3. Buat notifikasi untuk setiap pengguna unik
        foreach ($uniqueUserIds as $userId) {
            // Pastikan user ID valid sebelum membuat notifikasi
            if ($userId) {
                Notification::create([
                    'user_id' => $userId,
                    'message' => 'Anda ditugaskan pada tugas baru: "' . $task->assignment_type . '".',
                    'url' => route('inspektur.tasks.index'), // Arahkan ke daftar tugas inspektur
                ]);
            }
        }
        // --- AKHIR TAMBAHAN ---

        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil disimpan!');
    }

    public function view()
    {
        $tasks = Task::paginate(20);

        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);
            foreach (['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'] as $key) {
                if (isset($teamComposition[$key])) {
                    if (is_array($teamComposition[$key])) {
                        $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                    } else {
                        $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                    }
                }
            }
            $task->team_composition = $teamComposition;
            return $task;
        });

        // Pastikan view yang dituju sama
        return view('task.index', compact('tasks'));
    }

    // app/Http/Controllers/Sekretaris/TaskController.php

    // ... (tambahkan ini di dalam class TaskController Anda)

    public function edit(Task $task) // Menggunakan Route Model Binding
    {
        // [PARSE KOMPOSISI TIM]
        $tcCurrent = is_string($task->team_composition)
            ? (json_decode($task->team_composition, true) ?? [])
            : ($task->team_composition ?? []);

        // [HITUNG TERKUNCI]
        $lockedIds = Task::query()
            ->where('id', '!=', $task->id)
            ->whereIn('status', ['pending', 'Disetujui Inspektur'])
            ->get('team_composition')
            ->flatMap(function ($t) {
                $tc = is_string($t->team_composition)
                    ? (json_decode($t->team_composition, true) ?? [])
                    : ($t->team_composition ?? []);
                return collect([
                    $tc['ketua_tim'] ?? null,
                    ...((array)($tc['pengendali_teknis'] ?? [])),
                    ...((array)($tc['anggota_tim'] ?? [])),
                    ...((array)($tc['penunjang'] ?? [])),
                ]);
            })
            ->filter()
            ->map(fn($v) => (string)$v)
            ->unique()
            ->values();

        // [YANG SUDAH TERPILIH DI TASK INI]
        $selectedHere = collect([
            $tcCurrent['ketua_tim'] ?? null,
            ...((array)($tcCurrent['pengendali_teknis'] ?? [])),
            ...((array)($tcCurrent['anggota_tim'] ?? [])),
            ...((array)($tcCurrent['penunjang'] ?? [])),
        ])->filter()
            ->map(fn($v) => (string)$v)
            ->unique()
            ->values();

        $lockedIds = $lockedIds->diff($selectedHere)->values();

        // [DATA DROPDOWN]
        $penanggungJawab      = \App\Models\Orang::where('jabatan', 'Penanggung Jawab')->get();
        $wakilPenanggungJawab = \App\Models\Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $ketuaTim             = \App\Models\Orang::where('jabatan', 'Ketua Tim')->get();
        $pengendaliTeknis     = \App\Models\Orang::where('jabatan', 'Pengendali Teknis')->get();
        $anggotaTim           = \App\Models\Orang::where('jabatan', 'Anggota Tim')->get();
        $penunjang            = \App\Models\Orang::where('jabatan', 'Penunjang')->get();

        // [KIRIM KE VIEW]
        return view('task.edit', compact(
            'task',
            'tcCurrent',
            'lockedIds',
            'penanggungJawab',
            'wakilPenanggungJawab',
            'ketuaTim',
            'pengendaliTeknis',
            'anggotaTim',
            'penunjang'
        ));
    }

    public function update(Request $request, Task $task) // Menggunakan Route Model Binding
    {
        $validated = $request->validate([
            'assignment_type'        => 'required|string|max:255',
            'penanggung_jawab'       => 'required|integer|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|integer|exists:orang,id',
            'ketua_tim'              => 'required|integer|exists:orang,id',
            'pengendali_teknis'      => 'array|nullable',
            'pengendali_teknis.*'    => 'integer|exists:orang,id',
            'anggota_tim'            => 'array|nullable',
            'anggota_tim.*'          => 'integer|exists:orang,id',
            'penunjang'              => 'array|nullable',
            'penunjang.*'            => 'integer|exists:orang,id',
            'number_of_days'         => 'required|integer|min:1',
        ]);

        $teamComposition = [
            'penanggung_jawab'       => (string) $validated['penanggung_jawab'],
            'wakil_penanggung_jawab' => (string) $validated['wakil_penanggung_jawab'],
            'ketua_tim'              => (string) $validated['ketua_tim'],
            'pengendali_teknis'      => collect($validated['pengendali_teknis'] ?? [])->map(fn($v) => (string)$v)->all(),
            'anggota_tim'            => collect($validated['anggota_tim'] ?? [])->map(fn($v) => (string)$v)->all(),
            'penunjang'              => collect($validated['penunjang'] ?? [])->map(fn($v) => (string)$v)->all(),
        ];

        $cekIds = collect([
            $teamComposition['ketua_tim'],
            ...$teamComposition['pengendali_teknis'],
            ...$teamComposition['anggota_tim'],
            ...$teamComposition['penunjang'],
        ])->filter()->unique();

        $konflik = Task::query()
            ->where('id', '!=', $task->id)
            ->whereIn('status', ['pending', 'Disetujui Inspektur'])
            ->where(function ($q) use ($cekIds) {
                foreach ($cekIds as $id) {
                    $q->orWhereJsonContains('team_composition->ketua_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->pengendali_teknis', (string)$id)
                        ->orWhereJsonContains('team_composition->anggota_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->penunjang', (string)$id);
                }
            })
            ->exists();

        if ($konflik) {
            return back()->withErrors(['anggota' => 'Ada personel (selain PJ/WPJ) yang sudah terikat di tugas aktif.'])->withInput();
        }

        $task->assignment_type  = $validated['assignment_type'];
        $task->team_composition = json_encode($teamComposition);
        $task->number_of_days   = $validated['number_of_days'];

        if (in_array($task->status, ['Ditolak Sekretaris', 'Ditolak Inspektur'], true)) {
            $task->status = 'pending';
            $task->rejection_reason = null;
        }

        $task->save();

        // PERUBAHAN DI SINI
        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy(Task $task) // Menggunakan Route Model Binding
    {
        $task->delete();

        // PERUBAHAN DI SINI
        return redirect()->route('sekretaris.task.view')->with('success', 'Tugas berhasil dihapus!');
    }
}

===== app\Http\Controllers\AdminController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\KM4;
use App\Models\PKA;
use App\Models\Spt;
use App\Models\Preparation;
use App\Models\EntryMeeting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 1. Persiapan
    public function persiapan()
    {
        return view('admin.persiapan');  // Tampilkan form persiapan
    }

    public function storePersiapan(Request $request)
    {
        // Debugging untuk melihat data yang dikirim dari form
        dd($request->all());
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'keterangan' => 'required|string',
        ]);

        // Simpan data persiapan ke dalam database
        Preparation::create([
            'task_id' => $request->task_id,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.persiapan')->with('success', 'Persiapan berhasil disimpan.');
    }

    // 2. Program Kerja Audit (PKA)
    public function pka()
    {
        return view('admin.pka');  // Tampilkan form untuk mengunggah PKA
    }

    public function indexSPT()
    {
       // Mengambil data dengan relasi antara tabel task dan spt
    $spts = SPT::with('task')->paginate(10); // Menggunakan eager loading dan paginasi
        return view('admin.spt', compact('spts'));
    }

    public function storePKA(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'file_pka' => 'required|file|mimes:pdf',  // Hanya file PDF yang diizinkan
        ]);

        // Simpan file PKA ke dalam storage dan simpan path di database
        $path = $request->file('file_pka')->store('pka');

        PKA::create([
            'task_id' => $request->task_id,
            'file_path' => $path,
        ]);

        return redirect()->route('admin.pka')->with('success', 'Program Kerja Audit berhasil diunggah.');
    }

    // 3. Formulir KM 4
    public function km4()
    {
        return view('admin.km4');  // Tampilkan form KM4
    }

    public function storeKM4(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'form_km4' => 'required|string',
        ]);

        // Simpan data KM 4 ke dalam database
        KM4::create([
            'task_id' => $request->task_id,
            'form_km4' => $request->form_km4,
        ]);

        return redirect()->route('admin.km4')->with('success', 'Formulir KM 4 berhasil disimpan.');
    }

    // 4. Entry Meeting
    public function entryMeeting()
    {
        return view('admin.entry-meeting');  // Tampilkan form Entry Meeting
    }

    public function storeEntryMeeting(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'agenda' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Simpan data Entry Meeting ke dalam database
        EntryMeeting::create([
            'task_id' => $request->task_id,
            'agenda' => $request->agenda,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.entry-meeting')->with('success', 'Entry Meeting berhasil disimpan.');
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

===== app\Http\Controllers\DashboardController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = [];

        if ($user->role === 'admin') {
            $data['totalUsers'] = User::count();
            $data['totalTasks'] = Task::count();
            $data['totalLhps'] = LHP::count();
            $data['taskStatusSummary'] = Task::select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');
            $data['recentLhps'] = LHP::with('task')->latest()->take(5)->get();
        } elseif ($user->role === 'sekretaris') {
            $data['pendingAssignmentTasks'] = Task::whereNull('team_composition')->count();
            $data['newTasks'] = Task::whereNull('team_composition')->latest()->take(5)->get();
        } elseif ($user->role === 'inspektur') {
            $userId = $user->id;
            $data['myActiveTasks'] = Task::whereJsonContains('team_composition', $userId)
                ->where('status', '!=', 'selesai')
                ->count();

            $myLhps = LHP::whereHas('task', function ($query) use ($userId) {
                $query->whereJsonContains('team_composition', $userId);
            })->select('status', DB::raw('count(*) as total'))
                ->groupBy('status')
                ->pluck('total', 'status');

            $data['myLhpStatus'] = $myLhps;
        }

        return view('dashboard', compact('data'));
    }
}

===== app\Http\Controllers\InspekturController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use App\Models\User;

class InspekturController extends Controller
{
    /**
     * Konstruktor untuk menerapkan middleware.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isInspektur']);
    }

    /**
     * Menampilkan daftar tugas yang disetujui sekretaris.
     */
    public function approveInspektur()
{
    // Ambil semua tugas dengan status 'Disetujui Sekretaris' dan paginasi 10 per halaman
    $tasks = Task::where('status', 'Disetujui Sekretaris')->paginate(10);

    // Transformasi data untuk mengganti ID dalam komposisi tim dengan nama dari tabel `orang`
    $tasks->transform(function ($task) {
        $teamComposition = json_decode($task->team_composition, true);

        // Daftar kunci yang akan diubah ID menjadi nama
        $keysToReplace = ['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'];

        foreach ($keysToReplace as $key) {
            if (isset($teamComposition[$key])) {
                if (is_array($teamComposition[$key])) {
                    // Jika berupa array, ambil nama dari semua ID
                    $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                } else {
                    // Jika berupa ID tunggal, ganti dengan nama
                    $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                }
            }
        }

        // Update komposisi tim dengan nama yang sesuai
        $task->team_composition = $teamComposition;
        return $task;
    });

    // Kirim data ke view
    return view('inspektur.approve_inspektur', compact('tasks'));
}


    /**
     * Menyetujui tugas oleh inspektur.
     */
    public function approveTask($id)
    {
        $task = Task::findOrFail($id);

        // Pastikan status saat ini adalah 'Disetujui Sekretaris'
        if ($task->status !== 'Disetujui Sekretaris') {
            return redirect()->back()->with('error', 'Tugas tidak dapat disetujui.');
        }

        // Update status tugas menjadi 'Disetujui Inspektur'
        $task->status = 'Disetujui Inspektur';
        $task->save();

       // --- [MODIFIKASI] ---
        // Kirim notifikasi ke semua Admin
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Tugas "' . $task->assignment_type . '" telah disetujui oleh Inspektur.',
                'url'     => route('task.index'),
            ]);
        }

        // Kirim notifikasi ke semua Sekretaris
        $sekretarisUsers = User::where('role', 'sekretaris')->get();
        foreach ($sekretarisUsers as $sekretaris) {
            Notification::create([
                'user_id' => $sekretaris->id,
                'message' => 'Tugas "' . $task->assignment_type . '" telah disetujui oleh Inspektur.',
                'url'     => route('sekretaris.task.view'),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        return redirect()->back()->with('success', 'Tugas berhasil disetujui.');
    }

    /**
     * Menolak tugas oleh inspektur.
     */
    public function rejectTask(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($request->task_id);

        // Pastikan status saat ini adalah 'Disetujui Sekretaris'
        if ($task->status !== 'Disetujui Sekretaris') {
            return redirect()->back()->with('error', 'Tugas tidak dapat ditolak.');
        }

        // Update status tugas menjadi 'Ditolak Inspektur' dan simpan alasan penolakan
        $task->status = 'Ditolak Inspektur';
        $task->rejection_reason = $request->rejection_reason; // Pastikan kolom ini ada di tabel tasks
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil ditolak.');
    }


    public function acc($id)
    {
        $pelaporan = Pelaporan::findOrFail($id);
        $pelaporan->status = 'ACC'; // Status diubah menjadi ACC
        $pelaporan->save();
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Pelaporan untuk tugas "' . $pelaporan->task->assignment_type . '" telah di-ACC.',
                'url'     => route('pelaporan.index'),
            ]);
        }

        return redirect()->back()->with('success', 'Pelaporan telah di-ACC.');
    }

    public function reject(Request $request)
    {
        $pelaporan = Pelaporan::findOrFail($request->pelaporan_id);
        $pelaporan->status = 'Ditolak'; // Status diubah menjadi Ditolak
        $pelaporan->alasan_tolak = $request->alasan_tolak; // Simpan alasan penolakan
        $pelaporan->save();
        
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Pelaporan untuk tugas "' . $pelaporan->task->assignment_type . '" telah DITOLAK.',
                'url'     => route('pelaporan.index'),
            ]);
        }

        return redirect()->back()->with('success', 'Pelaporan telah ditolak dengan alasan.');
    }
}

===== app\Http\Controllers\LHPController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan mengimpor Storage Facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\LhpOtp;
use Illuminate\Support\Facades\Log;
use App\Models\Notification;
use App\Models\User;


class LHPController extends Controller
{
    /**
     * Menampilkan daftar LHP.
     */
    public function index()
    {
        // Mengambil LHPs beserta task terkait dengan pagination
        $lhps = LHP::with('task')->paginate(10);
        return view('lhp.index', compact('lhps'));
    }

    /**
     * Menampilkan form untuk membuat LHP baru.
     */
    public function create()
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('lhp.create', compact('tasks'));
    }

    /**
     * Menyimpan LHP baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'required|file|mimes:pdf,doc,docx',
            'keterangan' => 'nullable|string',
        ]);

        $filePath = $request->file('lhp_file')->store('lhp_files', 'public');

        LHP::create([
            'task_id' => $request->task_id,
            'lhp_file' => $filePath,
            'keterangan' => $request->keterangan,
        ]);
        // --- [MODIFIKASI] ---
        $task = Task::find($request->task_id);
        $inspekturs = User::where('role', 'inspektur')->get();
        foreach ($inspekturs as $inspektur) {
            Notification::create([
                'user_id' => $inspektur->id,
                'message' => 'LHP baru untuk tugas "' . $task->assignment_type . '" telah dibuat dan perlu persetujuan.',
                'url'     => route('lhp.index'),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit LHP.
     */
    public function edit(LHP $lhp)
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('lhp.edit', compact('lhp', 'tasks'));
    }

    /**
     * Memperbarui LHP di database.
     */
    public function update(Request $request, LHP $lhp)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx',
            'keterangan' => 'nullable|string',
        ]);

        $data = $request->only('task_id', 'keterangan');

        if ($request->hasFile('lhp_file')) {
            if ($lhp->lhp_file) {
                Storage::disk('public')->delete($lhp->lhp_file);
            }
            $data['lhp_file'] = $request->file('lhp_file')->store('lhp_files', 'public');
        }

        $lhp->update($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil diperbarui.');
    }

    /**
     * Menghapus LHP dari database.
     */
    public function destroy(LHP $lhp)
    {
        if ($lhp->lhp_file) {
            Storage::disk('public')->delete($lhp->lhp_file);
        }
        $lhp->delete();
        return redirect()->route('lhp.index')->with('success', 'LHP berhasil dihapus.');
    }

    public function acc($id)
    {
        $lhp = Lhp::findOrFail($id);
        $lhp->status = 'disetujui';
        $lhp->save();

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'LHP untuk tugas "' . $lhp->task->assignment_type . '" telah disetujui.',
                'url' => route('lhp.index'),
            ]);
        }

        return redirect()->route('lhp.index')->with('success', 'LHP disetujui');
    }

    public function reject(Request $request)
    {
        $request->validate([
            'reason' => 'required|string',
        ]);

        $lhp = Lhp::findOrFail($request->lhp_id);
        $lhp->status = 'ditolak';
        $lhp->reason = $request->reason; // Pastikan ada kolom 'reason' di tabel LHP
        $lhp->save();

        return redirect()->route('lhp.index')->with('success', 'LHP ditolak');
    }

    public function sendOtp(LHP $lhp)
    {
        $user = Auth::user();

        if (!$user->phone_number) {
            return response()->json(['error' => 'Nomor WhatsApp tidak ditemukan.'], 400);
        }

        $otpCode = rand(100000, 999999);
        $expiresAt = Carbon::now()->addMinutes(5);

        LhpOtp::create([
            'lhp_id' => $lhp->id,
            'user_id' => $user->id,
            'otp_code' => $otpCode,
            'expires_at' => $expiresAt,
        ]);

        try {
            Http::post('http://localhost:3000/send-message', [
                'number' => $user->phone_number,
                'message' => "Kode OTP Anda untuk melihat LHP adalah: *{$otpCode}*. Jangan berikan kode ini kepada siapapun.",
            ]);
            return response()->json(['success' => 'OTP telah dikirim ke WhatsApp Anda.']);
        } catch (\Exception $e) {
            Log::error('Tidak dapat terhubung ke Baileys API: ' . $e->getMessage());
            return response()->json(['success' => 'OTP telah dikirim (simulasi).']); // Fallback untuk development
        }
    }

    public function verifyOtp(Request $request, LHP $lhp)
    {
        $request->validate(['otp' => 'required|numeric|digits:6']);
        $user = Auth::user();

        $otpRecord = LhpOtp::where('lhp_id', $lhp->id)
            ->where('user_id', $user->id)
            ->where('otp_code', $request->otp)
            ->where('expires_at', '>', Carbon::now())
            ->latest()
            ->first();

        if ($otpRecord) {
            session(['lhp_otp_verified_' . $lhp->id => true]);
            $otpRecord->delete();
            return response()->json([
                'success' => 'OTP valid.',
                'redirect_url' => route('lhp.viewFile', $lhp->id)
            ]);
        }
        return response()->json(['error' => 'OTP salah atau sudah kedaluwarsa.'], 422);
    }

    public function viewFile(LHP $lhp)
    {
        if (!session('lhp_otp_verified_' . $lhp->id)) {
            abort(403, 'Akses ditolak. Silakan verifikasi OTP terlebih dahulu.');
        }

        session()->forget('lhp_otp_verified_' . $lhp->id);
        $filePath = storage_path('app/public/' . $lhp->lhp_file);

        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan.');
        }
        return response()->file($filePath);
    }
}

===== app\Http\Controllers\NotificationController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Mark a specific notification as read and redirect.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAsRead(Notification $notification)
    {
        // Pastikan notifikasi ini milik pengguna yang sedang login
        if ($notification->user_id === Auth::id()) {
            // Update kolom 'read_at' dengan waktu saat ini
            $notification->update(['read_at' => now()]);
        }

        // Arahkan pengguna ke URL asli dari notifikasi
        return redirect($notification->url);
    }
}

===== app\Http\Controllers\OrangController.php =====
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

===== app\Http\Controllers\PelaksanaanController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use App\Models\User;

class PelaksanaanController extends Controller
{
    /**
     * Menampilkan daftar pelaksanaan.
     */
    public function index()
    {
        $pelaksanaan = Pelaksanaan::with('task')->get();
        return view('pelaksanaan.index', compact('pelaksanaan'));
    }

    /**
     * Menampilkan form untuk membuat pelaksanaan baru.
     */
    public function create()
    {
        // Menyaring tugas yang statusnya 'disetujui inspektur'
        $taskList = Task::where('status', 'disetujui inspektur')->get();

        return view('pelaksanaan.create', compact('taskList'));
    }

    /**
     * Menyimpan pelaksanaan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'entry_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'berita_acara_entry' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'exit_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'berita_acara_exit' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'sent_to_inspektur' => 'sometimes|boolean',
        ]);

        // Handle file uploads
        if ($request->hasFile('entry_meeting_photo')) {
            $validated['entry_meeting_photo'] = $request->file('entry_meeting_photo')->store('entry_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_entry')) {
            $validated['berita_acara_entry'] = $request->file('berita_acara_entry')->store('berita_acara_entry', 'public');
        }

        if ($request->hasFile('exit_meeting_photo')) {
            $validated['exit_meeting_photo'] = $request->file('exit_meeting_photo')->store('exit_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_exit')) {
            $validated['berita_acara_exit'] = $request->file('berita_acara_exit')->store('berita_acara_exit', 'public');
        }

        // Handle sent_to_inspektur checkbox using boolean()
        // $validated['sent_to_inspektur'] = $request->boolean('sent_to_inspektur');

        $pelaksanaan = Pelaksanaan::create($validated);
        
        $task = Task::find($validated['task_id']);
        $inspekturs = User::where('role', 'inspektur')->get();
        foreach ($inspekturs as $inspektur) {
            Notification::create([
                'user_id' => $inspektur->id,
                'message' => 'Dokumen pelaksanaan baru untuk tugas "' . $task->assignment_type . '" telah dibuat.',
                'url'     => route('pelaksanaan.show', $pelaksanaan->id),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail pelaksanaan.
     */
    public function show(Pelaksanaan $pelaksanaan)
    {
        $pelaksanaan->load('task');
        return view('pelaksanaan.show', compact('pelaksanaan'));
    }

    /**
     * Menampilkan form untuk mengedit pelaksanaan.
     */
    public function edit(Pelaksanaan $pelaksanaan)
    {
         // Menyaring tugas yang statusnya 'disetujui inspektur'
         $taskList = Task::where('status', 'disetujui inspektur')->get();

         return view('pelaksanaan.edit', compact('pelaksanaan', 'taskList'));
    }

    /**
     * Memperbarui pelaksanaan di database.
     */
    public function update(Request $request, Pelaksanaan $pelaksanaan)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'entry_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berita_acara_entry' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'exit_meeting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berita_acara_exit' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'sent_to_inspektur' => 'sometimes|boolean',
        ]);

        // Handle file uploads
        if ($request->hasFile('entry_meeting_photo')) {
            // Hapus foto lama jika ada
            if ($pelaksanaan->entry_meeting_photo) {
                Storage::disk('public')->delete($pelaksanaan->entry_meeting_photo);
            }
            $validated['entry_meeting_photo'] = $request->file('entry_meeting_photo')->store('entry_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_entry')) {
            // Hapus file lama jika ada
            if ($pelaksanaan->berita_acara_entry) {
                Storage::disk('public')->delete($pelaksanaan->berita_acara_entry);
            }
            $validated['berita_acara_entry'] = $request->file('berita_acara_entry')->store('berita_acara_entry', 'public');
        }

        if ($request->hasFile('exit_meeting_photo')) {
            // Hapus foto lama jika ada
            if ($pelaksanaan->exit_meeting_photo) {
                Storage::disk('public')->delete($pelaksanaan->exit_meeting_photo);
            }
            $validated['exit_meeting_photo'] = $request->file('exit_meeting_photo')->store('exit_meeting_photos', 'public');
        }

        if ($request->hasFile('berita_acara_exit')) {
            // Hapus file lama jika ada
            if ($pelaksanaan->berita_acara_exit) {
                Storage::disk('public')->delete($pelaksanaan->berita_acara_exit);
            }
            $validated['berita_acara_exit'] = $request->file('berita_acara_exit')->store('berita_acara_exit', 'public');
        }

        // Handle sent_to_inspektur checkbox using boolean()
       // $validated['sent_to_inspektur'] = $request->boolean('sent_to_inspektur');

        $pelaksanaan->update($validated);

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil diperbarui.');
    }


    /**
     * Menghapus pelaksanaan dari database.
     */
    public function destroy(Pelaksanaan $pelaksanaan)
    {
        // Hapus file jika ada
        if ($pelaksanaan->entry_meeting_photo) {
            Storage::disk('public')->delete($pelaksanaan->entry_meeting_photo);
        }
        if ($pelaksanaan->berita_acara_entry) {
            Storage::disk('public')->delete($pelaksanaan->berita_acara_entry);
        }
        if ($pelaksanaan->exit_meeting_photo) {
            Storage::disk('public')->delete($pelaksanaan->exit_meeting_photo);
        }
        if ($pelaksanaan->berita_acara_exit) {
            Storage::disk('public')->delete($pelaksanaan->berita_acara_exit);
        }

        $pelaksanaan->delete();

        return redirect()->route('pelaksanaan.index')->with('success', 'Pelaksanaan berhasil dihapus.');
    }
}

===== app\Http\Controllers\PelaporanController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage Facade
use Illuminate\Support\Facades\Schema;
use App\Models\Notification;
use App\Models\User;

class PelaporanController extends Controller
{
    /**
     * Menampilkan daftar pelaporan.
     */
    public function index()
    {
        // Mengambil pelaporans beserta task terkait
        $pelaporans = Pelaporan::with('task')->paginate(10); // Gunakan paginate jika perlu
        return view('pelaporan.index', compact('pelaporans'));
    }

    /**
     * Menampilkan form untuk membuat pelaporan baru.
     */
    public function create()
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('pelaporan.create', compact('tasks'));
    }

    /**
     * Menyimpan pelaporan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'km8' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'km10' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'kertas_kerja_at' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'konsep_lhp' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'expose_pelaporan' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'tanggal_expose' => 'required|date',
        ]);

        $data = $validated;

        // Tambahkan default value untuk kolom `status`
        $data['status'] = 'Menunggu Inspektur';

        // Handle file uploads
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('uploads/pelaporan', 'public');
            }
        }

        Pelaporan::create($data);
        // --- [MODIFIKASI] ---
        $task = Task::find($validated['task_id']);
        $inspekturs = User::where('role', 'inspektur')->get();
        foreach ($inspekturs as $inspektur) {
            Notification::create([
                'user_id' => $inspektur->id,
                'message' => 'Jadwal expose untuk tugas "' . $task->assignment_type . '" perlu dikonfirmasi.',
                'url'     => route('pelaporan.index'),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil dibuat.');
    }


    /**
     * Menampilkan form untuk mengedit pelaporan.
     */
    public function edit(Pelaporan $pelaporan)
    {
        // Mengambil semua tasks untuk dropdown
        $tasks = Task::all();
        return view('pelaporan.edit', compact('pelaporan', 'tasks'));
    }

    /**
     * Memperbarui pelaporan di database.
     */
    public function update(Request $request, Pelaporan $pelaporan)
    {
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'km8' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'km10' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'kertas_kerja_at' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'konsep_lhp' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'expose_pelaporan' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'tanggal_expose' => 'nullable|date', // Validasi tanggal expose
        ]);

        $data = $validated;

        // Handle file uploads
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($request->hasFile($field)) {
                // Hapus file lama jika ada
                if ($pelaporan->$field) {
                    Storage::disk('public')->delete($pelaporan->$field);
                }
                $data[$field] = $request->file($field)->store('uploads/pelaporan', 'public');
            }
        }

        // if ($data['status'] !== 'Acc') {
        //     $data['status'] = 'Menunggu Inspektur';
        // }
        // Set alasan_tolak menjadi null
        $data['alasan_tolak'] = null;

        // Handle tanggal expose jika ada
        if ($request->has('tanggal_expose')) {
            $data['tanggal_expose'] = $request->tanggal_expose;
        }

        // Update pelaporan
        $pelaporan->update($data);

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil diperbarui.');
    }



    /**
     * Menghapus pelaporan dari database.
     */
    public function destroy(Pelaporan $pelaporan)
    {
        // Hapus semua file terkait
        foreach (['km8', 'km10', 'kertas_kerja_at', 'konsep_lhp', 'expose_pelaporan'] as $field) {
            if ($pelaporan->$field) {
                Storage::disk('public')->delete($pelaporan->$field);
            }
        }

        $pelaporan->delete();

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan berhasil dihapus.');
    }


    public function confirm($id)
    {
        // 1) Ambil data pelaporan
        $pelaporan = \App\Models\Pelaporan::findOrFail($id);

        // 2) Update status menjadi "Dikonfirmasi Inspektur"
        $pelaporan->status = 'Dikonfirmasi Inspektur'; // [PERUBAHAN STATUS]
        $pelaporan->save();

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Jadwal expose tugas "' . $pelaporan->task->assignment_type . '" telah DIKONFIRMASI.',
                'url'     => route('pelaporan.index'),
            ]);
        }

        // 3) Kembali ke index dengan pesan sukses
        return back()->with('success', 'Jadwal expose dikonfirmasi.');
    }

    // [DITAMBAHKAN] Ubah tanggal_expose + (opsional) catatan alasan
    public function reschedule(Request $request, $id)
    {
        

        // 1. Validasi input
        $data = $request->validate([
            'tanggal_expose_baru' => ['required', 'date', 'after_or_equal:today'],
            'catatan_jadwal'      => ['nullable', 'string', 'max:255'],
        ]);

        

        // 2. Ambil model
        $pelaporan = Pelaporan::findOrFail($id);



        // =======================================================
        // INI UPDATE YANG WAJIB ADA
        // =======================================================
        $pelaporan->tanggal_expose = $data['tanggal_expose_baru'];   // ubah tanggal
        $pelaporan->status         = 'Dijadwalkan Ulang';            // ubah status
        $pelaporan->catatan_jadwal = $data['catatan_jadwal'] ?? null;
        $pelaporan->save();

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Jadwal expose tugas "' . $pelaporan->task->assignment_type . '" DIJADWALKAN ULANG.',
                'url'     => route('pelaporan.index'),
            ]);
        }
        // =======================================================

        return back()->with('success', 'Tanggal expose diubah.');
    }
}

===== app\Http\Controllers\PreparationController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preparation;
use App\Models\Spt;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use App\Models\User;

class PreparationController extends Controller
{
    /**
     * Menampilkan daftar persiapan (untuk Inspektur).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Hanya persiapan dengan status 'Pending'
        $preparations = Preparation::where('status', 'Pending')->paginate(10);

        return view('preparations.index', compact('preparations'));
    }

    /**
     * Menampilkan form untuk membuat persiapan.
     *
     * @param  int  $sptId
     * @return \Illuminate\Http\Response
     */
    public function create($sptId)
    {
        $spt = Spt::findOrFail($sptId);

        // Periksa apakah SPT sudah memiliki persiapan
        if ($spt->preparation) {
            return redirect()->route('spt.index')->with('error', 'SPT ini sudah memiliki persiapan.');
        }

        return view('preparations.create', compact('spt'));
    }

    /**
     * Menyimpan persiapan baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sptId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $sptId)
    {
        $spt = Spt::findOrFail($sptId);

        // Validasi input
        $request->validate([
            'pka' => 'required|file|mimes:pdf,doc,docx|max:10000',
            'formulir_km4' => 'required|file|mimes:pdf,doc,docx|max:10000',
        ]);

        // Simpan file PKA
        if ($request->hasFile('pka')) {
            $pkaPath = $request->file('pka')->store('preparations/pka', 'public');
        }

        // Simpan file Formulir KM 4
        if ($request->hasFile('formulir_km4')) {
            $formulirKm4Path = $request->file('formulir_km4')->store('preparations/formulir_km4', 'public');
        }

        // Buat entri persiapan baru
        $preparation = Preparation::create([
            'spt_id' => $spt->id,
            'pka_path' => $pkaPath ?? null,
            'formulir_km4_path' => $formulirKm4Path ?? null,
            'status' => 'Pending',
        ]);

        // --- [MODIFIKASI] ---
        // Kirim notifikasi ke semua Inspektur
        $inspekturs = User::where('role', 'inspektur')->get();
        foreach ($inspekturs as $inspektur) {
            Notification::create([
                'user_id' => $inspektur->id,
                'message' => 'Dokumen persiapan baru untuk tugas "' . $spt->task->assignment_type . '" perlu ditinjau.',
                'url'     => route('inspektur.preparations.show', $preparation->id),
            ]);
        }
        // --- [AKHIR MODIFIKASI] ---

        // Optional: Kirim notifikasi ke Inspektur

        return redirect()->route('spt.index')->with('success', 'Persiapan Tugas berhasil dibuat dan dikirim ke Inspektur.');
    }

    /**
     * Menampilkan detail persiapan (untuk Inspektur).
     *
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function show($preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);


    return view('preparations.show', compact('preparation'));
    }

    /**
     * Menyetujui persiapan (di Inspektur).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, $preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);

        

        // Update status
        $preparation->status = 'Diterima';
        $preparation->note = $request->input('note'); // Opsional: Catatan Inspektur
        $preparation->save();

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Persiapan untuk tugas "' . $preparation->spt->task->assignment_type . '" telah DISETUJUI.',
                'url'     => route('preparations'),
            ]);
        }

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('success', 'Persiapan Tugas telah disetujui.');
    }

    /**
     * Menolak persiapan (di Inspektur).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $preparationId
     * @return \Illuminate\Http\Response
     */
    public function reject(Request $request, $preparationId)
    {
        $preparation = Preparation::findOrFail($preparationId);

        

        // Validasi input
        $request->validate([
            'note' => 'required|string|max:1000',
        ]);

        // Update status
        $preparation->status = 'Ditolak';
        $preparation->note = $request->input('note');
        $preparation->save();
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'message' => 'Persiapan untuk tugas "' . $preparation->spt->task->assignment_type . '" telah DITOLAK.',
                'url'     => route('preparations'),
            ]);
        }

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('error', 'Persiapan SPT telah ditolak.');
    }

    public function adminIndex()
    {
        
        $preparations = Preparation::with(['spt.task'])->paginate(20);

        return view('preparations.admin_index', compact('preparations'));
    }
}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

===== app\Http\Controllers\SekretarisController.php =====
<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\SPT;
use App\Models\Task;
use App\Models\Orang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use App\Models\User;

class SekretarisController extends Controller
{
    /**
     * Konstruktor untuk menerapkan middleware.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isSekretaris']);
    }

    public function pertimbangan()
    {
        // Mengambil semua tugas dengan status 'pending' dan 'Disetujui Inspektur' dengan paginasi
        $tasks = Task::whereIn('status', ['pending', 'Disetujui Inspektur'])->paginate(10);

        // Mengolah data untuk mengganti ID dengan nama pada `team_composition`
        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);

            // Ganti ID dengan nama dari tabel `orang`
            foreach (['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'] as $key) {
                if (isset($teamComposition[$key])) {
                    if (is_array($teamComposition[$key])) {
                        // Jika datanya berupa array, cari nama untuk setiap ID
                        $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                    } else {
                        // Jika datanya berupa single ID, cari nama langsung
                        $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                    }
                }
            }

            $task->team_composition = $teamComposition;
            return $task;
        });

        // Mengirim data tugas ke view
        return view('task.pertimbangan', compact('tasks'));
    }
    // Menampilkan form input data
    public function showForm($taskId)
    {
        $task = Task::findOrFail($taskId);
        return view('tasks.create_pdf_form', compact('task'));
    }

    // Menangani data form dan menghasilkan PDF
    public function createPdfWithData(Request $request, $taskId)
{
    // Validasi input form
    $validated = $request->validate([
        'nomor' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'kepada' => 'required|string|max:255',
        'maksud' => 'required|string',
        'waktu' => 'required|string|max:255',
    ]);
    $formattedDate = Carbon::parse($validated['tanggal'])->format('d-m-Y');

    // Ambil tugas berdasarkan ID
    $task = Task::findOrFail($taskId);

    // Ambil semua data orang berdasarkan ID dari tabel 'orang'
    $orang = Orang::pluck('nama', 'id')->toArray(); // Hanya mengambil nama

    // Mengolah data komposisi tim
    $teamComposition = json_decode($task->team_composition, true);
    
    // Array untuk daftar petugas dalam format yang sesuai untuk tabel
    $petugas = [];

    // Loop melalui team_composition dan siapkan data petugas
    foreach ($teamComposition as $jabatan => $anggota) {
        if (is_array($anggota)) {
            // Jika ada banyak anggota dalam satu peran (array)
            foreach ($anggota as $id) {
                $petugas[] = [
                    'nama' => $orang[$id] ?? "Tidak Ditemukan",
                    'jabatan' => ucwords(str_replace('_', ' ', $jabatan)), // Format lebih rapi
                ];
            }
        } else {
            // Jika hanya satu anggota dalam satu peran (string)
            $petugas[] = [
                'nama' => $orang[$anggota] ?? "Tidak Ditemukan",
                'jabatan' => ucwords(str_replace('_', ' ', $jabatan)),
            ];
        }
    }

    // Urutan jabatan yang diinginkan
    $urutan_jabatan = [
        'Penanggung Jawab',
        'Wakil Penanggung Jawab',
        'Pengendali Teknis',
        'Ketua Tim',
        'Anggota Tim',
        'Penunjang'
    ];

    // Sorting petugas berdasarkan jabatan tertinggi
    usort($petugas, function ($a, $b) use ($urutan_jabatan) {
        return array_search($a['jabatan'], $urutan_jabatan) - array_search($b['jabatan'], $urutan_jabatan);
    });

    // Siapkan data untuk view PDF
    $data = [
        'task' => $task,
        'petugas' => $petugas, // Data petugas sudah terurut
        'nomor' => $validated['nomor'],
        'tanggal' => $formattedDate,
        'kepada' => $validated['kepada'],
        'maksud' => $validated['maksud'],
        'waktu' => $validated['waktu'],
    ];

    // Debugging (jika perlu cek urutan sebelum generate PDF)
    // dd($data);

    // Render PDF menggunakan view
    $pdf = PDF::loadView('tasks.pdf.team_composition_with_data', $data);

    // Unduh PDF
    return $pdf->stream('komposisi_tim_' . $task->id . '.pdf');
}






    /**
     * Menyetujui tugas oleh sekretaris.
     */
    public function acceptTask($id)
    {
        $task = Task::findOrFail($id);

        // Pastikan status saat ini adalah 'pending'
        if ($task->status !== 'pending') {
            return redirect()->back()->with('error', 'Tugas tidak dapat disetujui.');
        }

        // Update status tugas menjadi 'Disetujui Sekretaris'
        $task->status = 'Disetujui Sekretaris';
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil disetujui.');
    }

    /**
     * Menolak tugas oleh sekretaris.
     */
    public function rejectTask(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($request->task_id);

        // Pastikan status saat ini adalah 'pending'
        if ($task->status !== 'pending') {
            return redirect()->back()->with('error', 'Tugas tidak dapat ditolak.');
        }

        // Update status tugas menjadi 'Ditolak Sekretaris' dan simpan alasan penolakan
        $task->status = 'Ditolak Sekretaris';
        $task->rejection_reason = $request->rejection_reason;
        $task->save();

        return redirect()->back()->with('success', 'Tugas berhasil ditolak.');
    }

    public function createSPT(Task $task)
    {
        // Pastikan task ada
        // Anda bisa menambahkan pengecekan otorisasi jika diperlukan

        return view('sekretaris.spt.upload', compact('task'));
    }

    public function storeSPT(Request $request, Task $task)
    {
        // Validasi data
        $request->validate([
            'spt_file' => 'required|file|mimes:pdf,doc,docx|max:5120', // Maksimal 5MB
        ]);


        // Cek apakah file ada
        if ($request->hasFile('spt_file')) {
            $file = $request->file('spt_file');

            // Cek apakah file valid
            if (!$file->isValid()) {
                return redirect()->back()->withErrors(['spt_file' => 'File yang diunggah tidak valid.'])->withInput();
            }

            // Ganti spasi dengan garis bawah dalam nama file dan tambahkan timestamp
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());

            try {
                // Simpan file di direktori 'spt_files' menggunakan disk 'public'
                $filePath = $file->storeAs('spt_files', $fileName, 'public');

                // Simpan informasi file ke dalam database
                Spt::create([
                    'task_id' => $task->id,  // ID tugas terkait
                    'file_name' => $fileName,  // Nama file yang diunggah
                    'file_path' => $filePath,  // Path file
                    'uploaded_by' => auth()->id(),  // ID user yang mengunggah file
                ]);

                $admins = User::where('role', 'admin')->get();
                foreach ($admins as $admin) {
                    Notification::create([
                        'user_id' => $admin->id,
                        'message' => 'SPT baru untuk tugas "' . $task->assignment_type . '" telah diunggah.',
                        'url'     => route('spt.index'),
                    ]);
                }
                // --- [AKHIR MODIFIKASI] ---

                // Redirect ke halaman lain dengan pesan sukses
                return redirect()->route('pertimbangan', $task->id)->with('success', 'SPT berhasil diunggah.');
            } catch (\Exception $e) {
                // Tangani error penyimpanan file atau data
                Log::error('Error saat menyimpan file: ' . $e->getMessage());
                return redirect()->back()->withErrors(['spt_file' => 'Gagal menyimpan file atau data SPT. Silakan coba lagi.'])->withInput();
            }
        } else {
            // Jika tidak ada file yang diunggah
            return redirect()->back()->withErrors(['spt_file' => 'File SPT tidak ditemukan.'])->withInput();
        }
    }
}

===== app\Http\Controllers\TaskController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\SPT;
use App\Models\Task;
use App\Models\Orang;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function view()
    {
        // Mengambil data dengan pagination
        $tasks = Task::paginate(20);

        // Mengolah data untuk mengganti ID dengan nama
        $tasks->transform(function ($task) {
            $teamComposition = json_decode($task->team_composition, true);

            // Ganti ID dengan nama dari tabel `orang`
            foreach (['penanggung_jawab', 'ketua_tim', 'wakil_penanggung_jawab', 'anggota_tim', 'pengendali_teknis', 'penunjang'] as $key) {
                if (isset($teamComposition[$key])) {
                    if (is_array($teamComposition[$key])) {
                        $teamComposition[$key] = \App\Models\Orang::whereIn('id', $teamComposition[$key])->pluck('nama')->toArray();
                    } else {
                        $teamComposition[$key] = \App\Models\Orang::find($teamComposition[$key])->nama ?? '-';
                    }
                }
            }

            $task->team_composition = $teamComposition;
            return $task;
        });

        return view('task.index', compact('tasks'));
    }

    public function planning()
    {
        $penanggungJawab      = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim             = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim           = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis     = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang            = Orang::where('jabatan', 'Penunjang')->get();

        // ðŸ”’ cari ID yang sudah dipakai di task aktif
        $lockedIds = Task::query()
            ->whereIn('status', ['pending', 'Disetujui Inspektur']) // status aktif
            ->get('team_composition')
            ->flatMap(function ($t) {
                $tc = json_decode($t->team_composition, true) ?? [];
                return collect([
                    $tc['ketua_tim'] ?? null,
                    ...((array)($tc['pengendali_teknis'] ?? [])),
                    ...((array)($tc['anggota_tim'] ?? [])),
                    ...((array)($tc['penunjang'] ?? [])),
                ]);
            })
            ->filter()
            ->map(fn($v) => (string)$v)
            ->unique();

        return view('task.planning', compact(
            'penanggungJawab',
            'ketuaTim',
            'wakilPenanggungJawab',
            'anggotaTim',
            'pengendaliTeknis',
            'penunjang',
            'lockedIds'
        ));
    }






    public function store(Request $request)
    {
        // Validasi tanpa kolom 'status'
        $validatedData = $request->validate([
            'assignment_type' => 'required|string|max:255',
            'penanggung_jawab' => 'required|exists:orang,id',
            'ketua_tim' => 'required|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|exists:orang,id',
            'anggota_tim' => 'required|array',
            'pengendali_teknis' => 'required|array',
            'penunjang' => 'required|array',
            'number_of_days' => 'required|integer|min:1',
        ]);

        // Menambahkan ID user yang sedang login ke 'created_by'
        $validatedData['created_by'] = auth()->id(); // Ambil ID user yang login

        // Menyusun data team_composition dalam format JSON
        $teamComposition = [
            'penanggung_jawab' => $validatedData['penanggung_jawab'],
            'ketua_tim' => $validatedData['ketua_tim'],
            'wakil_penanggung_jawab' => $validatedData['wakil_penanggung_jawab'],
            'anggota_tim' => $validatedData['anggota_tim'], // Array anggota tim
            'pengendali_teknis' => $validatedData['pengendali_teknis'], // Array pengendali teknis
            'penunjang' => $validatedData['penunjang'], // Array penunjang
        ];

        // Memasukkan data ke dalam table tasks
        $task = Task::create([
            'assignment_type' => $validatedData['assignment_type'],
            'team_composition' => json_encode($teamComposition), // Menyimpan dalam format JSON
            'number_of_days' => $validatedData['number_of_days'],
            'created_by' => $validatedData['created_by'],
        ]);

        $secretaries = User::where('role', 'sekretaris')->get();
        foreach ($secretaries as $secretary) {
            Notification::create([
                'user_id' => $secretary->id,
                'message' => 'Perencanaan tugas baru "' . $task->assignment_type . '" perlu pertimbangan.',
                'url' => route('pertimbangan'), // Arahkan ke halaman pertimbangan sekretaris
            ]);
        }



        return redirect()->route('task.index')->with('success', 'Tugas berhasil disimpan!');
    }




    public function edit($id)
{
    // [AMBIL TASK]
    $task = \App\Models\Task::findOrFail($id);

    // [PARSE KOMPOSISI TIM] kolom bisa string JSON atau sudah array
    $tcCurrent = is_string($task->team_composition)
        ? (json_decode($task->team_composition, true) ?? [])
        : ($task->team_composition ?? []);

    // [HITUNG TERKUNCI] personel yang sedang terpakai di tugas AKTIF lain (selain PJ/WPJ)
    // Aktif = pending / Disetujui Inspektur (samakan dengan logika store/update)
    $lockedIds = \App\Models\Task::query()
        ->where('id', '!=', $task->id)                       // exclude task ini
        ->whereIn('status', ['pending', 'Disetujui Inspektur'])
        ->get('team_composition')
        ->flatMap(function ($t) {
            $tc = is_string($t->team_composition)
                ? (json_decode($t->team_composition, true) ?? [])
                : ($t->team_composition ?? []);
            return collect([
                $tc['ketua_tim'] ?? null,
                ...((array)($tc['pengendali_teknis'] ?? [])),
                ...((array)($tc['anggota_tim'] ?? [])),
                ...((array)($tc['penunjang'] ?? [])),
            ]);
        })
        ->filter()
        ->map(fn($v) => (string)$v)       // <-- konsisten string
        ->unique()
        ->values();

    // [YANG SUDAH TERPILIH DI TASK INI] tetap boleh tampil/dipilih di form edit
    $selectedHere = collect([
        $tcCurrent['ketua_tim'] ?? null,
        ...((array)($tcCurrent['pengendali_teknis'] ?? [])),
        ...((array)($tcCurrent['anggota_tim'] ?? [])),
        ...((array)($tcCurrent['penunjang'] ?? [])),
    ])->filter()
      ->map(fn($v) => (string)$v)         // <-- konsisten string
      ->unique()
      ->values();

    // kunci akhir = terkunci minus yang sudah terpilih di task ini
    $lockedIds = $lockedIds->diff($selectedHere)->values();

    // [DATA DROPDOWN] (silakan sesuaikan filter jabatan bila perlu)
    $penanggungJawab       = \App\Models\Orang::where('jabatan', 'Penanggung Jawab')->get();
    $wakilPenanggungJawab  = \App\Models\Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
    $ketuaTim              = \App\Models\Orang::where('jabatan', 'Ketua Tim')->get();
    $pengendaliTeknis      = \App\Models\Orang::where('jabatan', 'Pengendali Teknis')->get();
    $anggotaTim            = \App\Models\Orang::where('jabatan', 'Anggota Tim')->get();
    $penunjang             = \App\Models\Orang::where('jabatan', 'Penunjang')->get();

    // [KIRIM KE VIEW]
    return view('task.edit', compact(
        'task',
        'tcCurrent',
        'lockedIds',
        'penanggungJawab',
        'wakilPenanggungJawab',
        'ketuaTim',
        'pengendaliTeknis',
        'anggotaTim',
        'penunjang'
    ));
}




    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'assignment_type'        => 'required|string|max:255',
            'penanggung_jawab'       => 'required|integer|exists:orang,id',
            'wakil_penanggung_jawab' => 'required|integer|exists:orang,id',
            'ketua_tim'              => 'required|integer|exists:orang,id',
            'pengendali_teknis'      => 'array|nullable',
            'pengendali_teknis.*'    => 'integer|exists:orang,id',
            'anggota_tim'            => 'array|nullable',
            'anggota_tim.*'          => 'integer|exists:orang,id',
            'penunjang'              => 'array|nullable',
            'penunjang.*'            => 'integer|exists:orang,id',
            'number_of_days'         => 'required|integer|min:1',
        ]);

        $task = Task::findOrFail($id);

        $teamComposition = [
            'penanggung_jawab'       => (string) $validated['penanggung_jawab'],
            'wakil_penanggung_jawab' => (string) $validated['wakil_penanggung_jawab'],
            'ketua_tim'              => (string) $validated['ketua_tim'],
            'pengendali_teknis'      => collect($validated['pengendali_teknis'] ?? [])->map(fn($v) => (string)$v)->all(),
            'anggota_tim'            => collect($validated['anggota_tim'] ?? [])->map(fn($v) => (string)$v)->all(),
            'penunjang'              => collect($validated['penunjang'] ?? [])->map(fn($v) => (string)$v)->all(),
        ];

        // Cek konflik (exclude task ini)
        $cekIds = collect([
            $teamComposition['ketua_tim'],
            ...$teamComposition['pengendali_teknis'],
            ...$teamComposition['anggota_tim'],
            ...$teamComposition['penunjang'],
        ])->filter()->unique();

        $konflik = Task::query()
            ->where('id', '!=', $task->id)
            ->whereIn('status', ['pending', 'Disetujui Inspektur'])
            ->where(function ($q) use ($cekIds) {
                foreach ($cekIds as $id) {
                    $q->orWhereJsonContains('team_composition->ketua_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->pengendali_teknis', (string)$id)
                        ->orWhereJsonContains('team_composition->anggota_tim', (string)$id)
                        ->orWhereJsonContains('team_composition->penunjang', (string)$id);
                }
            })
            ->exists();

        if ($konflik) {
            return back()->withErrors(['anggota' => 'Ada personel (selain PJ/WPJ) yang sudah terikat di tugas aktif.'])->withInput();
        }

        $task->assignment_type   = $validated['assignment_type'];
        $task->team_composition  = json_encode($teamComposition);
        $task->number_of_days    = $validated['number_of_days'];

        if (in_array($task->status, ['Ditolak Sekretaris', 'Ditolak Inspektur'], true)) {
            $task->status = 'pending';
            $task->rejection_reason = null;
        }

        $task->save();

        return redirect()->route('task.index')->with('success', 'Tugas berhasil diperbarui.');
    }





    public function destroy($id)
    {
        // Mengambil task berdasarkan id
        $task = Task::findOrFail($id);

        // Menghapus task
        $task->delete();

        // Redirect atau berikan feedback kepada pengguna
        return redirect()->route('task.index')->with('success', 'Task berhasil dihapus!');
    }


    public function approve($id)
    {
        // Temukan tugas berdasarkan ID
        $task = Task::findOrFail($id);

        // Ubah status menjadi "Disetujui Sekretaris"
        $task->status = 'Disetujui Sekretaris';
        $task->save();

        // Redirect kembali ke daftar tugas dengan pesan sukses
        return redirect()->route('task.consideration')->with('success', 'Tugas berhasil disetujui.');
    }

    public function reject(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        // Temukan tugas berdasarkan ID
        $task = Task::findOrFail($id);

        // Update status tugas menjadi "ditolak" dan simpan alasan
        $task->status = 'rejected';
        $task->rejection_reason = $request->reason;
        $task->save();

        // Redirect dengan pesan sukses
        return redirect()->route('task.index')->with('success', 'Tugas berhasil ditolak.');
    }







    public function acceptForSekretaris($id)
    {
        // Mencari tugas berdasarkan ID
        $task = Task::find($id);

        // Cek apakah tugas ditemukan dan statusnya pending
        if ($task && $task->status === 'pending') {
            // Mengubah status menjadi 'Disetujui Sekretaris'
            $task->status = 'Disetujui Sekretaris';
            $task->save(); // Simpan perubahan

            // --- [MODIFIKASI] ---
            // Kirim notifikasi ke semua Inspektur
            $inspekturs = User::where('role', 'inspektur')->get();
            foreach ($inspekturs as $inspektur) {
                Notification::create([
                    'user_id' => $inspektur->id,
                    'message' => 'Tugas "' . $task->assignment_type . '" telah disetujui oleh Sekretaris dan menunggu persetujuan Anda.',
                    'url'     => route('inspektur.approve_inspektur'),
                ]);
            }

            // Kirim notifikasi ke semua Admin
            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                Notification::create([
                    'user_id' => $admin->id,
                    'message' => 'Tugas "' . $task->assignment_type . '" disetujui oleh Sekretaris.',
                    'url'     => route('task.index'),
                ]);
            }

            // Redirect dengan pesan sukses
            return redirect()->route('pertimbangan')->with('success', 'Tugas berhasil disetujui oleh Sekretaris.');
        }

        // Redirect dengan pesan error jika tugas tidak ditemukan atau tidak bisa diubah
        return redirect()->route('pertimbangan')->with('error', 'Tugas tidak dapat diubah.');
    }

    public function rejectForSekretaris($id)
    {
        // Mencari tugas berdasarkan ID
        $task = Task::find($id);

        // Cek apakah tugas ditemukan dan statusnya pending
        if ($task && $task->status === 'pending') {
            // Mengubah status menjadi 'rejected'
            $task->status = 'rejected';
            $task->save(); // Simpan perubahan
            // Redirect dengan pesan sukses
            return redirect()->route('task.pertimbangan')->with('success', 'Tugas berhasil ditolak oleh Sekretaris.');
        }

        // Redirect dengan pesan error jika tugas tidak ditemukan atau tidak bisa diubah
        return redirect()->route('task.pertimbangan')->with('error', 'Tugas tidak dapat diubah.');
    }
    public function rejectWithReason(Request $request)
    {
        // Validasi input
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'rejection_reason' => 'required|string|max:255',
        ]);

        // Temukan tugas berdasarkan task_id
        $task = Task::find($request->task_id);

        if ($task && $task->status === 'pending') {
            $task->status = 'Ditolak Sekretaris'; // Perbarui status menjadi "Ditolak Sekretaris"
            $task->rejection_reason = $request->rejection_reason;
            $task->save();

            return redirect()->route('pertimbangan')->with('success', 'Tugas berhasil ditolak oleh Sekretaris dengan alasan.');
        }

        return redirect()->route('pertimbangan')->with('error', 'Tugas tidak dapat ditolak.');
    }

    //     public function viewSPT()
    // {
    //     // Mengambil data SPT dengan pagination, misalnya 10 per halaman
    //     $spt = SPT::with('task')->paginate(10);

    //     // Tampilkan halaman lihat SPT
    //     return view('spt.view', compact('spt'));
    // }
}

```


## Models Content
```
===== app\Models\Assignment.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
}

===== app\Models\EntryMeeting.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryMeeting extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'entry_meetings';

    // Mass assignable attributes
    protected $fillable = [
        'task_id',
        'agenda',
        'tanggal',
    ];

    // Relasi ke tabel Task (Tugas)
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

===== app\Models\LHP.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHP extends Model
{
    use HasFactory;
    protected $table = 'lhp';
    protected $fillable = [
        'task_id',
        'lhp_file',
        'keterangan',
        'status',
        'reason',
    ];

    /**
     * Relasi dengan Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

===== app\Models\LhpOtp.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpOtp extends Model
{
    use HasFactory;
    protected $table = 'lhp_otps';
    protected $fillable = [
        'lhp_id',
        'user_id',
        'otp_code',
        'expires_at',
    ];
    
    public function lhp()
    {
        return $this->belongsTo(Lhp::class);
    }
    
    public function user()
    
    {
        return $this->belongsTo(User::class);
    }
}

===== app\Models\Notification.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $fillable = [
        'user_id',
        'message',
        'url',
        'read_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

===== app\Models\Orang.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    protected $table = 'orang'; // Gunakan nama tabel yang sesuai
    protected $fillable = ['nama', 'jabatan'];
}

===== app\Models\Pelaksanaan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    use HasFactory;

    protected $table = 'pelaksanaan';

    protected $fillable = [
        'task_id',
        'entry_meeting_photo',
        'berita_acara_entry',
        'exit_meeting_photo',
        'berita_acara_exit',
    ];

    /**
     * Relasi dengan model Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

===== app\Models\Pelaporan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporans';

    protected $fillable = [
        'task_id',
        'km8',
        'km10',
        'kertas_kerja_at',
        'konsep_lhp',
        'expose_pelaporan',
        'tanggal_expose', // Tambahkan ini
        'status',
        'alasan_tolak',
        'catatan_jadwal',
    ];
    

    /**
     * Relasi dengan Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

===== app\Models\Preparation.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    use HasFactory;

    protected $table = 'preparations';
    protected $fillable = [
        'spt_id',
        'pka_path',
        'formulir_km4_path',
        'status',
        'note',
    ];

    /**
     * Relasi ke model Spt.
     */
    public function spt()
    {
        return $this->belongsTo(Spt::class);
    }
}

===== app\Models\Spt.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan
    protected $table = 'spt';

    // Izinkan pengisian massal pada kolom berikut
    protected $fillable = [
        'task_id',
        'file_name',  // Nama file yang diunggah
        'file_path',  // Path file di disk
        'uploaded_by',  // ID user yang mengunggah file
    ];

    // Relasi ke task (jika ada)
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function preparation()
    {
        return $this->hasOne(Preparation::class);
    }

    public function pelaksanaan()
    {
        return $this->hasMany(Pelaksanaan::class);
    }
}

===== app\Models\Task.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (opsional jika nama tabel sudah sesuai konvensi)
    protected $table = 'tasks';

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'assignment_type',
        'team_composition',
        'number_of_days',
        'status',
        'created_by',
        'supervisor_id',
        'rejection_reason',

    ];

    public function pelaksanaan()
    {
        return $this->hasMany(Pelaksanaan::class);
    }

    // Relasi ke user yang membuat task
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi ke supervisor/sekretaris
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
    public function spt()
    {
        return $this->hasMany(Spt::class);
    }

    // Relasi ke Preparation
    public function preparations()
    {
        return $this->hasMany(Preparation::class);
    }

    // Relasi ke PKA
    public function pka()
    {
        return $this->hasMany(PKA::class);
    }

    // Relasi ke KM4
    public function km4()
    {
        return $this->hasMany(KM4::class);
    }

    // Relasi ke EntryMeeting
    
}

```


## Views & UI Files Content
```
===== resources\views\admin\entry-meeting.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Entry Meeting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.entry-meeting.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="agenda" class="block text-sm font-medium text-gray-700">
                                Agenda Entry Meeting
                            </label>
                            <textarea id="agenda" name="agenda" rows="4" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">
                                Tanggal Entry Meeting
                            </label>
                            <input type="date" id="tanggal" name="tanggal" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="window.history.back()"
                                class="px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition">
                                Batal
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\km4.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir KM 4') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.km4.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="form_km4" class="block text-sm font-medium text-gray-700">
                                Isi Formulir KM 4
                            </label>
                            <textarea id="form_km4" name="form_km4" rows="6" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="window.history.back()"
                                class="px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition">
                                Batal
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\persiapan.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Persiapan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.persiapan.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan Persiapan</label>
                            <textarea id="keterangan" name="keterangan" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\pka.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja Audit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.pka.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="file_pka" class="block text-sm font-medium text-gray-700">Unggah Program Kerja
                                Audit (PDF)</label>
                            <input type="file" id="file_pka" name="file_pka" required class="mt-1 block w-full">
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Unggah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 

===== resources\views\admin\spt.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar SPT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No</th>
                                    <th
                                        class="w-2/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Tugas</th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal</th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Deskripsi</th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($spts as $spt)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ optional($spt->task)->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ \Carbon\Carbon::parse($spt->tanggal)->format('d-m-Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ optional($spt->task)->status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex space-x-2 justify-center">
                                                @if ($spt->file_path)
                                                    <a href="{{ asset('storage/' . $spt->file_path) }}" target="_blank"
                                                       class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition"
                                                       aria-label="Download SPT">
                                                        <!-- Ikon Download -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M12 16v-8m8-8H4v16h16z" />
                                                        </svg>
                                                        Download SPT
                                                    </a>
                                                @else
                                                    <button
                                                        class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-gray-700 cursor-not-allowed"
                                                        aria-label="Tidak ada file" disabled>
                                                        <!-- Ikon Tidak Ada File -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M9 12l2 2 4-4M7.5 7.5l9 9" />
                                                        </svg>
                                                        Tidak ada file
                                                    </button>
                                                @endif
                                        
                                                <!-- Tombol Buat Persiapan -->
                                                @if (!$spt->preparation)
                                                    <a href="{{ route('preparations.create', $spt->id) }}" 
                                                       class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition"
                                                       aria-label="Buat Persiapan">
                                                        <!-- Ikon Persiapan -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        Buat Persiapan
                                                    </a>
                                                @else
                                                    <span class="text-gray-500">Persiapan Sudah Dibuat</span>
                                                @endif
                                            </div>
                                        </td>
                                        


                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada data SPT.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $spts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda, dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda sehingga Anda dapat membuat yang baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Kirim Tautan Reset Kata Sandi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\login.blade.php =====
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border border-oceanBlue p-3 rounded-md focus:ring-oceanBlue focus:border-oceanBlue" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full border border-oceanBlue p-3 rounded-md focus:ring-oceanBlue focus:border-oceanBlue" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-oceanBlue shadow-sm focus:ring-oceanBlue" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-oceanBlue" href="{{ route('password.request') }}">
                    {{ __('Lupa Kata Sandi Anda?') }}
                </a>
            @endif

            <div>
                <x-primary-button class="bg-sunnyYellow text-white hover:bg-oceanBlue focus:ring-2 focus:ring-oceanBlue">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>

        <!-- Register Button -->
        <div class="mt-4 text-center">
            <span class="text-sm text-gray-600">{{ __('Belum punya akun?') }}</span>
            <a href="{{ route('register') }}" class="underline text-sm text-oceanBlue hover:text-oceanBlue focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-oceanBlue">
                {{ __('Daftar di sini') }}
            </a>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\register.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Hidden Role -->
        <input type="hidden" name="role" value="admin">

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Sudah Punya Akun?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\components\application-logo.blade.php =====
<img src="{{ asset('images/logo_inspektorat.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="{{ $class }}">

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center gap-2 w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-900 font-medium'
                : 'flex items-center gap-2 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>

===== resources\views\dashboard\admin.blade.php =====
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    {{-- <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total Pengguna</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalUsers'] ?? 0 }}</p>
    </div> --}}
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total Tugas</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalTasks'] ?? 0 }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Total LHP</h3>
        <p class="text-3xl font-semibold text-gray-800">{{ $data['totalLhps'] ?? 0 }}</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Status Tugas</h3>
        <ul>
            @forelse($data['taskStatusSummary'] as $status => $total)
                <li class="flex justify-between py-2 border-b">
                    <span class="text-gray-600">{{ ucfirst($status) }}</span>
                    <span class="font-bold text-gray-800">{{ $total }}</span>
                </li>
            @empty
                <li class="text-gray-500">Belum ada tugas.</li>
            @endforelse
        </ul>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Status LHP</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                @forelse($data['recentLhps'] as $lhp)
                    <tr class="border-b">
                        <td class="py-2 text-gray-600">{{ $lhp->task->assignment_type ?? 'N/A' }}</td>
                        <td class="py-2 text-right">
                            <span
                                class="text-xs font-semibold px-2 py-1 rounded-full 
                                {{ $lhp->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                {{ $lhp->status === 'disetujui' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $lhp->status === 'ditolak' ? 'bg-red-100 text-red-800' : '' }}">
                                {{ ucfirst($lhp->status) }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-2 text-gray-500">Belum ada LHP.</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>

===== resources\views\dashboard\inspektur.blade.php =====
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Aktif Saya</h3>
        <p class="text-5xl font-semibold text-green-600 my-4">{{ $data['myActiveTasks'] ?? 0 }}</p>
        {{-- <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">Lihat semua tugas</a> --}}
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan LHP Saya</h3>
        <ul>
            <li class="flex justify-between py-2 border-b">
                <span class="text-gray-600">Pending</span>
                <span class="font-bold text-yellow-600">{{ $data['myLhpStatus']['pending'] ?? 0 }}</span>
            </li>
            <li class="flex justify-between py-2 border-b">
                <span class="text-gray-600">Disetujui</span>
                <span class="font-bold text-green-600">{{ $data['myLhpStatus']['disetujui'] ?? 0 }}</span>
            </li>
            <li class="flex justify-between py-2">
                <span class="text-gray-600">Ditolak</span>
                <span class="font-bold text-red-600">{{ $data['myLhpStatus']['ditolak'] ?? 0 }}</span>
            </li>
        </ul>
        <a href="{{ route('lhp.index') }}" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Lihat LHP Saya
        </a>
    </div>
</div>

===== resources\views\dashboard\sekretaris.blade.php =====
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
        <h3 class="text-gray-500 text-sm font-medium">Tugas Perlu Ditugaskan</h3>
        <p class="text-5xl font-semibold text-blue-600 my-4">{{ $data['pendingAssignmentTasks'] ?? 0 }}</p>
        {{-- <a href="{{ route('sekretaris.tasks.index') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Lihat Tugas
        </a> --}}
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tugas Baru Menunggu</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                @forelse($data['newTasks'] as $task)
                    <tr class="border-b">
                        <td class="py-2 text-gray-600">{{ $task->assignment_type }}</td>
                        <td class="py-2 text-gray-500 text-sm">{{ $task->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-2 text-gray-500">Tidak ada tugas baru.</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>

===== resources\views\inspektur\orang\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
      <h2 class="text-lg font-semibold text-gray-900">Tambah Personel</h2>
    </x-slot>
  
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-2xl">
        <form method="post" action="{{ route('inspektur.orang.store') }}" class="grid gap-4">
          @csrf
  
          <div>
            <x-input-label value="Nama" />
            <x-text-input name="nama" value="{{ old('nama') }}" class="mt-1 w-full" />
            <x-input-error :messages="$errors->get('nama')" class="mt-1" />
          </div>
  
          <div>
            <x-input-label value="Jabatan" />
            <select name="jabatan" class="mt-1 w-full border-gray-300 rounded-md">
              <option value="">-- Pilih --</option>
              @foreach(['Penanggung Jawab','Wakil Penanggung Jawab','Ketua Tim','Anggota Tim','Pengendali Teknis','Penunjang'] as $r)
                <option value="{{ $r }}" @selected(old('jabatan')==$r)>{{ $r }}</option>
              @endforeach
            </select>
            <x-input-error :messages="$errors->get('jabatan')" class="mt-1" />
          </div>
  
          <div class="flex items-center gap-2">
            <x-primary-button>Simpan</x-primary-button>
            <a href="{{ route('inspektur.orang.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </x-app-layout>
  

===== resources\views\inspektur\orang\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
      <h2 class="text-lg font-semibold text-gray-900">Edit Personel</h2>
    </x-slot>
  
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-2xl">
        <form method="post" action="{{ route('inspektur.orang.update',$orang) }}" class="grid gap-4">
          @csrf @method('PUT')
  
          <div>
            <x-input-label value="Nama" />
            <x-text-input name="nama" value="{{ old('nama', $orang->nama) }}" class="mt-1 w-full" />
            <x-input-error :messages="$errors->get('nama')" class="mt-1" />
          </div>
  
          <div>
            <x-input-label value="Jabatan" />
            <select name="jabatan" class="mt-1 w-full border-gray-300 rounded-md">
              <option value="">-- Pilih --</option>
              @foreach(['Penanggung Jawab','Wakil Penanggung Jawab','Ketua Tim','Anggota Tim','Pengendali Teknis','Penunjang'] as $r)
                <option value="{{ $r }}" @selected(old('jabatan', $orang->jabatan)==$r)>{{ $r }}</option>
              @endforeach
            </select>
            <x-input-error :messages="$errors->get('jabatan')" class="mt-1" />
          </div>
  
          <div class="flex items-center gap-2">
            <x-primary-button>Simpan</x-primary-button>
            <a href="{{ route('inspektur.orang.index') }}" class="text-sm text-gray-600 hover:underline">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </x-app-layout>
  

===== resources\views\inspektur\orang\index.blade.php =====
{{-- resources/views/inspektur/orang/index.blade.php --}}

<x-app-layout>
  <x-slot name="header">
    <h2 class="text-lg font-semibold text-gray-900">Data Personel</h2>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
    @if (session('ok'))
      <div class="mb-4 rounded-md bg-green-50 border border-green-200 p-3 text-sm text-green-800">
        {{ session('ok') }}
      </div>
    @endif

    <!-- Card: Filter + Tambah -->
    <div class="mb-4 bg-white rounded-lg shadow-sm border border-gray-200 p-4">
      {{-- [DIUBAH] Grid dari 3 jadi 4 kolom untuk menampung dropdown jabatan --}}
      <form method="get" class="grid gap-3 sm:grid-cols-4">
        <div class="sm:col-span-2">
          {{-- [TETAP] Input pencarian keyword --}}
          <x-input-label value="Cari" />
          <x-text-input name="q" value="{{ $q }}" class="mt-1 w-full" placeholder="Nama atau Jabatanâ€¦" />
        </div>

        <div>
          {{-- [DITAMBAHKAN] Dropdown filter jabatan --}}
          <x-input-label value="Jabatan" />
          <select name="jabatan" class="mt-1 w-full border-gray-300 rounded-md">
            <option value="">-- Semua --</option>
            @foreach($roles as $r)
              <option value="{{ $r }}" @selected(($jabatan ?? '') === $r)>{{ $r }}</option>
            @endforeach
          </select>
        </div>

        <div class="flex items-end gap-2">
          {{-- [TETAP] Tombol cari --}}
          <x-primary-button class="h-10">Cari</x-primary-button>

          {{-- [DITAMBAHKAN] Tombol reset untuk menghapus filter & keyword --}}
          @if(request()->hasAny(['q','jabatan']))
            <a href="{{ route('inspektur.orang.index') }}"
               class="inline-flex items-center h-10 px-4 rounded-lg border border-gray-200 bg-white text-gray-700 text-sm">
              Reset
            </a>
          @endif

          {{-- [TETAP] Tombol tambah data --}}
          <a href="{{ route('inspektur.orang.create') }}" class="inline-flex items-center h-10 px-4 rounded-lg bg-blue-600 text-white text-sm font-medium">
            Tambah
          </a>
        </div>
      </form>
    </div>

    <!-- Card: Tabel -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
          <thead class="bg-gray-50 text-gray-700">
            <tr>
              <th class="px-4 py-2 text-left font-medium">Nama</th>
              <th class="px-4 py-2 text-left font-medium">Jabatan</th>
              <th class="px-4 py-2 text-right font-medium w-40">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            @forelse($items as $i)
              <tr>
                <td class="px-4 py-2">{{ $i->nama }}</td>
                <td class="px-4 py-2">{{ $i->jabatan }}</td>
                <td class="px-4 py-2 text-right">
                  <a href="{{ route('inspektur.orang.edit',$i) }}" class="text-blue-600 hover:underline">Edit</a>
                  <form action="{{ route('inspektur.orang.destroy',$i) }}" method="post" class="inline"
                        onsubmit="return confirm('Hapus data ini?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline ml-3">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="px-4 py-6 text-center text-gray-500">Belum ada data.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- [TETAP] Pagination; sudah otomatis ikut query string karena withQueryString() di controller --}}
      <div class="px-4 py-3 border-t border-gray-100">
        {{ $items->links() }}
      </div>
    </div>
  </div>
</x-app-layout>

===== resources\views\inspektur\approve_inspektur.blade.php =====
<!-- resources/views/inspektur/approve_inspektur.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Persetujuan Tugas Inspektur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Alpine.js untuk mengelola state modal -->
        <div x-data="{ isModalOpen: false, currentTaskId: null }" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Penugasan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Komposisi Tim
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Hari
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($tasks as $task)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="border border-gray-300 rounded-lg p-4 bg-gray-50 shadow-sm">
                                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Komposisi Tim</h3>
                                                <table
                                                    class="table-auto w-full text-left text-sm border border-gray-300">
                                                    <tbody>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Ketua Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['ketua_tim'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Wakil Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['wakil_penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Anggota Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['anggota_tim']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['anggota_tim'] as $anggota)
                                                                            <li
                                                                                class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $anggota }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Pengendali Teknis:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['pengendali_teknis']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['pengendali_teknis'] as $pengendali)
                                                                            <li
                                                                                class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $pengendali }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">
                                                                Penunjang:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['penunjang']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['penunjang'] as $penunjang)
                                                                            <li
                                                                                class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $penunjang }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $task->number_of_days }} Hari
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <div class="flex justify-center space-x-4">
                                                <!-- Tombol Setuju -->
                                                <a href="{{ route('inspektur.approve', $task->id) }}"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md shadow hover:bg-green-700 transition">
                                                    Setuju
                                                </a>

                                                <!-- Tombol Tolak, akan membuka modal -->
                                                <button
                                                    @click="isModalOpen = true; currentTaskId = {{ $task->id }}"
                                                    type="button"
                                                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md shadow hover:bg-red-700 transition">
                                                    Tolak
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada tugas yang perlu disetujui.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>

                <!-- Modal untuk menolak tugas -->
                <div x-show="isModalOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center px-4">
                    <!-- Background Overlay -->
                    <div @click="isModalOpen = false" class="absolute inset-0 bg-black opacity-50 transition-opacity">
                    </div>

                    <!-- Modal Content -->
                    <div class="bg-white rounded-lg shadow-lg z-10 w-full max-w-md mx-auto p-6 transform transition-all"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Alasan Penolakan</h3>
                        <form method="POST" action="{{ route('inspektur.reject') }}">
                            @csrf
                            <input type="hidden" name="task_id" :value="currentTaskId">
                            <div class="mb-4">
                                <label for="rejection_reason"
                                    class="block text-sm font-medium text-gray-700">Alasan</label>
                                <textarea id="rejection_reason" name="rejection_reason" rows="3" required
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Masukkan alasan penolakan"></textarea>
                                @error('rejection_reason')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end space-x-4">
                                <button type="button" @click="isModalOpen = false"
                                    class="px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition">
                                    Tolak
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\layouts\app.blade.php =====
<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- SweetAlert2 CSS (tetap dipakai) --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    {{-- Styles for x-cloak --}}
    <style>[x-cloak]{ display:none !important; }</style>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js (punyamu di public/js) --}}
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
</head>

<body x-data="{ sidebarOpen:false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            {{-- ganti dengan include file sidebar milikmu --}}
            @include('layouts.navigation')
        </div>

        {{-- Overlay (mobile) --}}
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen=false"
            x-cloak
            class="fixed inset-0 bg-black/25 z-20 md:hidden"
        ></div>

        {{-- Main --}}
        <div class="flex-1 flex flex-col w-full">

            {{-- Mobile topbar --}}
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <button @click="sidebarOpen=true" class="text-gray-600 focus:outline-none z-10" aria-label="Open sidebar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div class="absolute left-1/2 -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>

            {{-- Optional header (desktop only) --}}
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            {{-- Page content --}}
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    {{-- SweetAlert2 JS + session flash handler --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if (session('success'))
                Swal.fire({ icon:'success', title:'Berhasil', text:"{{ session('success') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('error'))
                Swal.fire({ icon:'error', title:'Gagal', text:"{{ session('error') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('warning'))
                Swal.fire({ icon:'warning', title:'Peringatan', text:"{{ session('warning') }}", timer:3000, showConfirmButton:false });
            @endif
            @if (session('info'))
                Swal.fire({ icon:'info', title:'Informasi', text:"{{ session('info') }}", timer:3000, showConfirmButton:false });
            @endif
        });
    </script>
</body>
</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-br from-oceanBlue via-softPurple to-accentPurple">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="text-center mb-6">
                <a href="/">
                    <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Inspektorat" class="h-[70px] mx-auto">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-xl rounded-lg border border-oceanBlue/50">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'MY APP') }}
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        @if (Auth::check() && Auth::user()->role === 'admin')
            <x-nav-link :href="route('task.planning')" :active="request()->routeIs('task.planning')">
                {{ __('Perencanaan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('task.index')" :active="request()->routeIs('task.index')">
                {{ __('Lihat Perencanaan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('spt.index')" :active="request()->routeIs('spt.index')">
                {{ __('Lihat SPT') }}
            </x-nav-link>
            <x-nav-link :href="route('preparations')" :active="request()->routeIs('preparations')">
                {{ __('Lihat Persiapan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.create')" :active="request()->routeIs('pelaksanaan.create')">
                {{ __('Pelaksanaan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.index')">
                {{ __('Pelaporan') }}
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.index')">
                {{ __('LHP') }}
            </x-nav-link>
        @endif

        @if (Auth::check() && Auth::user()->role === 'sekretaris')
            <x-nav-link :href="route('pertimbangan')" :active="request()->routeIs('pertimbangan')">
                {{ __('Pertimbangan Penugasan') }}
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.planning')" :active="request()->routeIs('sekretaris.task.planning')">
                Perencanaan Penugasan
            </x-nav-link>
            <x-nav-link :href="route('sekretaris.task.view')" :active="request()->routeIs('sekretaris.task.view')">
                {{ __('Daftar Penugasan') }}
            </x-nav-link>
        @endif

        @if (Auth::check() && Auth::user()->role === 'inspektur')
            <x-nav-link :href="route('inspektur.approve_inspektur')" :active="request()->routeIs('inspektur.approve_inspektur')">
                {{ __('Persetujuan Tugas') }}
            </x-nav-link>
            <x-nav-link :href="route('inspektur.preparations.index')" :active="request()->routeIs('inspektur.preparations.index')">
                {{ __('Lihat Persiapan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaksanaan.index')" :active="request()->routeIs('pelaksanaan.index')">
                {{ __('Lihat Pelaksanaan') }}
            </x-nav-link>
            <x-nav-link :href="route('pelaporan.index')" :active="request()->routeIs('pelaporan.index')">
                {{ __('Lihat Pelaporan') }}
            </x-nav-link>
            <x-nav-link :href="route('lhp.index')" :active="request()->routeIs('lhp.index')">
                {{ __('Lihat LHP') }}
            </x-nav-link>
            <x-nav-link :href="route('inspektur.orang.index')" :active="request()->routeIs('inspektur.orang.*')">
                {{ __('Data Personel') }}
            </x-nav-link>
        @endif
    </nav>

    <div class="px-4 py-4 border-t border-gray-200">
        <div x-data="{ open: false }" class="relative mb-4">
            <button @click="open = ! open"
                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                <span>Notifikasi</span>
                @if (isset($unreadCount) && $unreadCount > 0)
                    <span
                        class="inline-flex items-center justify-center h-6 w-6 text-xs font-bold text-white bg-red-500 rounded-full">{{ $unreadCount }}</span>
                @else
                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                @endif
            </button>
            <div x-show="open" x-cloak @click.away="open = false"
                class="absolute bottom-full mb-2 w-full bg-white rounded-lg shadow-lg z-50 border max-h-64 overflow-y-auto">
                <div class="py-2 px-4 font-bold border-b text-gray-800">Notifikasi</div>
                @if (isset($notifications) && $notifications->count() > 0)
                    @foreach ($notifications as $notification)
                        {{-- =================== PERUBAHAN HANYA DI BARIS INI =================== --}}
                        <a href="{{ route('notifications.read', $notification->id) }}"
                           class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 border-b last:border-b-0">
                        {{-- ===================================================================== --}}
                            <p>{{ $notification->message }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $notification->created_at->diffForHumans() }}</p>
                        </a>
                    @endforeach
                @else
                    <p class="px-4 py-3 text-sm text-gray-500">Tidak ada notifikasi baru.</p>
                @endif
            </div>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                <span>{{ Auth::user()->name }}</span>
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
                <a href="{{ route('profile.edit') }}"
                    class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>

===== resources\views\lhp\create.blade.php =====
<!-- resources/views/lhp/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah LHP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form LHP -->
                    <form action="{{ route('lhp.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Task</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Tugas --</option>
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}" {{ old('task_id') == $task->id ? 'selected' : '' }}>
                                        {{ $task->assignment_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Upload LHP File -->
                        <div class="mb-4">
                            <label for="lhp_file" class="block text-sm font-medium text-gray-700">Upload File LHP</label>
                            <input type="file" name="lhp_file" id="lhp_file"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Keterangan -->
                        {{-- <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                                placeholder="Masukkan keterangan jika diperlukan">{{ old('keterangan') }}</textarea>
                        </div> --}}

                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('lhp.index') }}"
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\lhp\edit.blade.php =====
<!-- resources/views/lhp/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit LHP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Edit LHP -->
                    <form action="{{ route('lhp.update', $lhp->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Task</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Task --</option>
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}" {{ (old('task_id') ?? $lhp->task_id) == $task->id ? 'selected' : '' }}>
                                        {{ $task->assignment_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        

                        <!-- Upload File LHP -->
                        <div class="mb-4">
                            <label for="lhp_file" class="block text-sm font-medium text-gray-700">Upload File LHP</label>
                            @if($lhp->lhp_file)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $lhp->lhp_file) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat File LHP Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="lhp_file" id="lhp_file"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Keterangan -->
                        <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                                placeholder="Masukkan keterangan jika diperlukan">{{ old('keterangan') ?? $lhp->keterangan }}</textarea>
                        </div>

                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('lhp.index') }}"
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Perbarui
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\lhp\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar LHP') }}
        </h2>
    </x-slot>

    <div id="rejectModal" class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Alasan Penolakan</h3>
            <form action="{{ route('lhp.reject') }}" method="POST">
                @csrf
                <input type="hidden" id="lhp_id" name="lhp_id">
                <div class="mb-4">
                    <label for="reason" class="block text-sm font-medium text-gray-700">Alasan</label>
                    <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeRejectModal()" class="px-4 py-2 bg-gray-300 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-400">
                        Batal
                    </button>
                    <button type="submit" class="ml-2 px-4 py-2 bg-red-600 text-sm font-medium text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Tolak
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div x-data="otpModal()" x-show="show" @keydown.escape.window="show = false" class="fixed inset-0 z-50 bg-gray-500 bg-opacity-75 flex justify-center items-center" style="display: none;">
        <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-sm" @click.away="show = false">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Verifikasi OTP</h3>
            <p class="text-gray-600 mb-4">Kami telah mengirimkan kode OTP ke nomor WhatsApp Anda. Silakan masukkan kode di bawah ini.</p>
            
            <div x-show="message" :class="{ 'bg-green-100 text-green-800': !error, 'bg-red-100 text-red-800': error }" class="p-3 rounded-md mb-4 text-sm" x-text="message"></div>
            
            <form @submit.prevent="verifyOtp()">
                <div class="mb-4">
                    <label for="otp" class="block text-sm font-medium text-gray-700">Kode OTP</label>
                    <input type="text" id="otp" x-model="otp" maxlength="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-center tracking-widest text-lg" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" @click="show = false" class="px-4 py-2 bg-gray-300 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-400">
                        Batal
                    </button>
                    <button type="submit" :disabled="loading" class="ml-2 px-4 py-2 bg-blue-600 text-sm font-medium text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center">
                        <svg x-show="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-text="loading ? 'Memverifikasi...' : 'Verifikasi'"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="py-12" x-data>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if (auth()->user()->role !== 'inspektur')
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-medium text-gray-700">LHP</h3>
                            <a href="{{ route('lhp.create') }}" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah LHP
                            </a>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tugas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File LHP</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($lhps as $lhp)
                                    @if (auth()->user()->role === 'inspektur' && $lhp->status === 'ditolak')
                                        @continue
                                    @endif
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($lhps->currentPage() - 1) * $lhps->perPage() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $lhp->task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($lhp->lhp_file)
                                                <button @click="$dispatch('open-otp-modal', { lhpId: {{ $lhp->id }} })" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat LHP
                                                </button>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $lhp->keterangan ?? '-' }}
                                        </td>
                                        <td class="pl-0 py-4 whitespace-nowrap text-sm text-center">
                                            <span class="inline-flex items-center justify-center px-1 py-1 text-xs font-semibold rounded-full 
                                                {{ $lhp->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                                {{ $lhp->status === 'disetujui' ? 'bg-green-100 text-green-800' : '' }}
                                                {{ $lhp->status === 'ditolak' ? 'bg-red-100 text-red-800' : '' }}">
                                                {{ ucfirst($lhp->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'inspektur')
                                                @if ($lhp->status !== 'disetujui')
                                                    <a href="{{ route('lhp.edit', $lhp->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                        <i class="fas fa-edit mr-2"></i>Edit
                                                    </a>
                                                    <form action="{{ route('lhp.destroy', $lhp->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            <i class="fas fa-trash-alt mr-2"></i>Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            @endif
                                            @if (auth()->user()->role === 'inspektur' && $lhp->status !== 'disetujui')
                                                <form action="{{ route('lhp.acc', $lhp->id) }}" method="POST" class="inline-block mr-2">
                                                    @csrf
                                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                        <i class="fas fa-check mr-2"></i>Acc
                                                    </button>
                                                </form>
                                                <button onclick="showRejectModal({{ $lhp->id }})" class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                    <i class="fas fa-times mr-2"></i>Tolak
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada LHP.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $lhps->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showRejectModal(id) {
            document.getElementById('lhp_id').value = id;
            document.getElementById('rejectModal').classList.remove('hidden');
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
        }

        function otpModal() {
            return {
                show: false,
                loading: false,
                error: false,
                message: '',
                lhpId: null,
                otp: '',
                init() {
                    window.addEventListener('open-otp-modal', event => {
                        this.reset();
                        this.lhpId = event.detail.lhpId;
                        this.show = true;
                        this.sendOtp();
                    });
                },
                reset() {
                    this.loading = false;
                    this.error = false;
                    this.message = '';
                    this.lhpId = null;
                    this.otp = '';
                },
                sendOtp() {
                    this.loading = true;
                    this.message = 'Mengirim OTP...';
                    fetch(`/lhp/${this.lhpId}/send-otp`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.loading = false;
                        if (data.success) {
                            this.error = false;
                            this.message = data.success;
                        } else {
                            this.error = true;
                            this.message = data.error || 'Gagal mengirim OTP.';
                        }
                    }).catch(() => {
                        this.loading = false;
                        this.error = true;
                        this.message = 'Terjadi kesalahan. Coba lagi.';
                    });
                },
                verifyOtp() {
                    this.loading = true;
                    this.message = '';
                    fetch(`/lhp/${this.lhpId}/verify-otp`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({ otp: this.otp })
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.loading = false;
                        if (data.success) {
                            this.error = false;
                            this.message = data.success;
                            // Buka file di tab baru
                            window.open(data.redirect_url, '_blank');
                            this.show = false;
                        } else {
                            this.error = true;
                            this.message = data.error || 'Terjadi kesalahan.';
                        }
                    }).catch(() => {
                        this.loading = false;
                        this.error = true;
                        this.message = 'Terjadi kesalahan. Coba lagi.';
                    });
                }
            }
        }

        // Pastikan event listener untuk Alpine.js sudah siap
        document.addEventListener('alpine:init', () => {
            Alpine.data('otpModal', otpModal);
        });
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pHg+2V8clVjoTjvJkZGJZmS98fLAV6qKQtwEyn7VEl8dvU+8MznRycAI+pNnLOfRlGxhQcaYDFs/jX1H5Z1vQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>

===== resources\views\pelaksanaan\create.blade.php =====
<!-- resources/views/pelaksanaan/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Tambah Pelaksanaan') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                        <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelaksanaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Pilih Tugas -->
                    <div class="mb-4">
                        <label for="task_id" class="block text-gray-700">Pilih Tugas</label>
                        <select name="task_id" id="task_id"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Tugas --</option>
                            @foreach ($taskList as $task)
                                <option value="{{ $task->id }}" {{ old('task_id') == $task->id ? 'selected' : '' }}>
                                    {{ $task->id }} - {{ $task->assignment_type }}
                                </option>
                            @endforeach
                        </select>
                        @error('task_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Entry Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                    <div class="mb-4">
                        <label for="entry_meeting_photo" class="block text-gray-700">Upload Foto Entry Meeting</label>
                        <input type="file" name="entry_meeting_photo" id="entry_meeting_photo"
                            class="mt-1 block w-full" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: JPEG, PNG, JPG, GIF. Maksimal ukuran file: 2MB.
                        </p>
                        @error('entry_meeting_photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_entry" class="block text-gray-700">Upload Berita Acara Entry
                            Meeting</label>
                        <input type="file" name="berita_acara_entry" id="berita_acara_entry"
                            class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: PDF, DOC, DOCX. Maksimal ukuran file: 5MB.
                        </p>
                        @error('berita_acara_entry')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Exit Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                    <div class="mb-4">
                        <label for="exit_meeting_photo" class="block text-gray-700">Upload Foto Exit Meeting</label>
                        <input type="file" name="exit_meeting_photo" id="exit_meeting_photo"
                            class="mt-1 block w-full" accept="image/*">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: JPEG, PNG, JPG, GIF. Maksimal ukuran file: 2MB.
                        </p>
                        @error('exit_meeting_photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_exit" class="block text-gray-700">Upload Berita Acara Exit
                            Meeting</label>
                        <input type="file" name="berita_acara_exit" id="berita_acara_exit" class="mt-1 block w-full"
                            accept=".pdf,.doc,.docx">
                        <p class="mt-1 text-sm text-gray-500">
                            Jenis file yang diperbolehkan: PDF, DOC, DOCX. Maksimal ukuran file: 5MB.
                        </p>
                        @error('berita_acara_exit')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\pelaksanaan\edit.blade.php =====
<!-- resources/views/pelaksanaan/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Edit Pelaksanaan') }}
            </h2>
            <a href="{{ route('pelaksanaan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Edit Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                        <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelaksanaan.update', $pelaksanaan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Pilih Task -->
                    <div class="mb-4">
                        <label for="task_id" class="block text-gray-700">Pilih Tugas</label>
                        <select name="task_id" id="task_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Task --</option>
                            @foreach($taskList->groupBy('assignment_type') as $assignmentType => $tasks)
                                <optgroup label="{{ $assignmentType }}">
                                    @foreach($tasks as $task)
                                        <option value="{{ $task->id }}" {{ (old('task_id', $pelaksanaan->task_id) == $task->id) ? 'selected' : '' }}>
                                            {{ $task->id }} - {{ $task->assignment_type }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>

                    <!-- Entry Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                    <div class="mb-4">
                        <label for="entry_meeting_photo" class="block text-gray-700">Upload Foto Entry Meeting</label>
                        <input type="file" name="entry_meeting_photo" id="entry_meeting_photo" class="mt-1 block w-full" accept="image/*">
                        @if($pelaksanaan->entry_meeting_photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $pelaksanaan->entry_meeting_photo) }}" alt="Entry Meeting Photo" class="w-24 h-24 object-cover">
                            </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_entry" class="block text-gray-700">Upload Berita Acara Entry Meeting</label>
                        <input type="file" name="berita_acara_entry" id="berita_acara_entry" class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        @if($pelaksanaan->berita_acara_entry)
                            <div class="mt-2">
                                <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_entry) }}" target="_blank" class="text-blue-500">Download Berita Acara Entry Meeting</a>
                            </div>
                        @endif
                    </div>

                    <!-- Exit Meeting -->
                    <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                    <div class="mb-4">
                        <label for="exit_meeting_photo" class="block text-gray-700">Upload Foto Exit Meeting</label>
                        <input type="file" name="exit_meeting_photo" id="exit_meeting_photo" class="mt-1 block w-full" accept="image/*">
                        @if($pelaksanaan->exit_meeting_photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $pelaksanaan->exit_meeting_photo) }}" alt="Exit Meeting Photo" class="w-24 h-24 object-cover">
                            </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="berita_acara_exit" class="block text-gray-700">Upload Berita Acara Exit Meeting</label>
                        <input type="file" name="berita_acara_exit" id="berita_acara_exit" class="mt-1 block w-full" accept=".pdf,.doc,.docx">
                        @if($pelaksanaan->berita_acara_exit)
                            <div class="mt-2">
                                <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_exit) }}" target="_blank" class="text-blue-500">Download Berita Acara Exit Meeting</a>
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\pelaksanaan\index.blade.php =====
<!-- resources/views/pelaksanaan/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Daftar Pelaksanaan') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Daftar Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Nama Tugas</th>
                                <th class="py-2 px-4 border-b">Foto Entry</th>
                                <th class="py-2 px-4 border-b">Berita Acara Entry</th>
                                <th class="py-2 px-4 border-b">Foto Exit</th>
                                <th class="py-2 px-4 border-b">Berita Acara Exit</th>
                                <!-- <th class="py-2 px-4 border-b">Kirim ke Inspektur</th> --> <!-- Hapus baris ini -->
                                <th class="py-2 px-4 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelaksanaan as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                                    <td class="py-2 px-4 border-b text-center">
                                        @if ($item->task)
                                            {{ $item->task->assignment_type }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        @if ($item->entry_meeting_photo)
                                            <img src="{{ asset('storage/' . $item->entry_meeting_photo) }}"
                                                alt="Entry Photo" class="w-24 h-24 object-cover">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        @if ($item->berita_acara_entry)
                                            <a href="{{ asset('storage/' . $item->berita_acara_entry) }}"
                                                target="_blank" class="text-blue-500">Download</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        @if ($item->exit_meeting_photo)
                                            <img src="{{ asset('storage/' . $item->exit_meeting_photo) }}"
                                                alt="Exit Photo" class="w-24 h-24 object-cover">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        @if ($item->berita_acara_exit)
                                            <a href="{{ asset('storage/' . $item->berita_acara_exit) }}" target="_blank"
                                                class="text-blue-500">Download</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('pelaksanaan.show', $item->id) }}"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Lihat</a>
                                        <a href="{{ route('pelaksanaan.edit', $item->id) }}"
                                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                        <form action="{{ route('pelaksanaan.destroy', $item->id) }}" method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($pelaksanaan->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center py-4">Tidak ada data pelaksanaan.</td>
                                </tr>
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\pelaksanaan\show.blade.php =====
<!-- resources/views/pelaksanaan/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Detail Pelaksanaan') }}
            </h2>
            <a href="{{ route('pelaksanaan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Detail Pelaksanaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <strong>ID Pelaksanaan:</strong> {{ $pelaksanaan->id }}
                </div>
                <div class="mb-4">
                    <strong>SPT:</strong>
                    @if($pelaksanaan->spt)
                        {{ $pelaksanaan->spt->id }} - {{ $pelaksanaan->spt->nama }}
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                <h3 class="text-xl font-semibold mb-2">Entry Meeting</h3>
                <div class="mb-4">
                    <strong>Foto Entry Meeting:</strong><br>
                    @if($pelaksanaan->entry_meeting_photo)
                        <img src="{{ asset('storage/' . $pelaksanaan->entry_meeting_photo) }}" alt="Entry Meeting Photo" class="w-48 h-48 object-cover">
                    @else
                        -
                    @endif
                </div>
                <div class="mb-4">
                    <strong>Berita Acara Entry Meeting:</strong><br>
                    @if($pelaksanaan->berita_acara_entry)
                        <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_entry) }}" target="_blank" class="text-blue-500">Download Berita Acara Entry Meeting</a>
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                <h3 class="text-xl font-semibold mb-2">Exit Meeting</h3>
                <div class="mb-4">
                    <strong>Foto Exit Meeting:</strong><br>
                    @if($pelaksanaan->exit_meeting_photo)
                        <img src="{{ asset('storage/' . $pelaksanaan->exit_meeting_photo) }}" alt="Exit Meeting Photo" class="w-48 h-48 object-cover">
                    @else
                        -
                    @endif
                </div>
                <div class="mb-4">
                    <strong>Berita Acara Exit Meeting:</strong><br>
                    @if($pelaksanaan->berita_acara_exit)
                        <a href="{{ asset('storage/' . $pelaksanaan->berita_acara_exit) }}" target="_blank" class="text-blue-500">Download Berita Acara Exit Meeting</a>
                    @else
                        -
                    @endif
                </div>

                <hr class="my-4">

                {{-- <div class="mb-4">
                    <strong>Sent to Inspektur:</strong> {{ $pelaksanaan->sent_to_inspektur ? 'Ya' : 'Tidak' }}
                </div> --}}
                <div class="mb-4">
                    <strong>Dibuat Pada:</strong> {{ $pelaksanaan->created_at->format('d-m-Y H:i') }}
                </div>
                <div class="mb-4">
                    <strong>Diperbarui Pada:</strong> {{ $pelaksanaan->updated_at->format('d-m-Y H:i') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\pelaporan\create.blade.php =====
<!-- resources/views/pelaporan/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pelaporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Pelaporan -->
                    <form action="{{ route('pelaporan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Tugas</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Tugas --</option>
                                @foreach ($tasks as $task)
                                    <option value="{{ $task->id }}"
                                        {{ old('task_id') == $task->id ? 'selected' : '' }}>
                                        {{ $task->assignment_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Upload KM 8 -->
                        <div class="mb-4">
                            <label for="km8" class="block text-sm font-medium text-gray-700">Upload KM 8</label>
                            <input type="file" name="km8" id="km8"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload KM 10 -->
                        <div class="mb-4">
                            <label for="km10" class="block text-sm font-medium text-gray-700">Upload KM 10</label>
                            <input type="file" name="km10" id="km10"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload Kertas Kerja AT -->
                        <div class="mb-4">
                            <label for="kertas_kerja_at" class="block text-sm font-medium text-gray-700">Upload Kertas
                                Kerja AT</label>
                            <input type="file" name="kertas_kerja_at" id="kertas_kerja_at"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-green-50 file:text-green-700
                                hover:file:bg-green-100">
                        </div>

                        <!-- Upload Konsep LHP -->
                        <div class="mb-4">
                            <label for="konsep_lhp" class="block text-sm font-medium text-gray-700">Upload Konsep
                                LHP (Setelah review berjenjang)</label>
                            <input type="file" name="konsep_lhp" id="konsep_lhp"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-yellow-50 file:text-yellow-700
                                hover:file:bg-yellow-100">
                        </div>

                        {{-- <!-- Upload ExposÃ© Pelaporan -->
                        <div class="mb-4">
                            <label for="expose_pelaporan" class="block text-sm font-medium text-gray-700">Upload EXPOSE
                                Pelaporan</label>
                            <input type="file" name="expose_pelaporan" id="expose_pelaporan"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-purple-50 file:text-purple-700
                                hover:file:bg-purple-100">
                        </div> --}}

                        <!-- Upload Tanggal Expose -->
                        <div class="mb-4">
                            <label for="tanggal_expose" class="block text-sm font-medium text-gray-700">Ajukan Tanggal
                                Expose</label>
                            <input type="date" name="tanggal_expose" id="tanggal_expose"
                                class="mt-1 block w-full text-sm text-gray-500 border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md"
                                value="{{ old('tanggal_expose') }}">
                        </div>


                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('pelaporan.index') }}"
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


===== resources\views\pelaporan\edit.blade.php =====
<!-- resources/views/pelaporan/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pelaporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Edit Pelaporan -->
                    <form action="{{ route('pelaporan.update', $pelaporan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($pelaporan->status !== 'Selesai')

                        <!-- Pilih Task -->
                        <div class="mb-4">
                            <label for="task_id" class="block text-sm font-medium text-gray-700">Pilih Task</label>
                            <select id="task_id" name="task_id" required
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">-- Pilih Task --</option>
                                @foreach($tasks as $task)
                                    <option value="{{ $task->id }}" {{ (old('task_id') ?? $pelaporan->task_id) == $task->id ? 'selected' : '' }}>
                                        {{ $task->nama_task }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Upload KM 8 -->
                        <div class="mb-4">
                            <label for="km8" class="block text-sm font-medium text-gray-700">Upload KM 8</label>
                            @if($pelaporan->km8)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $pelaporan->km8) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat KM 8 Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="km8" id="km8"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload KM 10 -->
                        <div class="mb-4">
                            <label for="km10" class="block text-sm font-medium text-gray-700">Upload KM 10</label>
                            @if($pelaporan->km10)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $pelaporan->km10) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat KM 10 Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="km10" id="km10"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100">
                        </div>

                        <!-- Upload Kertas Kerja AT -->
                        <div class="mb-4">
                            <label for="kertas_kerja_at" class="block text-sm font-medium text-gray-700">Upload Kertas Kerja AT</label>
                            @if($pelaporan->kertas_kerja_at)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $pelaporan->kertas_kerja_at) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat Kertas Kerja AT Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="kertas_kerja_at" id="kertas_kerja_at"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-green-50 file:text-green-700
                                hover:file:bg-green-100">
                        </div>

                        <!-- Upload Konsep LHP -->
                        <div class="mb-4">
                            <label for="konsep_lhp" class="block text-sm font-medium text-gray-700">Upload Konsep LHP</label>
                            @if($pelaporan->konsep_lhp)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $pelaporan->konsep_lhp) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat Konsep LHP Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="konsep_lhp" id="konsep_lhp"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-yellow-50 file:text-yellow-700
                                hover:file:bg-yellow-100">
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_expose" class="block text-sm font-medium text-gray-700">Tanggal Expose</label>
                            <input type="date" name="tanggal_expose" id="tanggal_expose" value="{{ old('tanggal_expose', $pelaporan->tanggal_expose) }}" 
                                class="mt-1 block w-full text-sm text-gray-500 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm">
                        </div>

                        @endif

                        <!-- Upload ExposÃ© Pelaporan -->
                        @if($pelaporan->status !== 'Menunggu Inspektur')
                        <div class="mb-4">
                            <label for="expose_pelaporan" class="block text-sm font-medium text-gray-700">Upload ExposÃ© Pelaporan</label>
                            @if($pelaporan->expose_pelaporan)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $pelaporan->expose_pelaporan) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                        <i class="fas fa-file-download mr-2"></i>
                                        Lihat ExposÃ© Saat Ini
                                    </a>
                                </div>
                            @endif
                            <input type="file" name="expose_pelaporan" id="expose_pelaporan"
                                class="mt-1 block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-purple-50 file:text-purple-700
                                hover:file:bg-purple-100">
                        </div>
                        @endif

                        <!-- Tombol Simpan dan Kembali -->
                        <div class="flex justify-end">
                            <a href="{{ route('pelaporan.index') }}"
                                class="mr-4 inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Perbarui
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\pelaporan\index.blade.php =====
<!-- resources/views/pelaporan/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pelaporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Header dan Aksi Tambahan -->
                    @if (auth()->user() && auth()->user()->role === 'admin')
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-medium text-gray-700">Pelaporan</h3>
                            <a href="{{ route('pelaporan.create') }}"
                                class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah Pelaporan
                            </a>
                        </div>
                    @endif

                    <!-- Tabel Responsif -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <!-- Header Tabel -->
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tugas</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 8</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KM 10</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kertas Kerja AT</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Konsep LHP</th>
                                    {{-- <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        EXPOSE Pelaporan</th> --}}

                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Expose</th>

                                    <!-- [DIUBAH] Status baru menambahkan 2 status: Dikonfirmasi Inspektur & Dijadwalkan Ulang -->
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>

                                    <!-- [DIUBAH] Kolom judul: dari "Alasan Tolak" -> "Catatan Jadwal" (fallback ke alasan_tolak bila belum ada kolom) -->
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Catatan Jadwal</th>

                                    <!-- [DIUBAH] Aksi untuk Inspektur: "Konfirmasi Jadwal" & "Ubah Jadwal" -->
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>

                            <!-- Body Tabel -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pelaporans as $pelaporan)
                                    <tr class="hover:bg-gray-100">
                                        <!-- No -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($pelaporans->currentPage() - 1) * $pelaporans->perPage() }}
                                        </td>

                                        <!-- Task -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->task->assignment_type }}
                                        </td>

                                        <!-- KM 8 -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->km8)
                                                <a href="{{ asset('storage/' . $pelaporan->km8) }}" target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat KM 8
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- KM 10 -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->km10)
                                                <a href="{{ asset('storage/' . $pelaporan->km10) }}" target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat KM 10
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Kertas Kerja AT -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->kertas_kerja_at)
                                                <a href="{{ asset('storage/' . $pelaporan->kertas_kerja_at) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat Kertas Kerja AT
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- Konsep LHP -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->konsep_lhp)
                                                <a href="{{ asset('storage/' . $pelaporan->konsep_lhp) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat Konsep LHP
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td>

                                        <!-- ExposÃ© Pelaporan -->
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($pelaporan->expose_pelaporan)
                                                <a href="{{ asset('storage/' . $pelaporan->expose_pelaporan) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                                    <i class="fas fa-file-download mr-2"></i>
                                                    Lihat EXPOSE
                                                </a>
                                            @else
                                                <span class="text-gray-500">-</span>
                                            @endif
                                        </td> --}}

                                        <!-- Tanggal Expose -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $pelaporan->tanggal_expose ? \Carbon\Carbon::parse($pelaporan->tanggal_expose)->format('d M Y') : '-' }}
                                        </td>

                                        <!-- [DIUBAH] Badge Status: tambahkan 2 status baru -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @php
                                                $status = $pelaporan->status;
                                                $badge = match ($status) {
                                                    'Menunggu Inspektur' => 'bg-yellow-100 text-yellow-800',
                                                    // [DITAMBAHKAN] status baru
                                                    'Dikonfirmasi Inspektur' => 'bg-green-100 text-green-800',
                                                    'Dijadwalkan Ulang' => 'bg-blue-100 text-blue-800',
                                                    // fallback untuk status lama agar tetap terbaca
                                                    'Acc' => 'bg-green-100 text-green-800',
                                                    'Ditolak', 'Ditolak Inspektur' => 'bg-red-100 text-red-800',
                                                    default => 'bg-gray-100 text-gray-800',
                                                };
                                            @endphp
                                            <span
                                                class="px-2 py-1 text-xs font-medium rounded-full {{ $badge }}">
                                                {{ ucfirst($status) }}
                                            </span>
                                        </td>

                                        <!-- [DIUBAH] Catatan Jadwal: tampilkan catatan_jadwal bila ada, jika tidak fallback ke alasan_tolak -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            {{ $pelaporan->catatan_jadwal ?? ($pelaporan->alasan_tolak ?? '-') }}
                                        </td>

                                        <!-- Aksi -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @if (auth()->user()->role === 'admin')
                                                @if (in_array($pelaporan->status, [
                                                        'Menunggu Inspektur',
                                                        'Ditolak',
                                                        'Acc',
                                                        'Ditolak Inspektur',
                                                        'Dikonfirmasi Inspektur',
                                                        'Dijadwalkan Ulang',
                                                    ]))
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('pelaporan.edit', $pelaporan->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                                        <i class="fas fa-edit mr-2"></i>
                                                        Edit
                                                    </a>
                                                    <!-- Tombol Hapus -->
                                                    <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}"
                                                        method="POST" class="inline-block"
                                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            <i class="fas fa-trash-alt mr-2"></i>
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            @elseif (auth()->user()->role === 'inspektur')
                                                @if ($pelaporan->status === 'Menunggu Inspektur')
                                                    <!-- [DIUBAH] Tombol ACC -> Konfirmasi Jadwal -->
                                                    <form
                                                        action="{{ route('inspektur.pelaporan.confirm', $pelaporan->id) }}"
                                                        method="POST" class="inline-block">
                                                        @csrf
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                                            onclick="return confirm('Konfirmasi jadwal expose tanpa perubahan tanggal?')">
                                                            <i class="fas fa-check mr-2"></i>
                                                            Konfirmasi Jadwal
                                                        </button>
                                                    </form>

                                                    <!-- [DIUBAH] Tombol Tolak -> Ubah Jadwal (modal) -->
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-2 bg-amber-600 text-white text-sm font-medium rounded-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 ml-2"
                                                        onclick="document.getElementById('res-{{ $pelaporan->id }}').showModal()">
                                                        <i class="fas fa-calendar-alt mr-2"></i>
                                                        Ubah Jadwal
                                                    </button>

                                                    <!-- [DITAMBAHKAN] Modal Ubah Jadwal -->
                                                    <dialog id="res-{{ $pelaporan->id }}" class="rounded-lg p-0">
                                                        <form method="POST"
                                                            action="{{ route('inspektur.pelaporan.reschedule', $pelaporan->id) }}"
                                                            class="p-4 w-96">
                                                            @csrf
                                                            <h3 class="font-semibold mb-3">Ubah Jadwal Expose</h3>

                                                            <label class="block text-sm">Tanggal baru</label>
                                                            <input type="date" name="tanggal_expose_baru"
                                                                class="mt-1 w-full border-gray-300 rounded-md"
                                                                required>

                                                            <label class="block text-sm mt-3">Catatan
                                                                (opsional)
                                                            </label>
                                                            <input type="text" name="catatan_jadwal"
                                                                class="mt-1 w-full border-gray-300 rounded-md"
                                                                placeholder="Alasan perubahanâ€¦">

                                                            <div class="mt-4 flex justify-end gap-2">
                                                                <button type="button"
                                                                    onclick="this.closest('dialog').close()"
                                                                    class="px-3 py-2 border rounded-md">Batal</button>
                                                                <button
                                                                    class="px-3 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </dialog>
                                                @endif
                                            @endif
                                        </td>

                                        <!-- [DIHAPUS] Modal Tolak lama & script open/close (sudah tidak dipakai) -->
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada pelaporan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind (tema putih sudah di-override global) -->
                    <div class="mt-6">
                        {{ $pelaporans->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Integrasi FontAwesome untuk Ikon Download -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pHg+2V8clVjoTjvJkZGJZmS98fLAV6qKQtwEyn7VEl8dvU+8MznRycAI+pNnLOfRlGxhQcaYDFs/jX1H5Z1vQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>

===== resources\views\preparations\admin_index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Persiapan Tugas - Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Header dan Aksi Tambahan -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-700">Persiapan Tugas</h3>
                        {{-- <!-- Tombol Refresh atau Aksi Lainnya (Opsional) -->
                        <a href="{{ route('admin.preparations') }}"
                            class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.836 0H20V4h-4v5h-1.582a9 9 0 11-7.916 0H4" />
                            </svg>
                            Refresh
                        </a> --}}
                    </div>

                    <!-- Tabel Responsif -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <!-- Header Tabel -->
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Tugas
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        PKA 
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Formulir KM 4 
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <!-- Body Tabel -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($preparations as $preparation)
                                    <tr class="hover:bg-gray-100">
                                        <!-- No -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                            {{ $loop->iteration + ($preparations->currentPage() - 1) * $preparations->perPage() }}
                                        </td>

                                        <!-- Nama Tugas -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $preparation->spt->task->assignment_type ?? 'N/A' }}
                                        </td>

                                        <!-- PKA Path -->
                                        <!-- PKA Path -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($preparation->pka_path)
                                                <a href="{{ asset('storage/' . $preparation->pka_path) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                                    </svg>
                                                    Download PKA
                                                </a>
                                            @else
                                                <span class="text-gray-500">Tidak Ada File</span>
                                            @endif
                                        </td>

                                        <!-- Formulir KM 4 Path -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if ($preparation->formulir_km4_path)
                                                <a href="{{ asset('storage/' . $preparation->formulir_km4_path) }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                                    </svg>
                                                    Download Formulir KM 4
                                                </a>
                                            @else
                                                <span class="text-gray-500">Tidak Ada File</span>
                                            @endif
                                        </td>


                                        <!-- Status -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                            @php
                                                // Definisikan warna berdasarkan status
                                                $statusColors = [
                                                    'Pending' => 'bg-yellow-100 text-yellow-800',
                                                    'Diterima' => 'bg-green-100 text-green-800',
                                                    'Ditolak' => 'bg-red-100 text-red-800',
                                                    // Tambahkan status lain jika diperlukan
                                                ];
                                                $statusClass =
                                                    $statusColors[$preparation->status] ?? 'bg-gray-100 text-gray-800';
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ $preparation->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada persiapan SPT.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination dengan Tailwind -->
                    <div class="mt-6">
                        {{ $preparations->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Integrasi FontAwesome untuk Ikon Download -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pHg+2V8clVjoTjvJkZGJZmS98fLAV6qKQtwEyn7VEl8dvU+8MznRycAI+pNnLOfRlGxhQcaYDFs/jX1H5Z1vQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>

===== resources\views\preparations\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Buat Persiapan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Container yang Lebih Lebar -->
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-6 px-6 py-4 rounded-md bg-green-100 text-green-700 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-6 px-6 py-4 rounded-md bg-red-100 text-red-700 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 mt-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulir Persiapan SPT -->
                    <form action="{{ route('preparations.store', $spt->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        <!-- Informasi SPT -->
                        {{-- <div class="bg-gray-50 p-6 rounded-md shadow-inner">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6">Informasi SPT</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nomor SPT -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Nomor SPT</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $spt->id }}</p>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Tanggal</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($spt->tanggal)->format('d-m-Y') }}</p>
                                    </div>
                                </div>

                                <!-- Nama Tugas -->
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Nama Tugas</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ optional($spt->task)->assignment_type }}</p>
                                    </div>
                                </div>

                                <!-- Deskripsi -->
                                <div class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Status</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ optional($spt->task)->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Upload PKA -->
                        <div>
                            <label for="pka" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload PKA <span class="text-red-500">*</span>
                            </label>
                        
                            <div class="flex items-center">
                                <label for="pka"
                                    class="flex items-center justify-center px-3 py-1.5 bg-blue-600 text-white rounded-md shadow-sm cursor-pointer hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                    </svg>
                                    Pilih File
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="pka_filename">Tidak ada file dipilih</span>
                            </div>
                        
                            <input type="file" name="pka" id="pka" accept=".pdf,.doc,.docx" class="hidden" required>
                        
                            <!-- Catatan mengenai unggahan file -->
                            <p class="mt-2 text-sm text-gray-600">
                                File yang diizinkan adalah PDF, DOC, dan DOCX dengan ukuran maksimal 5MB.
                            </p>
                        </div>
                        

                        <!-- Upload Formulir KM 4 -->
                        <div>
                            <label for="formulir_km4" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload Formulir KM 4 <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center">
                                <label for="formulir_km4"
                                    class="flex items-center justify-center px-3 py-1.5 bg-blue-600 text-white rounded-md shadow-sm cursor-pointer hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
                                    </svg>
                                    Pilih File
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="formulir_km4_filename">Tidak ada file
                                    dipilih</span>
                            </div>
                            <input type="file" name="formulir_km4" id="formulir_km4" accept=".pdf,.doc,.docx"
                                class="hidden" required>
                                <!-- Catatan mengenai unggahan file -->
                            <p class="mt-2 text-sm text-gray-600">
                                File yang diizinkan adalah PDF, DOC, dan DOCX dengan ukuran maksimal 5MB.
                            </p>
                        </div>

                        <!-- Tombol Submit dan Batal -->
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-3 bg-green-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Kirim ke Inspektur
                            </button>
                            <a href="{{ route('spt.index') }}"
                                class="inline-flex items-center px-6 py-3 bg-gray-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Menampilkan Nama File yang Dipilih -->
    <script>
        document.getElementById('pka').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'Tidak ada file dipilih';
            document.getElementById('pka_filename').textContent = fileName;
        });

        document.getElementById('formulir_km4').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'Tidak ada file dipilih';
            document.getElementById('formulir_km4_filename').textContent = fileName;
        });
    </script>
</x-app-layout>

===== resources\views\preparations\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Persiapan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="w-1/12 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th class="w-3/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Tugas
                                    </th>
                                    <th class="w-2/12 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <th class="w-2/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="w-4/12 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($preparations as $preparation)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ optional($preparation->spt->task)->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            {{ \Carbon\Carbon::parse($preparation->spt->tanggal)->format('d-m-Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $preparation->status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex space-x-2 justify-center">
                                                <a href="{{ route('inspektur.preparations.show', $preparation->id) }}"
                                                   class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition"
                                                   aria-label="Lihat Detail">
                                                    <!-- Ikon Detail -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.974 3.94-4.764 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Lihat Detail
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-center">
                                            Tidak ada persiapan SPT yang pending.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $preparations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\preparations\show.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Detail Persiapan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-8">
                    <!-- Informasi SPT -->
                    {{-- <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Informasi Persiapan Tugas</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Nomor SPT -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Nomor SPT</p>
                                    <p class="text-lg font-semibold text-gray-800">{{ $preparation->spt->id }}</p>
                                </div>
                            </div>

                            <!-- Nama Tugas -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Nama Tugas</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ optional($preparation->spt->task)->assignment_type }}</p>
                                </div>
                            </div>

                            <!-- Tanggal -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 9h10m-10 4h10m-10 4h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Tanggal</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ \Carbon\Carbon::parse($preparation->spt->tanggal)->format('d-m-Y') }}</p>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-indigo-600 mr-3 flex-shrink-0 mt-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H16V20H8V16Z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Deskripsi</p>
                                    <p class="text-lg font-semibold text-gray-800">
                                        {{ optional($preparation->spt->task)->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- File yang Diunggah -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">File yang Diunggah</h3>
                        <div class="space-y-4">
                            @if ($preparation->pka_path)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-3"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <a href="{{ asset('storage/' . $preparation->pka_path) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Formulir PKA
                                    </a>
                                </div>
                            @endif

                            @if ($preparation->formulir_km4_path)
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-3"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <a href="{{ asset('storage/' . $preparation->formulir_km4_path) }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Formulir KM 4
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Status Persiapan -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Status Persiapan</h3>
                        <div class="space-y-2">
                            <p>
                                <strong>Status:</strong>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                    @if ($preparation->status === 'Pending') bg-yellow-100 text-yellow-800
                                    @elseif($preparation->status === 'Diterima')
                                        bg-green-100 text-green-800
                                    @elseif($preparation->status === 'Ditolak')
                                        bg-red-100 text-red-800
                                    @else
                                        bg-gray-100 text-gray-800 @endif
                                ">
                                    {{ $preparation->status }}
                                </span>
                            </p>
                            @if ($preparation->note)
                                <p><strong>Catatan:</strong> <span
                                        class="text-gray-700">{{ $preparation->note }}</span></p>
                            @endif
                        </div>
                    </div>

                    <!-- Aksi Persetujuan -->
                    @if ($preparation->status === 'Pending')
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Tindakan</h3>
                            <div class="flex space-x-4">
                                <!-- Tombol Setujui -->
                                <form action="{{ route('inspektur.preparations.approve', $preparation->id) }}"
                                    method="POST" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition"
                                        onclick="return confirm('Apakah Anda yakin ingin menyetujui persiapan ini?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Setujui
                                    </button>
                                </form>

                                <!-- Tombol Tolak -->
                                <button type="button"
                                    class="flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition"
                                    onclick="toggleRejectModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Tolak
                                </button>
                            </div>
                        </div>

                        <!-- Modal Tolak -->
                        <div id="rejectModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                            <div class="flex items-center justify-center min-h-screen px-4">
                                <!-- Overlay -->
                                <div class="fixed inset-0 bg-gray-500 opacity-75"></div>

                                <!-- Modal Content -->
                                <div
                                    class="bg-white rounded-lg shadow-xl transform transition-all sm:max-w-lg sm:w-full z-20">
                                    <div class="p-6">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-full">
                                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tolak Persiapan
                                                    SPT</h3>
                                                <form
                                                    action="{{ route('inspektur.preparations.reject', $preparation->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="mb-4">
                                                        <label for="note"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Alasan Penolakan <span class="text-red-500">*</span>
                                                        </label>
                                                        <textarea name="note" id="note" rows="4"
                                                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                                                            required></textarea>
                                                    </div>
                                                    <div class="flex justify-end space-x-2">
                                                        <button type="button" onclick="toggleRejectModal()"
                                                            class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                                            Batal
                                                        </button>
                                                        <button type="submit"
                                                            class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            Tolak
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Script untuk Toggle Modal Tolak -->
        <script>
            function toggleRejectModal() {
                const modal = document.getElementById('rejectModal');
                modal.classList.toggle('hidden');
            }
        </script>
</x-app-layout>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\sekretaris\penugasan\index.blade.php =====
@include('admin.penugasan.index') 

===== resources\views\sekretaris\spt\upload.blade.php =====
<!-- resources/views/sekretaris/spt/upload.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload SPT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Alpine.js untuk mengelola state modal atau fitur interaktif lainnya -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Judul Form -->
                    <h3 class="text-2xl font-semibold mb-6">Upload Surat Perintah Tugas (SPT) untuk Tugas: {{ $task->assignment_type }}</h3>

                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Upload SPT -->
                    <form action="{{ route('sekretaris.spt.store', $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Field Task ID (Disembunyikan) -->
                        <input type="hidden" name="task_id" value="{{ $task->id }}">

                        <!-- Input File SPT -->
                        <div class="mb-4">
                            <label for="spt_file" class="block text-gray-700">Pilih File SPT (PDF, DOC, DOCX, maksimal 5MB)</label>
                            <input type="file" name="spt_file" id="spt_file" accept=".pdf,.doc,.docx" required
                                class="mt-2 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md shadow hover:bg-purple-700 transition">
                                Unggah SPT
                            </button>
                        </div>
                    </form>

                    <!-- Tombol Kembali -->
                    <div class="mt-4">
                        <a href="{{ route('pertimbangan') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md shadow hover:bg-gray-700 transition">
                            Kembali ke Daftar Tugas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\task\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Tugas') }}
      </h2>
    </x-slot>
  
    <div class="py-8">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
  
            <form method="POST" action="{{ Auth::user()->role === 'admin' ? route('task.update', $task->id) : route('sekretaris.task.update', $task->id) }}" class="space-y-6">
              @csrf
              @method('PUT')
  
              {{-- Jenis Penugasan --}}
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Penugasan</label>
                <input type="text" name="assignment_type" class="block w-full border-gray-300 rounded-md"
                       value="{{ old('assignment_type', $task->assignment_type) }}">
                @error('assignment_type') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
              </div>
  
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Penanggung Jawab (tidak dikunci) --}}
                <div>
                  <label class="block text-sm mb-1">Penanggung Jawab</label>
                  <select name="penanggung_jawab" class="w-full border-gray-300 rounded-md">
                    @foreach($penanggungJawab as $o)
                      <option value="{{ $o->id }}" @selected(old('penanggung_jawab', $tcCurrent['penanggung_jawab'] ?? null) == $o->id)>
                        {{ $o->nama }}
                      </option>
                    @endforeach
                  </select>
                  @error('penanggung_jawab') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
  
                {{-- Wakil Penanggung Jawab (tidak dikunci) --}}
                <div>
                  <label class="block text-sm mb-1">Wakil Penanggung Jawab</label>
                  <select name="wakil_penanggung_jawab" class="w-full border-gray-300 rounded-md">
                    @foreach($wakilPenanggungJawab as $o)
                      <option value="{{ $o->id }}" @selected(old('wakil_penanggung_jawab', $tcCurrent['wakil_penanggung_jawab'] ?? null) == $o->id)>
                        {{ $o->nama }}
                      </option>
                    @endforeach
                  </select>
                  @error('wakil_penanggung_jawab') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
  
                {{-- Ketua Tim (tampilkan ðŸ”’ bila terkunci) --}}
                <div>
                  <label class="block text-sm mb-1">Ketua Tim</label>
                  <select name="ketua_tim" class="w-full border-gray-300 rounded-md">
                    @foreach($ketuaTim as $o)
                      @php
                        $isLocked    = $lockedIds->contains((string)$o->id);
                        $isSelectedK = (string)old('ketua_tim', $tcCurrent['ketua_tim'] ?? '') === (string)$o->id;
                      @endphp
                      @if($isSelectedK)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('ketua_tim') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
  
                {{-- Jumlah Hari --}}
                <div>
                  <label class="block text-sm mb-1">Jumlah Hari</label>
                  <input type="number" name="number_of_days" min="1" class="block w-full border-gray-300 rounded-md"
                         value="{{ old('number_of_days', $task->number_of_days) }}">
                  @error('number_of_days') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
              </div>
  
              {{-- Multiple (tampilkan ðŸ”’ bila terkunci) --}}
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                {{-- Pengendali Teknis --}}
                @php
                  $selectedPengtek = collect(old('pengendali_teknis', $tcCurrent['pengendali_teknis'] ?? []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Pengendali Teknis</label>
                  <select name="pengendali_teknis[]" id="pengendali_teknis" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($pengendaliTeknis as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedPengtek->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('pengendali_teknis') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
  
                {{-- Anggota Tim --}}
                @php
                  $selectedAnggota = collect(old('anggota_tim', $tcCurrent['anggota_tim'] ?? []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Anggota Tim</label>
                  <select name="anggota_tim[]" id="anggota_tim" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($anggotaTim as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedAnggota->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('anggota_tim') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
  
                {{-- Penunjang --}}
                @php
                  $selectedPenunjang = collect(old('penunjang', $tcCurrent['penunjang'] ?? []))->map(fn($v)=>(string)$v);
                @endphp
                <div>
                  <label class="block text-sm mb-1">Penunjang</label>
                  <select name="penunjang[]" id="penunjang" multiple class="w-full border-gray-300 rounded-md">
                    @foreach($penunjang as $o)
                      @php
                        $isLocked = $lockedIds->contains((string)$o->id);
                        $isSel    = $selectedPenunjang->contains((string)$o->id);
                      @endphp
                      @if($isSel)
                        <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                      @elseif($isLocked)
                        <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}</option>
                      @else
                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('penunjang') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>
              </div>
  
              <div class="flex justify-end gap-3 pt-2">
                <a href=""{{ Auth::user()->role === 'admin' ? route('task.index') : route('sekretaris.task.view') }} class="px-4 py-2 rounded-md bg-gray-600 text-white">Batal</a>
                <button class="px-5 py-2 rounded-md bg-blue-600 text-white">Update Tugas</button>
              </div>
            </form>
  
            {{-- Tom Select --}}
            <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
            <script>
              document.addEventListener('DOMContentLoaded', function () {
                const common = { plugins: ['remove_button'], persist: false, create: false };
                new TomSelect('#pengendali_teknis', common);
                new TomSelect('#anggota_tim', common);
                new TomSelect('#penunjang', common);
              });
            </script>
  
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  

===== resources\views\task\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Tugas') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ isModalOpen: false, rejectTaskId: null }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="mb-4 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Penugasan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Komposisi Tim
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Hari
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alasan Penolakan
                                    </th>
                                    <th
                                        class="w-1/5 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tasks as $task)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="border border-gray-300 rounded-lg p-4 bg-gray-50 shadow-sm">
                                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Komposisi Tim</h3>
                                                <table class="table-auto w-full text-left text-sm border border-gray-300">
                                                    <tbody>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Wakil Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['wakil_penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Pengendali Teknis:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['pengendali_teknis']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['pengendali_teknis'] as $pengendali)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $pengendali }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Ketua Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['ketua_tim'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Anggota Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['anggota_tim']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['anggota_tim'] as $anggota)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $anggota }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penunjang:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['penunjang']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['penunjang'] as $penunjang)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $penunjang }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $task->number_of_days }} Hari
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($task->status === 'pending')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                                    {{ __('Pending') }}
                                                </span>
                                            @elseif ($task->status === 'Disetujui Sekretaris')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    {{ __('Disetujui Sekretaris') }}
                                                </span>
                                            @elseif ($task->status === 'Disetujui Inspektur')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    {{ __('Disetujui Inspektur') }}
                                                </span>
                                            @elseif ($task->status === 'Ditolak Sekretaris')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                    {{ __('Ditolak Sekretaris') }}
                                                </span>
                                            @elseif ($task->status === 'Di Setujui Inspektur')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    {{ __('Disetujui Inspektur') }}
                                                </span>
                                            @elseif ($task->status === 'Ditolak Inspektur')
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                    {{ __('Ditolak Inspektur') }}
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                    {{ __('Ditolak') }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            @if (
                                                ($task->status === 'Ditolak Sekretaris' || $task->status === 'Ditolak Inspektur') &&
                                                    !empty($task->rejection_reason))
                                                {{ $task->rejection_reason }}
                                            @else
                                                -
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if (
                                                $task->status === 'pending' ||
                                                    $task->status === 'rejected' ||
                                                    $task->status === 'Ditolak Sekretaris' ||
                                                    $task->status === 'Ditolak Inspektur')
                                                <div class="flex justify-center space-x-4">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ Auth::user()->role === 'admin' ? route('task.edit', $task->id) : route('sekretaris.task.edit', $task->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                                                        Edit
                                                    </a>

                                                    <!-- Tombol Hapus dengan Konfirmasi -->
                                                    <form action="{{ Auth::user()->role === 'admin' ? route('task.destroy', $task->id) : route('sekretaris.task.destroy', $task->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md shadow hover:bg-red-700 transition">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            @else
                                                <!-- Menggunakan Ikon dan Teks "Aksi Tidak Tersedia" -->
                                                <div class="flex items-center justify-center text-gray-500">
                                                    <!-- Icon Non-Aktif, misalnya ikon lock dari Heroicons -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5 8V6a5 5 0 0110 0v2h1a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1v-8a1 1 0 011-1h1zm2-2a3 3 0 116 0v2H7V6zm8 4v6H5v-6h10z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Aksi Tidak Tersedia</span>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\task\pertimbangan.blade.php =====
<!-- resources/views/tasks/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pertimbangan Tugas Sekretaris') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Alpine.js untuk mengelola state modal -->
        <div x-data="{ isModalOpen: false, rejectTaskId: null }" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Pesan Error -->
                    @if (session('error'))
                        <div class="mb-4 px-4 py-3 rounded-md bg-red-100 text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Penugasan
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Komposisi Tim
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Hari
                                    </th>
                                    <th class="w-1/4 px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tasks as $task)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $task->assignment_type }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            <div class="border border-gray-300 rounded-lg p-4 bg-gray-50 shadow-sm">
                                                <h3 class="text-sm font-semibold text-gray-800 mb-2">Komposisi Tim</h3>
                                                <table class="table-auto w-full text-left text-sm border border-gray-300">
                                                    <tbody>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Wakil Penanggung Jawab:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['wakil_penanggung_jawab'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Pengendali Teknis:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['pengendali_teknis']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['pengendali_teknis'] as $pengendali)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $pengendali }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Ketua Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                {{ $task->team_composition['ketua_tim'] ?? '-' }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Anggota Tim:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['anggota_tim']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['anggota_tim'] as $anggota)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $anggota }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-gray-300">
                                                            <th class="border border-gray-300 px-2 py-1 text-gray-600">Penunjang:</th>
                                                            <td class="border border-gray-300 px-2 py-1 text-gray-800">
                                                                @if (!empty($task->team_composition['penunjang']))
                                                                    <ul class="list-none pl-0">
                                                                        @foreach ($task->team_composition['penunjang'] as $penunjang)
                                                                            <li class="bg-gray-100 rounded px-2 py-1 my-1 border border-gray-300">
                                                                                {{ $penunjang }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <span>-</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $task->number_of_days }} Hari
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if ($task->status === 'pending')
                                                <div class="flex justify-center space-x-4">
                                                    <!-- Tombol Acc -->
                                                    <a href="{{ route('task.sekretaris.accept', $task->id) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md shadow hover:bg-green-700 transition">
                                                        Acc
                                                    </a>
                                                    
                                                    <!-- Tombol Tolak, akan membuka modal -->
                                                    <button 
                                                        @click="isModalOpen = true; rejectTaskId = {{ $task->id }}" 
                                                        type="button" 
                                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md shadow hover:bg-red-700 transition">
                                                        Tolak
                                                    </button>
                                                </div>
                                            @elseif ($task->status === 'Disetujui Inspektur')
                                                @if ($task->spt->isEmpty()) <!-- Memeriksa apakah SPT tidak ada -->
                                                    <!-- Tombol Buat SPT -->
                                                    <div class="flex justify-center space-x-4">
                                                        <a href="{{ route('sekretaris.spt.upload', $task->id) }}"
                                                            class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-md shadow hover:bg-purple-700 transition">
                                                            Unggah SPT
                                                        </a>
                                                        <!-- Tombol Buat PDF Komposisi Tim -->
                                                        <a href="{{ route('task.sekretaris.create_pdf', $task->id) }}"
                                                            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                                                            Buat SPT
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="flex items-center justify-center text-gray-500">
                                                        <span>SPT Sudah Dibuat</span>
                                                    </div>
                                                @endif
                                            @else
                                                <!-- Aksi Tidak Tersedia Jika Sudah Acc/Tolak -->
                                                <div class="flex items-center justify-center text-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5 8V6a5 5 0 0110 0v2h1a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1v-8a1 1 0 011-1h1zm2-2a3 3 0 116 0v2H7V6zm8 4v6H5v-6h10z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span>Aksi Tidak Tersedia</span>
                                                </div>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>

                <!-- Modal untuk menolak tugas -->
                <div x-show="isModalOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center px-4">
                    <!-- Background Overlay -->
                    <div @click="isModalOpen = false" class="absolute inset-0 bg-black opacity-50 transition-opacity">
                    </div>

                    <!-- Modal Content -->
                    <div class="bg-white rounded-lg shadow-lg z-10 w-full max-w-md mx-auto p-6 transform transition-all"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Alasan Penolakan</h3>
                        <form method="POST" action="{{ route('task.sekretaris.reject') }}">
                            @csrf
                            <input type="hidden" name="task_id" :value="rejectTaskId">
                            <div class="mb-4">
                                <label for="rejection_reason"
                                    class="block text-sm font-medium text-gray-700">Alasan</label>
                                <textarea id="rejection_reason" name="rejection_reason" rows="3" required
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Masukkan alasan penolakan"></textarea>
                                @error('rejection_reason')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end space-x-4">
                                <button type="button" @click="isModalOpen = false"
                                    class="px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition">
                                    Tolak
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\task\planning.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perencanaan Tugas') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Error jika ada konflik --}}
                    @if ($errors->has('anggota'))
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                            {{ $errors->first('anggota') }}
                        </div>
                    @endif

                    <form method="POST"
                        action="{{ Auth::user()->role === 'admin' ? route('task.store') : route('sekretaris.task.store') }}"
                        class="space-y-6">
                        @csrf

                        {{-- Jenis Penugasan --}}
                        <div>
                            <label class="block text-sm mb-1">Jenis Penugasan</label>
                            <input type="text" name="assignment_type" class="block w-full border-gray-300 rounded-md"
                                value="{{ old('assignment_type') }}">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            {{-- Penanggung Jawab --}}
                            <div>
                                <label class="block text-sm mb-1">Penanggung Jawab</label>
                                <select name="penanggung_jawab" class="w-full border-gray-300 rounded-md">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($penanggungJawab as $o)
                                        <option value="{{ $o->id }}" @selected(old('penanggung_jawab') == $o->id)>
                                            {{ $o->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Wakil Penanggung Jawab --}}
                            <div>
                                <label class="block text-sm mb-1">Wakil Penanggung Jawab</label>
                                <select name="wakil_penanggung_jawab" class="w-full border-gray-300 rounded-md">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($wakilPenanggungJawab as $o)
                                        <option value="{{ $o->id }}" @selected(old('wakil_penanggung_jawab') == $o->id)>
                                            {{ $o->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Ketua Tim --}}
                            <div>
                                <label class="block text-sm mb-1">Ketua Tim</label>
                                <select name="ketua_tim" class="w-full border-gray-300 rounded-md">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($ketuaTim as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSelectedK = (string) old('ketua_tim') === (string) $o->id;
                                        @endphp
                                        @if ($isSelectedK)
                                            <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Jumlah Hari --}}
                            <div>
                                <label class="block text-sm mb-1">Jumlah Hari</label>
                                <input type="number" name="number_of_days" min="1"
                                    class="block w-full border-gray-300 rounded-md"
                                    value="{{ old('number_of_days') }}">
                            </div>
                        </div>

                        {{-- Multiple select (3 kolom) --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            {{-- Pengendali Teknis --}}
                            @php
                                $selectedPengtek = collect(old('pengendali_teknis', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Pengendali Teknis</label>
                                <select name="pengendali_teknis[]" id="pengendali_teknis" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($pengendaliTeknis as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSel = $selectedPengtek->contains((string) $o->id);
                                        @endphp
                                        @if ($isSel)
                                            <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Anggota Tim --}}
                            @php
                                $selectedAnggota = collect(old('anggota_tim', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Anggota Tim</label>
                                <select name="anggota_tim[]" id="anggota_tim" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($anggotaTim as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSel = $selectedAnggota->contains((string) $o->id);
                                        @endphp
                                        @if ($isSel)
                                            <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            {{-- Penunjang --}}
                            @php
                                $selectedPenunjang = collect(old('penunjang', []))->map(fn($v) => (string) $v);
                            @endphp
                            <div>
                                <label class="block text-sm mb-1">Penunjang</label>
                                <select name="penunjang[]" id="penunjang" multiple
                                    class="w-full border-gray-300 rounded-md">
                                    @foreach ($penunjang as $o)
                                        @php
                                            $isLocked = $lockedIds->contains((string) $o->id);
                                            $isSel = $selectedPenunjang->contains((string) $o->id);
                                        @endphp
                                        @if ($isSel)
                                            <option value="{{ $o->id }}" selected>{{ $o->nama }}</option>
                                        @elseif($isLocked)
                                            <option value="{{ $o->id }}" disabled>ðŸ”’ {{ $o->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-end gap-3 pt-2">
                            <a href="{{ route('task.index') }}"
                                class="px-4 py-2 rounded-md bg-gray-600 text-white">Batal</a>
                            <button class="px-5 py-2 rounded-md bg-blue-600 text-white">Simpan Tugas</button>
                        </div>
                    </form>

                    {{-- Tom Select --}}
                    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const common = {
                                plugins: ['remove_button'],
                                persist: false,
                                create: false
                            };
                            new TomSelect('#pengendali_teknis', common);
                            new TomSelect('#anggota_tim', common);
                            new TomSelect('#penunjang', common);
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\tasks\pdf\team_composition_with_data.blade.php =====
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Perintah Tugas</title>
        <style>
            body {
                font-family: "Times New Roman", serif;
                font-size: 12pt;
                margin: 30px;
            }

            .container {
                width: 100%;
            }

            .header {
                text-align: center;
            }

            .content {
                margin-top: 20px;
            }

            .content h2 {
                text-align: center;
                text-decoration: underline;
                font-size: 15px;
                margin-bottom: 5px;
            }

            .content table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .content th,
            .content td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            .footer-note {
                text-align: left;
                font-style: italic;
                margin-top: 15px;
            }

            .signature {
                width: 100%;
                margin-top: 30px;
            }

            .signature td {
                text-align: center;
            }

            .signature .name {
                font-weight: bold;
                text-decoration: underline;
                white-space: nowrap;
                /* Mencegah teks berpindah baris */
            }


            .signature .nip {
                font-size: 12pt;
            }

            .signature p {
                margin: 0;
                /* Menghapus margin default */
                padding: 0;
                /* Menghapus padding default */
                line-height: 1;
                /* Mengurangi jarak antar baris */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- Header -->
            <table style="width: 100%;">
                <tr>
                    <td style="width: 100px; text-align: center;">
                        <img src="{{ public_path('images/LOGO_KOTA_GORONTALO.png') }}" style="width: 80px;">

                    </td>
                    <td style="text-align: center;">
                        <h2 style="margin: 0;">PEMERINTAH KOTA GORONTALO</h2>
                        <h2 style="margin: 0;">INSPEKTORAT</h2>
                        <p style="margin: 0;">Jl. Achmad Nadjamudin Telepon (0435) 821012 Kota Gorontalo</p>
                    </td>
                </tr>
            </table>
            <hr style="border-top: 5px solid black;">

            <!-- Content -->
            <div class="content">
                <h2 style="margin-top: -10px;">SURAT PERINTAH TUGAS</h2>
                <p>Nomor: {{ $nomor }}</p>
                <p>Tanggal: {{ $tanggal }}</p>
                <p>Inspektur Kota Gorontalo Menugaskan Kepada: {{ $kepada }}</p>

                <!-- Tabel Petugas -->
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: center; width: 10%;">No</th>
                            <th style="width: 45%;">Nama</th>
                            <th style="width: 45%;">Jabatan Dalam Tim</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $index => $p)
                            <tr>
                                <td style="text-align: center;">{{ $index + 1 }}</td>
                                <td>{{ $p['nama'] }}</td>
                                <td>{{ $p['jabatan'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p>Maksud: {{ $maksud }}</p>
                <p>Waktu: {{ $waktu }}</p>

                <hr style="border-top: 2px solid black; margin-top: 30px;">

                <!-- Footer Note -->
                <div class="footer-note">
                    <p>
                        Layanan Pengaduan/Website: <br>
                        Apabila Pegawai Inspektorat Kota Gorontalo menerima / meminta gratifikasi dan suap,
                        dapat dilaporkan melalui mekanisme penyampaian pengaduan pada
                        <a href="http://inspektorat.gorontalokota.go.id">wbs.inspektorat.gorontalokota.go.id</a>
                    </p>
                </div>

                <!-- Ketentuan -->
                <div style="font-size: 12pt; text-align: justify; margin-top: 10px;">
                    <p><strong>Ketentuan :</strong></p>
                    <ol>
                        <li>Biaya perjalanan dinas sehubungan dengan penugasan tersebut menjadi beban Inspektorat Kota
                            Gorontalo TA. 2025;</li>
                        <li>Pegawai Inspektorat Kota Gorontalo dalam melaksanakan tugas tidak menerima / meminta
                            gratifikasi dan suap.</li>
                    </ol>
                </div>
            </div>

            <!-- Tanda Tangan -->
            <table class="signature">
                <tr>
                    <td style="width: 60%;"></td>
                    <td style="text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">INSPEKTUR</p>
                        <br><br><br><br><br> <!-- Untuk jarak tanda tangan -->
                        <p class="name">MOHAMAD TAUFIQ DUNGGIO, SE</p>
                        <p class="nip">PEMBINA UTAMA MUDA</p>
                        <p class="nip">NIP. 19660712 200003 1 006</p>
                    </td>
                </tr>
            </table>
        </div>
    </body>

    </html>

===== resources\views\tasks\create_pdf_form.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masukkan Data untuk Membuat PDF') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl mb-4">Masukkan Informasi untuk PDF</h3>

                    <!-- Form untuk memasukkan data -->
                    <form method="POST" action="{{ route('task.sekretaris.create_pdf_with_data', $task->id) }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nomor" class="block text-sm font-medium text-gray-700">Nomor</label>
                            <input type="text" id="nomor" name="nomor" value="{{ old('nomor') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                    
                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                    
                        <div class="mb-4">
                            <label for="kepada" class="block text-sm font-medium text-gray-700">Kepada</label>
                            <input type="text" id="kepada" name="kepada" value="{{ old('kepada') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                    
                        <div class="mb-4">
                            <label for="maksud" class="block text-sm font-medium text-gray-700">Maksud</label>
                            <textarea id="maksud" name="maksud" rows="4" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ old('maksud') }}</textarea>
                        </div>
                    
                        <div class="mb-4">
                            <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu</label>
                            <input type="text" id="waktu" name="waktu" value="{{ old('waktu') }}" required
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                    
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 transition">
                            Buat PDF
                        </button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Selamat Datang Kembali, {{ Auth::user()->name }}!
                </div>
            </div>

            @if(Auth::user()->role === 'admin')
                @include('dashboard.admin', ['data' => $data])
            @elseif(Auth::user()->role === 'sekretaris')
                @include('dashboard.sekretaris', ['data' => $data])
            @elseif(Auth::user()->role === 'inspektur')
                @include('dashboard.inspektur', ['data' => $data])
            @endif

        </div>
    </div>
</x-app-layout>

===== resources\views\lp.blade.php =====
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perencanaan Penugasan - Inspektorat Kota Gorontalo</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-lightBlue text-darkGray">

    <!-- Header -->
    <header class="bg-oceanBlue bg-opacity-50 shadow-md sticky top-0 z-10 backdrop-blur-md">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo dan Judul -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Gorontalo" class="h-[70px]">
            </div>
    
            <!-- Navbar -->
            <nav class="hidden md:flex space-x-8 text-lg text-white">
                <a href="/" class="py-2 px-4 hover:text-sunnyYellow transition duration-300 ease-in-out">Beranda</a>
                <a href="/login" class="px-8 py-2 bg-sunnyYellow text-white rounded-lg hover:bg-oceanBlue transition duration-300 ease-in-out">Login</a>
            </nav>
    
            <!-- Mobile Menu Button -->
            <div class="block md:hidden">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden bg-white absolute top-0 left-0 w-full h-screen bg-opacity-90 hidden">
            <div class="container mx-auto py-6 px-8">
                <ul class="flex flex-col space-y-6 text-lg text-darkGray">
                    <li><a href="/" class="hover:text-sunnyYellow transition duration-300 ease-in-out">Beranda</a></li>
                    <li><a href="/login" class="px-8 py-2 bg-sunnyYellow text-white rounded-lg hover:bg-oceanBlue transition duration-300 ease-in-out">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    


    <!-- Hero Section -->
    <section
        class="h-screen flex items-center justify-center bg-gradient-to-br from-oceanBlue via-lightBlue to-sunnyYellow">
        <div class="container mx-auto flex items-center justify-between px-6 py-12">
            <!-- Left Side - Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/hero2.png') }}" alt="Hero Image"
                    class="w-[550px] h-auto object-cover rounded-lg">
            </div>

            <!-- Right Side - Text -->
            <div class="w-full md:w-1/2 text-center md:text-left md:pl-12">
                <h1
                    class="text-4xl md:text-6xl font-extrabold text-white mb-6 animate__animated animate__fadeIn animate__delay-1s">
                    Website Perencanaan Penugasan Inspektorat Kota Gorontalo
                </h1>
                <p class="text-lg text-white mb-8">
                    Kelola dan dokumentasikan perencanaan tugas serta laporan dengan mudah dan cepat di Inspektorat Kota
                    Gorontalo.
                </p>
                <a href="{{ url('/login') }}"
                    class="px-8 py-4 bg-sunnyYellow text-white text-lg rounded-lg shadow hover:bg-oceanBlue transition-all duration-300 ease-in-out transform hover:scale-105">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-oceanBlue py-6">
        <div class="container mx-auto text-center">
            <p class="text-softPurple">&copy; 2024 Inspektorat Kota Gorontalo. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS for Hamburger Menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>

===== resources\views\welcome.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

===== artisan =====
#!/usr/bin/env php
<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any of our classes manually. It's great to relax.
|
*/

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Artisan Application
|--------------------------------------------------------------------------
|
| When we run the console application, the current CLI command will be
| executed in this console and the response sent back to a terminal
| or another output device for the developers. Here goes nothing!
|
*/

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

/*
|--------------------------------------------------------------------------
| Shutdown The Application
|--------------------------------------------------------------------------
|
| Once Artisan has finished running, we will fire off the shutdown events
| so that any final work may be done by the application before we shut
| down the process. This is the last thing to happen to the request.
|
*/

$kernel->terminate($input, $status);

exit($status);

===== app\Console\Kernel.php =====
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

===== vite.config.js =====
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

== Selesai ==

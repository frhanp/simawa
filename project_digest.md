# Project Digest
_Generated: 2025-08-23 18:40:46_
**Root:** D:\Laragon\www\simawa


## Struktur (filtered, no depth limit)
```
.git
app
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
project_digest.md
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
app\Http\Controllers\AdminController.php
app\Http\Controllers\Controller.php
app\Http\Controllers\InspekturController.php
app\Http\Controllers\LHPController.php
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
database\migrations\2024_10_15_033716_create_spt_table.php
database\migrations\2024_10_15_074522_create_preparations_table.php
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
database\seeders\DatabaseSeeder.php
database\seeders\OrangSeeder.php
public\build
public\css
public\images
public\js
public\storage
public\.htaccess
public\favicon.ico
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
resources\views\inspektur\approve_Inspektur.blade.php
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
resources\views\sekretaris\spt
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
storage\app\public\preparations
storage\app\public\spt_files
storage\app\public\uploads
storage\app\public\.gitignore
storage\app\public\berita_acara_entry\858lfqSb9VtNMhrUEFY8Pa6hkqYCqXyiRRKW9yY0.pdf
storage\app\public\berita_acara_entry\BQDPr1QSKstrWnbu3hcvh5o6JhwpGAL9MfwVW0dw.docx
storage\app\public\berita_acara_entry\fsgIjz6LiklN9iD8wjv5pMhcmjHKAbTzCKvOBQLS.docx
storage\app\public\berita_acara_entry\HAfBBYS1HJyZjsznr0LOLES9PC2JRyiWTgSxQudl.pdf
storage\app\public\berita_acara_entry\iXwr9T8hGgzOoIGuxw0lqPiOuewO7wnrSdNSCsff.pdf
storage\app\public\berita_acara_entry\JYh2eElzeMkJWBTOatMDVPuv0Y0N5wOKEmzivUvL.pdf
storage\app\public\berita_acara_entry\notYv2ZPCcW3F6Pkdjqd7yuPjY1QNWYZtEX2HPOi.docx
storage\app\public\berita_acara_entry\P0zHlmuyVpPrVrlKsxeTgTiQCfP4mOZqipYtKOYE.pdf
storage\app\public\berita_acara_entry\rdxOwd80IWweB51K9uqnohEl5t8ofE7PwzatyXEy.docx
storage\app\public\berita_acara_exit\5PmroIbrY6e4Z0Yh8CWa64NbmP0Qksp8bGX8k71d.pdf
storage\app\public\berita_acara_exit\9GxIi21pKgSeWdHaMM4yb24UiPqoPnQDDZFnN0uB.pdf
storage\app\public\berita_acara_exit\eEEvD0scsj3q1FO3kyM6ALvosCBfK7CwTP17Syid.docx
storage\app\public\berita_acara_exit\okU1XkngVonhYScIc7kYwnB93fwcqHuETP6uUnAi.docx
storage\app\public\berita_acara_exit\OLjA61e1ox27MG2XBV5nV0SypeuujrPYOkI2QQ7e.docx
storage\app\public\berita_acara_exit\S3Lu7Jfc6iV9JyBvAvcUOHaDTcC393YSBpArlLV1.docx
storage\app\public\berita_acara_exit\vlcOBRCioUhSF7x192M1vwkJo5Rgva9ZdWUsCBJD.docx
storage\app\public\berita_acara_exit\vsOzJXwuBpEtkIsQEm9riVV4iRAScs61HlMSntPF.pdf
storage\app\public\berita_acara_exit\xs2v21bHSi1z9FzD0nv7XYWblZwIu5mWn0jX52Cl.docx
storage\app\public\entry_meeting_photos\BJDKDwnA6MRbBMuF6P3Pa1Gw5aDHyN6AuGyCOYJF.jpg
storage\app\public\entry_meeting_photos\ccKDHrI5RxJWST7kmNn23GhV24XPN3E4FMI8FBu0.png
storage\app\public\entry_meeting_photos\Hdtokg6HxIdh3w4sYQYnrHqj1DZpeXHxegw4F3WK.png
storage\app\public\entry_meeting_photos\jja9uNktHfODSw4xRg0I6HWOCZ8vlp7RujjVs3rP.png
storage\app\public\entry_meeting_photos\jjy9CfVtrNpPTq4rCmpRGeO20ixVp3vwe1w1wqNz.png
storage\app\public\entry_meeting_photos\LXRdINCKdTRs9pCjtzWA2GbAdjmeXs7rFmQIyeWj.png
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
storage\app\public\exit_meeting_photos\VoonDSMZ7KjRHqDzOXJ4rDFXIIBUS0pDyUggO9So.png
storage\app\public\preparations\formulir_km4
storage\app\public\preparations\pka
storage\app\public\preparations\formulir_km4\KHfUC1vRVv4wJCUDNlm4VAVE4u9eYSy7JvkVvTxf.pdf
storage\app\public\preparations\formulir_km4\nrkYleRIT6WpClF5dA1TSWu0tOQbT4JpL9ieftMB.pdf
storage\app\public\preparations\formulir_km4\PDR0x4aaxM8DAAW71XpPRe3yTEHpSfsGA6Dr3ERl.docx
storage\app\public\preparations\formulir_km4\qVWNIlW6dpLEfAuFMXGwiJKBDEJtGWTx0QEO4fMA.pdf
storage\app\public\preparations\formulir_km4\rhAcKgjZfDg7YS9dukTH7GQAebYtC2U2hptbmyth.pdf
storage\app\public\preparations\formulir_km4\sguGHbIKBfga6aD6VWvm0VGmF4ZKvkPeRLddqESR.pdf
storage\app\public\preparations\formulir_km4\TimMUkS9XuDe3Mg7u9I674Hn2wi4xp4l7XGK9CaD.docx
storage\app\public\preparations\formulir_km4\UFu0Vt5afxMI5pDO1JL0w2qIVUAzLyvxB8QiJZP2.pdf
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
storage\app\public\preparations\pka\yS8eeTGPSS0uiGcsuDMlIf8bQJ6EP3SGkDqqw0dI.pdf
storage\app\public\spt_files\1729505787_LAPORAN_AUDIT_UPA_PERPUSTAKAAN.docx
storage\app\public\spt_files\1729505824_audit.pdf
storage\app\public\spt_files\1729582924_audit.pdf
storage\app\public\spt_files\1729584426_Pdf_Farhan.pdf
storage\app\public\spt_files\1729737649_document.pdf
storage\app\public\spt_files\1729746974_mqSh9nZ7LH1jjiPx5jGGqianrKkA0RvCBxRJTnS8.docx
storage\app\public\spt_files\1735469026_document_39.pdf
storage\app\public\spt_files\1753715816_PERNYATAAN_BUKAN_PNS.pdf
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
storage\app\public\uploads\lhp\qCHV832YqV2Oj87dfAcDZHNc34XOMiNDKJGofdrW.pdf
storage\app\public\uploads\pelaporan\0GjWqgPBahNBKxe32807MGl3aAXrAKqsM9Z4YKsj.pdf
storage\app\public\uploads\pelaporan\16AqappHIJJNcY56nroYLuf8fgrtU7BsXbf6gQIT.pdf
storage\app\public\uploads\pelaporan\2Mze4e6wESnByBEh8p8ndZtbMzEFVOwEagowbXVE.docx
storage\app\public\uploads\pelaporan\4fS4ykOSUNvCF4lRGtILLF4aX5GkEIKblgpVZZKY.pdf
storage\app\public\uploads\pelaporan\5AMOjoypdwovnpU5ZtrBDxJ1UFUsUfcgjklPue7r.docx
storage\app\public\uploads\pelaporan\6X77keifZm7d5kNOGTuH76KOsinps3GHsZhGhdr3.pdf
storage\app\public\uploads\pelaporan\8DmkviQ78UwtDHyXFL5tR7lREM5Vyc5PWhlGxMLK.pdf
storage\app\public\uploads\pelaporan\9mxkDV6jPJUMuqHDfd51mOlIlNeIgNCYaW7jDfv0.pdf
storage\app\public\uploads\pelaporan\9tbFDr44udPhgNxlRK40kmlTVuvtGM6y0nwb35xp.pdf
storage\app\public\uploads\pelaporan\A3J1xdqQ2SLDHsQDNodlsJOyV9mEA8HtZYmO2mrv.pdf
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
storage\app\public\uploads\pelaporan\uC9PL6NAiUAzXKmfUEpfMfuwM5Cbnh4h0XScad2J.pdf
storage\app\public\uploads\pelaporan\UOgqFHZkxcg7tMxe280WrP96JVFBQJPP7PLrMSzI.docx
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
storage\framework\cache\data\2c
storage\framework\cache\data\4a
storage\framework\cache\data\5d
storage\framework\cache\data\dc
storage\framework\cache\data\.gitignore
storage\framework\cache\data\2c\6e
storage\framework\cache\data\4a\fa
storage\framework\cache\data\5d\fc
storage\framework\cache\data\dc\4a
storage\framework\sessions\.gitignore
storage\framework\sessions\e7VmgMHvLqH6zbxOWkXXsqZQ0UYjhnvaeZPp2uXq
storage\framework\sessions\mvw4CrUQq0mT3rVT2ZvCZnCm9Qmi1Q7dBz3jG8hu
storage\framework\sessions\MxtyrmjE2kMZLSKs9CG5HddmzL5PH08r6BI4mygC
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
storage\framework\views\50802ededb51788eded50c4f9fa5e2ae.php
storage\framework\views\5458ce64c5666bda60a860f2637dde71.php
storage\framework\views\57ee91cd628703987ae586e1899ae24b.php
storage\framework\views\5fc7f0677dcd7ac040b2a8fb53be5208.php
storage\framework\views\6115783d1d2eed100c219c1cb554287b.php
storage\framework\views\690ef530c0034921160956ff4473c73b.php
storage\framework\views\6dfa1cc236c4a0af00078ad7a13838d7.php
storage\framework\views\6ff7a7021cac1ff696e4e9c7c423f886.php
storage\framework\views\702eaad7ba2516652e9cedfbea36df1b.php
storage\framework\views\7780b41f2da23c4ab4ca8969c4c82a9f.php
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
storage\framework\views\a646a033151ea9d635dc383747aff02e.php
storage\framework\views\a7c1c12690b36cc3d74f04f97879cd36.php
storage\framework\views\a7d1412c273c41a65a2cc0fbc4dfcf35.php
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
storage\framework\views\e79d152dfa32167edde1bbe390a8cf31.php
storage\framework\views\e800eb8075b408f7721ced44416827bb.php
storage\framework\views\ec214a4fd57e04cbdecd59236226bc7e.php
storage\framework\views\ed751d4b0363e82e3ff9f4f975e3612e.php
storage\framework\views\ed8b33204dcfe3f283d900c292c0bd15.php
storage\framework\views\f92428ccc800eed1eff6734b15661c01.php
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


## Git
```
Remote:
origin	https://github.com/frhanp/simawa.git (fetch)
origin	https://github.com/frhanp/simawa.git (push)

Branch:
main

Last 5 commits:
5cda18c jadi sidebar
b05fd9b first commit
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


## Routes (auto-detected, if any)
```

  GET|HEAD        / ................................................................................................................ 
  GET|HEAD        _debugbar/assets/javascript .......................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets ....................... debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} ................. debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ................ debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ........................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain ............... debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  POST            _ignition/execute-solution ......... ignition.executeSolution ΓÇ║ Spatie\LaravelIgnition ΓÇ║ ExecuteSolutionController
  GET|HEAD        _ignition/health-check ..................... ignition.healthCheck ΓÇ║ Spatie\LaravelIgnition ΓÇ║ HealthCheckController
  POST            _ignition/update-config .................. ignition.updateConfig ΓÇ║ Spatie\LaravelIgnition ΓÇ║ UpdateConfigController
  GET|HEAD        admin/admin/entry-meeting ..................................... admin.entry-meeting ΓÇ║ AdminController@entryMeeting
  POST            admin/admin/entry-meeting/store .................... admin.entry-meeting.store ΓÇ║ AdminController@storeEntryMeeting
  GET|HEAD        admin/admin/km4 .................................................................. admin.km4 ΓÇ║ AdminController@km4
  POST            admin/admin/km4/store ................................................. admin.km4.store ΓÇ║ AdminController@storeKM4
  POST            admin/admin/persiapan/store ............................... admin.persiapan.store ΓÇ║ AdminController@storePersiapan
  GET|HEAD        admin/admin/persiapan/{id} ........................................... admin.persiapan ΓÇ║ AdminController@persiapan
  GET|HEAD        admin/admin/pka .................................................................. admin.pka ΓÇ║ AdminController@pka
  POST            admin/admin/pka/store ................................................. admin.pka.store ΓÇ║ AdminController@storePKA
  GET|HEAD        admin/preparations ............................................... preparations ΓÇ║ PreparationController@adminIndex
  GET|HEAD        admin/spt ................................................................... spt.index ΓÇ║ AdminController@indexSPT
  GET|HEAD        admin/spt/view ............................................................. task.ViewSpt ΓÇ║ TaskController@viewSPT
  GET|HEAD        admin/task/planning ...................................................... task.planning ΓÇ║ TaskController@planning
  POST            admin/task/store ............................................................... task.store ΓÇ║ TaskController@store
  GET|HEAD        admin/task/view ................................................................. task.index ΓÇ║ TaskController@view
  PUT             admin/tasks/{id} ............................................................. task.update ΓÇ║ TaskController@update
  DELETE          admin/tasks/{id} ........................................................... task.destroy ΓÇ║ TaskController@destroy
  GET|HEAD        admin/tasks/{id}/edit ............................................................ task.edit ΓÇ║ TaskController@edit
  GET|HEAD        api/user ......................................................................................................... 
  GET|HEAD        confirm-password ...................................... password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ........................................................ Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard .............................................................................................. dashboard
  POST            email/verification-notification ........... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password ....................................... password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password .......................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        inspektur/approve ............................. inspektur.approve_inspektur ΓÇ║ InspekturController@approveInspektur
  GET|HEAD        inspektur/approve-task/{id} .................................. inspektur.approve ΓÇ║ InspekturController@approveTask
  POST            inspektur/pelaporan/reject ............................... inspektur.pelaporan.reject ΓÇ║ InspekturController@reject
  POST            inspektur/pelaporan/{id}/acc ................................... inspektur.pelaporan.acc ΓÇ║ InspekturController@acc
  GET|HEAD        inspektur/preparations ................................ inspektur.preparations.index ΓÇ║ PreparationController@index
  GET|HEAD        inspektur/preparations/{preparation} .................... inspektur.preparations.show ΓÇ║ PreparationController@show
  POST            inspektur/preparations/{preparation}/approve ...... inspektur.preparations.approve ΓÇ║ PreparationController@approve
  POST            inspektur/preparations/{preparation}/reject ......... inspektur.preparations.reject ΓÇ║ PreparationController@reject
  POST            inspektur/reject-task .......................................... inspektur.reject ΓÇ║ InspekturController@rejectTask
  GET|HEAD        lhp .............................................................................. lhp.index ΓÇ║ LHPController@index
  POST            lhp .............................................................................. lhp.store ΓÇ║ LHPController@store
  GET|HEAD        lhp/create ..................................................................... lhp.create ΓÇ║ LHPController@create
  POST            lhp/reject ..................................................................... lhp.reject ΓÇ║ LHPController@reject
  POST            lhp/{id}/acc ......................................................................... lhp.acc ΓÇ║ LHPController@acc
  GET|HEAD        lhp/{lhp} .......................................................................... lhp.show ΓÇ║ LHPController@show
  PUT|PATCH       lhp/{lhp} ...................................................................... lhp.update ΓÇ║ LHPController@update
  DELETE          lhp/{lhp} .................................................................... lhp.destroy ΓÇ║ LHPController@destroy
  GET|HEAD        lhp/{lhp}/edit ..................................................................... lhp.edit ΓÇ║ LHPController@edit
  GET|HEAD        login ......................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login .................................................................. Auth\AuthenticatedSessionController@store
  POST            logout ...................................................... logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  PUT             password ........................................................ password.update ΓÇ║ Auth\PasswordController@update
  GET|HEAD        pdf .............................................................................................................. 
  GET|HEAD        pelaksanaan ...................................................... pelaksanaan.index ΓÇ║ PelaksanaanController@index
  POST            pelaksanaan ...................................................... pelaksanaan.store ΓÇ║ PelaksanaanController@store
  GET|HEAD        pelaksanaan/create ............................................. pelaksanaan.create ΓÇ║ PelaksanaanController@create
  GET|HEAD        pelaksanaan/{pelaksanaan} .......................................... pelaksanaan.show ΓÇ║ PelaksanaanController@show
  PUT|PATCH       pelaksanaan/{pelaksanaan} ...................................... pelaksanaan.update ΓÇ║ PelaksanaanController@update
  DELETE          pelaksanaan/{pelaksanaan} .................................... pelaksanaan.destroy ΓÇ║ PelaksanaanController@destroy
  GET|HEAD        pelaksanaan/{pelaksanaan}/edit ..................................... pelaksanaan.edit ΓÇ║ PelaksanaanController@edit
  GET|HEAD        pelaporan ............................................................ pelaporan.index ΓÇ║ PelaporanController@index
  POST            pelaporan ............................................................ pelaporan.store ΓÇ║ PelaporanController@store
  GET|HEAD        pelaporan/create ................................................... pelaporan.create ΓÇ║ PelaporanController@create
  GET|HEAD        pelaporan/{pelaporan} .................................................. pelaporan.show ΓÇ║ PelaporanController@show
  PUT|PATCH       pelaporan/{pelaporan} .............................................. pelaporan.update ΓÇ║ PelaporanController@update
  DELETE          pelaporan/{pelaporan} ............................................ pelaporan.destroy ΓÇ║ PelaporanController@destroy
  GET|HEAD        pelaporan/{pelaporan}/edit ............................................. pelaporan.edit ΓÇ║ PelaporanController@edit
  GET|HEAD        pertimbangan .................................................... pertimbangan ΓÇ║ SekretarisController@pertimbangan
  GET|HEAD        profile .................................................................... profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ................................................................ profile.update ΓÇ║ ProfileController@update
  DELETE          profile .............................................................. profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register ......................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register ..................................................................... Auth\RegisteredUserController@store
  POST            reset-password ................................................. password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ........................................ password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        sanctum/csrf-cookie ............................ sanctum.csrf-cookie ΓÇ║ Laravel\Sanctum ΓÇ║ CsrfCookieController@show
  GET|HEAD        spt/upload/{task} ......................................... sekretaris.spt.upload ΓÇ║ SekretarisController@createSPT
  POST            spt/upload/{task} ........................................... sekretaris.spt.store ΓÇ║ SekretarisController@storeSPT
  POST            spt/{spt}/preparations .......................................... preparations.store ΓÇ║ PreparationController@store
  GET|HEAD        spt/{spt}/preparations/create ................................. preparations.create ΓÇ║ PreparationController@create
  POST            task/sekretaris/reject .................................. task.sekretaris.reject ΓÇ║ TaskController@rejectWithReason
  GET|HEAD        task/sekretaris/{id}/accept .......................... task.sekretaris.accept ΓÇ║ TaskController@acceptForSekretaris
  GET|HEAD        task/sekretaris/{id}/reject .......................... task.sekretaris.reject ΓÇ║ TaskController@rejectForSekretaris
  GET|HEAD        tasks/{task}/create-pdf ............................... task.sekretaris.create_pdf ΓÇ║ SekretarisController@showForm
  POST            tasks/{task}/create-pdf ............ task.sekretaris.create_pdf_with_data ΓÇ║ SekretarisController@createPdfWithData
  GET|HEAD        verify-email ........................................ verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ........................................ verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                 Showing [91] routes

```


## Controllers (auto-detected)
```
===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\NewPasswordController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\PasswordController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\PasswordResetLinkController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\RegisteredUserController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Auth\VerifyEmailController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\AdminController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

===== D:\Laragon\www\simawa\app\Http\Controllers\InspekturController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->back()->with('success', 'Pelaporan telah di-ACC.');
    }

    public function reject(Request $request)
    {
        $pelaporan = Pelaporan::findOrFail($request->pelaporan_id);
        $pelaporan->status = 'Ditolak'; // Status diubah menjadi Ditolak
        $pelaporan->alasan_tolak = $request->alasan_tolak; // Simpan alasan penolakan
        $pelaporan->save();

        return redirect()->back()->with('success', 'Pelaporan telah ditolak dengan alasan.');
    }
}

===== D:\Laragon\www\simawa\app\Http\Controllers\LHPController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\LHP;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan mengimpor Storage Facade

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
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'keterangan' => 'nullable|string|max:1000',
        ]);

        $data = $validated;

        // Handle file upload
        if ($request->hasFile('lhp_file')) {
            $data['lhp_file'] = $request->file('lhp_file')->store('uploads/lhp', 'public');
        }

        LHP::create($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil dibuat.');
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
        $validated = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'lhp_file' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
            'keterangan' => 'nullable|string|max:1000',
        ]);

        $data = $validated;

        // Handle file upload
        if ($request->hasFile('lhp_file')) {
            // Hapus file lama jika ada
            if ($lhp->lhp_file) {
                Storage::disk('public')->delete($lhp->lhp_file);
            }
            $data['lhp_file'] = $request->file('lhp_file')->store('uploads/lhp', 'public');
        }

        $lhp->update($data);

        return redirect()->route('lhp.index')->with('success', 'LHP berhasil diperbarui.');
    }

    /**
     * Menghapus LHP dari database.
     */
    public function destroy(LHP $lhp)
    {
        // Hapus file terkait jika ada
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
}

===== D:\Laragon\www\simawa\app\Http\Controllers\PelaksanaanController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        Pelaksanaan::create($validated);

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

===== D:\Laragon\www\simawa\app\Http\Controllers\PelaporanController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage Facade

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
}

===== D:\Laragon\www\simawa\app\Http\Controllers\PreparationController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preparation;
use App\Models\Spt;
use Illuminate\Support\Facades\Storage;

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
        Preparation::create([
            'spt_id' => $spt->id,
            'pka_path' => $pkaPath ?? null,
            'formulir_km4_path' => $formulirKm4Path ?? null,
            'status' => 'Pending',
        ]);

        // Optional: Kirim notifikasi ke Inspektur

        return redirect()->route('spt.index')->with('success', 'Persiapan SPT berhasil dibuat dan dikirim ke Inspektur.');
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

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('success', 'Persiapan SPT telah disetujui.');
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

        // Optional: Kirim notifikasi ke pengguna terkait

        return redirect()->route('inspektur.preparations.index')->with('error', 'Persiapan SPT telah ditolak.');
    }

    public function adminIndex()
    {
        
        $preparations = Preparation::with(['spt.task'])->paginate(20);

        return view('preparations.admin_index', compact('preparations'));
    }
}

===== D:\Laragon\www\simawa\app\Http\Controllers\ProfileController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\SekretarisController.php =====
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

===== D:\Laragon\www\simawa\app\Http\Controllers\TaskController.php =====
<?php

namespace App\Http\Controllers;

use App\Models\SPT;
use App\Models\Task;
use App\Models\Orang;
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
        // Ambil data orang dari tabel 'orang' untuk setiap kategori
        $penanggungJawab = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $ketuaTim = Orang::where('jabatan', 'Ketua Tim')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $anggotaTim = Orang::where('jabatan', 'Anggota Tim')->get();
        $pengendaliTeknis = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $penunjang = Orang::where('jabatan', 'Penunjang')->get();

        // Kirim data ke view
        return view('task.planning', compact('penanggungJawab', 'ketuaTim', 'wakilPenanggungJawab', 'anggotaTim', 'pengendaliTeknis', 'penunjang'));
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

        return redirect()->route('task.index')->with('success', 'Tugas berhasil disimpan!');
    }




    public function edit($id)
    {
        // Mengambil task berdasarkan id
        $task = Task::findOrFail($id);

        // Men-decode team_composition (JSON) untuk digunakan pada form
        $teamComposition = json_decode($task->team_composition, true);

        // Ambil data orang berdasarkan jabatan
        $penanggungJawab = Orang::where('jabatan', 'Penanggung Jawab')->get();
        $wakilPenanggungJawab = Orang::where('jabatan', 'Wakil Penanggung Jawab')->get();
        $pengendaliTeknis = Orang::where('jabatan', 'Pengendali Teknis')->get();
        $ketuaTim = Orang::where('jabatan', 'Ketua Tim')->get();
        $anggotaTim = Orang::where('jabatan', 'Anggota Tim')->get();
        $penunjang = Orang::where('jabatan', 'Penunjang')->get();

        // Menampilkan halaman edit dengan data task dan data orang
        return view('task.edit', compact(
            'task',
            'penanggungJawab',
            'wakilPenanggungJawab',
            'pengendaliTeknis',
            'ketuaTim',
            'anggotaTim',
            'penunjang',
            'teamComposition' // Pass the decoded team composition
        ));
    }



    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'assignment_type' => 'required|string|max:255',
        'penanggung_jawab' => 'required|integer|exists:orang,id',
        'wakil_penanggung_jawab' => 'required|integer|exists:orang,id',
        'ketua_tim' => 'required|integer|exists:orang,id',
        'pengendali_teknis' => 'array|nullable',
        'pengendali_teknis.*' => 'integer|exists:orang,id',
        'anggota_tim' => 'array|nullable',
        'anggota_tim.*' => 'integer|exists:orang,id',
        'penunjang' => 'array|nullable',
        'penunjang.*' => 'integer|exists:orang,id',
        'number_of_days' => 'required|integer|min:1',
    ]);

    // Cari tugas berdasarkan ID
    $task = Task::findOrFail($id);

    // Menyusun komposisi tim dalam format yang sesuai
    $teamComposition = [
        'penanggung_jawab' => $request->input('penanggung_jawab'),
        'wakil_penanggung_jawab' => $request->input('wakil_penanggung_jawab'),
        'ketua_tim' => $request->input('ketua_tim'),
        'pengendali_teknis' => $request->input('pengendali_teknis', []),
        'anggota_tim' => $request->input('anggota_tim', []),
        'penunjang' => $request->input('penunjang', []),
    ];

    // Update atribut tugas
    $task->assignment_type = $request->input('assignment_type');
    $task->team_composition = json_encode($teamComposition); // Menyimpan komposisi tim dalam format JSON
    $task->number_of_days = $request->input('number_of_days');

    // Cek apakah status sebelumnya adalah 'rejected'
    if ($task->status === 'Ditolak Sekretaris' || $task->status === 'Ditolak Inspektur') {
        $task->status = 'pending'; // Kembalikan status ke 'pending'
        $task->rejection_reason = null; // Hapus alasan penolakan
    }

    // Simpan perubahan
    $task->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('task.index')->with('success', 'Tugas berhasil diperbarui dan status dikembalikan ke pending.');
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


## Models (auto-detected)
```
===== D:\Laragon\www\simawa\app\Models\Assignment.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
}

===== D:\Laragon\www\simawa\app\Models\EntryMeeting.php =====
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

===== D:\Laragon\www\simawa\app\Models\LHP.php =====
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

===== D:\Laragon\www\simawa\app\Models\Orang.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    protected $table = 'orang'; // Gunakan nama tabel yang sesuai
    protected $fillable = ['nama', 'jabatan'];
}

===== D:\Laragon\www\simawa\app\Models\Pelaksanaan.php =====
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

===== D:\Laragon\www\simawa\app\Models\Pelaporan.php =====
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
    ];
    

    /**
     * Relasi dengan Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

===== D:\Laragon\www\simawa\app\Models\Preparation.php =====
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

===== D:\Laragon\www\simawa\app\Models\Spt.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan
    protected $table = 'SPT';

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

===== D:\Laragon\www\simawa\app\Models\Task.php =====
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

===== D:\Laragon\www\simawa\app\Models\User.php =====
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

```


## Views & UI Files (listing)
```
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
resources\views\components\dropdown.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\dashboard.blade.php
resources\views\inspektur\approve_Inspektur.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\lhp\create.blade.php
resources\views\lhp\edit.blade.php
resources\views\lhp\index.blade.php
resources\views\lp.blade.php
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
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\sekretaris\spt\upload.blade.php
resources\views\task\edit.blade.php
resources\views\task\index.blade.php
resources\views\task\pertimbangan.blade.php
resources\views\task\planning.blade.php
resources\views\tasks\create_pdf_form.blade.php
resources\views\tasks\pdf\team_composition_with_data.blade.php
resources\views\welcome.blade.php
```


## Entry Points (heuristic)
```
artisan
vendor\laravel\breeze\stubs\default\vite.config.js
vendor\laravel\breeze\stubs\inertia-react\vite.config.js
vendor\laravel\breeze\stubs\inertia-vue\vite.config.js
vendor\laravel\framework\src\Illuminate\Foundation\resources\server.php
vite.config.js
```

== Selesai ==

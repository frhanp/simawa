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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //rute pertimbangan
    Route::get('/task/sekretaris/{id}/accept', [TaskController::class, 'acceptForSekretaris'])->name('task.sekretaris.accept');
    Route::get('/task/sekretaris/{id}/reject', [TaskController::class, 'rejectForSekretaris'])->name('task.sekretaris.reject');


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

    // [DITAMBAHKAN] Halaman perencanaan penugasan (mirip admin)
    Route::get('penugasan', [TaskController::class, 'planning'])
        ->name('penugasan');

    // [DITAMBAHKAN] List/detail penugasan
    Route::get('penugasan/list', [TaskController::class, 'view'])
        ->name('penugasan.list');

    // [DITAMBAHKAN] Aksi simpan/ubah (jika admin sudah pakai ini, kita pakai endpoint sama)
    Route::post('penugasan', [TaskController::class, 'store'])
        ->name('penugasan.store');

    Route::put('penugasan/{task}', [TaskController::class, 'update'])
        ->name('penugasan.update');

    Route::delete('penugasan/{task}', [TaskController::class, 'destroy'])
        ->name('penugasan.destroy');
});
require __DIR__ . '/auth.php';

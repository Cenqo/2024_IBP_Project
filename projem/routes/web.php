<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KullaniciGosterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MesajController;
use App\Http\Controllers\UrunController;

Route::get('/', function () {
    return view('login');
});

// Kayıt rotaları
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Kullanıcı yönlendirme rotası


// Login rotaları
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Admin dashboard rotası
Route::post('admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Kullanıcı dashboard rotası
Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');





Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');



Route::post('/admin/duyuru-gonder', [AdminController::class, 'createDuyuru'])->name('admin.createDuyuru.submit');

Route::post('/mesajlar/gonder', [MesajController::class, 'store'])->name('mesaj.store');

/*Route::get('/duyurusayfasi', function () {
    return view('duyurugonder');
})->name('duyurugonder');*/

Route::get('/duyurugonder', [AdminController::class, 'yapilanDuyurular'])->name('duyurugonder');

Route::get('/gelenmesajlar', [AdminController::class, 'gelenMesajlar'])->name('gelenmesajlar');

Route::get('/hakkinda', function () {
    return view('contact');
})->name('iletisimsayfasi');

/*Route::get('/urun_kaydi', function () {
    return view('urun_kaydi');
})->name('urun_kaydi');*/

Route::get('/urunler_kaydi', [UrunController::class, 'urun_kaydi_index'])->name('urun_kaydi');


Route::get('/duyurularr', [UserController::class, 'gelenDuyurular'])->name('duyurularabak');

//giden mesajlari tekrar mesajgonder sayfasinda ekrana verdim cunku ne zaaman okunduklarina bakacagim.


Route::get('/mesajgonder', [MesajController::class, 'gidenMesajlar'])->name('mesajgonder');

// web.php (veya routes dosyanızdaki ilgili dosya)



Route::post('/mesajlar/{id}/markAsRead', [MesajController::class, 'markAsRead'])->name('mesajlar.markAsRead');

Route::get('/kullanici_ekle', function () {
    return view('kullanici_ekle');
})->name('kullanici_ekle');

Route::post('/admin_creates_user', [RegisterController::class, 'admin_creates_user'])->name('admin_creates_user');

Route::post('/urunler', [UrunController::class, 'store'])->name('urunler.store');

Route::get('/urunler', [UrunController::class, 'index'])->name('urunler.index');

Route::get('/urunler/{urun}/edit', [UrunController::class, 'urun_edit'])->name('urunler.edit');
Route::put('/urunler/{urun}', [UrunController::class, 'urun_update'])->name('urunler.update');
Route::get('/urunler/{urun}', [UrunController::class, 'urun_delete'])->name('urunler.delete');



Route::get('duyurular/{duyuru}/edit', [AdminController::class, 'duyuru_edit'])->name('duyurular.edit');
Route::put('duyurular/{duyuru}', [AdminController::class, 'duyuru_update'])->name('duyurular.update');
Route::get('duyurular/{duyuru}', [AdminController::class, 'duyuru_destroy'])->name('duyurular.delete');

?>
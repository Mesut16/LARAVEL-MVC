<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Randevuislemleri;
use App\Http\Controllers\Modelislemleri;

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
    return view('frontend.index');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route:: get('/hakkinda',[Randevuislemleri::class,'hakkinda'])->name('about');
Route:: get('/tedaviler',[Randevuislemleri::class,'tedavi'])->name('tedavi');
Route:: get('/tedavi1',[Randevuislemleri::class,'tedavi1'])->name('tedavi1');
Route:: get('/tedavi2',[Randevuislemleri::class,'tedavi2'])->name('tedavi2');
Route:: get('/tedavi3',[Randevuislemleri::class,'tedavi3'])->name('tedavi3');
Route:: get('/tedavi4',[Randevuislemleri::class,'tedavi4'])->name('tedavi4');
Route:: get('/tedavi5',[Randevuislemleri::class,'tedavi5'])->name('tedavi5');
Route:: get('/tedavi6',[Randevuislemleri::class,'tedavi6'])->name('tedavi6');


Route:: get('/iletisim',[Randevuislemleri::class,'iletisim'])->name('iletisim');
Route:: post('/yorumekle',[Modelislemleri::class,'yorumekle'])->name('yorumekle');

Route:: get("/randevu",[Randevuislemleri::class,'randevu'])->name('frontend.randevu');
Route:: post("/randevual",[Modelislemleri::class,'ekle'])->name('randevuekle');


Route:: get("/randevuliste",[Modelislemleri::class,'randevuliste'])->name('randevuliste');
Route:: get("/randevu-duzenle/{id}",[Modelislemleri::class,'randevuduzenle'])->name('randevu-duzenle');
Route:: post("/randevu-duzenle-post/{id}",[Modelislemleri::class,'randevuduzenlepost'])->name('randevu-duzenle-post');
Route::get('/randevu-sil/{id}',[Modelislemleri::class,'randevusil'])->name('randevusil');

Route:: get("/yorumliste",[Modelislemleri::class,'yorumliste'])->name('yorumliste');
Route:: get("/yorum",[Modelislemleri::class,'yorumgoster'])->name('yorumgoster');

Route::get('/yorum-sil/{id}',[Modelislemleri::class,'yorumsil'])->name('yorumsil');
Route::get('/yorum-duzenle/{id}',[Modelislemleri::class,'yorumduzenle'])->name('yorumduzenle');
Route::post('/yorum-duzenle-post/{id}',[Modelislemleri::class,'yorumduzenlepost'])->name('yorumduzenle-post');

Route::get('/randevu_detay/{id}',[Modelislemleri::class,'randevu_detay'])->name('detay');
Route::get('/tedavi_ekle/{id}',[Modelislemleri::class,'tedaviekle'])->name('tedaviekle');
Route::post('/tedavi_ekle_post',[Modelislemleri::class,'tedavieklepost'])->name('tedavieklepost');

require __DIR__.'/auth.php';

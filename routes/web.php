<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()){
        return redirect('/dashboard');
    }else{
        return view('welcome');
    }
});

Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

// Route::get('generate-shorten-link',[ShortLinkController::class,'index']);
// Route::post('generate-shorten-link', 'ShortLinkController@store')->name('generate.shorten.link.post');
   


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout',[AutentikasiController::class,'logout'])->name('logout');

Route::get('{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');

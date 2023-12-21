<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PanierController;




/*
|------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/commande', function () {
    return 'inscription';
});
Route::get('/profil', function () {
    return 'profil';
});
Route::get('/admin', function () {
    return 'admin';
});
Route::get('/article', function () {
    return view ('articlecreationtest');
});
Route::get('/profile', function () {
    return view ('profile');
});
Route::get('/inscriptiontest', function () {
    return view ('inscriptiontest');
});


Route::get('/produit', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/panier/ajouter/{article}', [PanierController::class, 'ajouter'])->name('panier.ajouter');

Route::resource('post', PostController::class);
Route::resource('user', UserController::class);
Route::resource('articles', ArticleController::class);

Route::resource('user', UserController::class)-> except(['update']);
Route::put('/user/update', [UserController::class, 'update'])->name('user.update');


Route:: match(['get','post'],'/register',[UserController::class,'register'] )
->name('app_register');

Route::get('/delete', [UserController::class, 'userDelete'])->name('delete.form');
Route::delete('/delete', [UserController::class, 'delete'])->name('app_delete');

Route::resource('user', UserController::class);

Auth::routes();

Route::group(['middleware' => 'web'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login');
});

Route::get('/panier', function () {
    return view ('orderUser');
});


Route::post('/user', 'UserController@store')->name('user.store');

Route::post('/logout', 'Auth\UserController@logout')->name('user.logout');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

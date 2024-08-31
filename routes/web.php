<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumsController;
use App\Http\Controllers\Admin\ArtistsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SongsController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UserController;
use App\Models\Albums;
use App\Models\Songs;
use Illuminate\Routing\RouteAction;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
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
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/albums-store', [HomeController::class, 'albums'])->name('albums-store');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/elements', [HomeController::class, 'element'])->name('elements');
Route::get('/event', [HomeController::class, 'event'])->name('event');

Route::get('/login', [UserController::class, 'getLogin'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'getRegister'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/logon', [AdminController::class, 'logon'])->name('logon');
Route::post('/logon', [AdminController::class, 'postLogon'])->name('admin.logon');
Route::get('/sign-out', [AdminController::class, 'signOut'])->name('admin.signout');
Route::get('/signup', [AdminController::class, 'signUp'])->name('signup');
Route::post('/signup', [AdminController::class, 'postSignUp'])->name('admin.signup');

Route::prefix('admin')->middleware('Admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::resource('songs', SongsController::class);
    Route::resource('artists', ArtistsController::class);
    Route::resource('albums', AlbumsController::class);
    Route::get('/songs-trash', [SongsController::class, 'trash'])->name('songs.trash');
    Route::get('/songs/{id}/restore', [SongsController::class, 'restore'])->name('songs.restore');
    Route::get('/songs/{id}/forceDelete', [SongsController::class, 'forceDelete'])->name('songs.forceDelete');
    Route::get('/artists-trash', [ArtistsController::class, 'trash'])->name('artists.trash');
    Route::get('/artists/{id}/restore', [ArtistsController::class, 'restore'])->name('artists.restore');
    Route::get('/artists/{id}/forceDelete', [ArtistsController::class, 'forceDelete'])->name('artists.forceDelete');
    Route::get('/albums-trash', [AlbumsController::class, 'trash'])->name('albums.trash');
    Route::get('/albums/{id}/restore', [AlbumsController::class, 'restore'])->name('albums.restore');
    Route::get('/albums/{id}/forceDelete', [AlbumsController::class, 'forceDelete'])->name('albums.forceDelete');
});

Route::middleware(['auth'])->group(function () {
    // Hiển thị form tạo playlist
    Route::get('/playlists/create', [PlaylistController::class, 'create'])->name('playlists.create');
    
    // Xử lý việc tạo playlist
    Route::post('/playlists', [PlaylistController::class, 'store'])->name('playlists.store');

    // Hiển thị danh sách playlist của người dùng
    Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');

    // Hiển thị chi tiết playlist
    Route::get('/playlists/{playlist}', [PlaylistController::class, 'show'])->name('playlists.show');

    // Xử lý việc xóa playlist
    Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');

    Route::middleware(['admin'])->group(function () {
        // Hiển thị danh sách tất cả playlist
        Route::get('/admin/playlists', [PlaylistController::class, 'adminIndex'])->name('playlists.adminIndex');

        // Hiển thị chi tiết playlist
        Route::get('/admin/playlists/{playlist}', [PlaylistController::class, 'adminShow'])->name('playlists.adminShow');

        // Xóa playlist của bất kỳ người dùng nào
        Route::delete('/admin/playlists/{playlist}', [PlaylistController::class, 'adminDestroy'])->name('playlists.adminDestroy');
    });
});
// Route::controller(UserController::class)->prefix('auth')->group(function () {
//     Route::get('/login', 'getLogin')->name('get-login');
//     Route::post('/login', 'postLogin')->name('post-login');
//     Route::get('/register', 'getRegister')->name('get-register');
//     Route::post('/register', 'postRegister')->name('post-register');
// });



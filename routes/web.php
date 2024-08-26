<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FileTransferController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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

Route::get("/", function () {
    $posts = Blog::latest()->get();
    return view('welcome', compact('posts'));
})->name('home');
Route::get('/news', [BlogController::class, 'index'])->name('news');
Route::get('/news/single/{id}', [BlogController::class, 'singleBlog'])->name('news.single');


Route::get('/storage/uploads/{filename}', function ($filename) {
    // Add folder path here instead of storing in the database.
    $path = storage_path('app/public/uploads/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('/forgot', [AuthController::class, 'requestReset'])->name('password.request');
Route::get('/reset/{token}', [AuthController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset/{token}', [AuthController::class, 'reset'])->name('reset');

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('users');
            Route::get('/add', [UserController::class, 'add'])->name('users.add');
            Route::post('/add', [UserController::class, 'create'])->name('users.create');
            Route::get('/edit/{user_id}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('/edit/{user_id}', [UserController::class, 'update'])->name('users.update');
            Route::get('/delete/{user_id}', [UserController::class, 'delete'])->name('users.delete');
        });

        Route::group(['prefix' => 'offices'], function () {
            Route::get('/', [OfficeController::class, 'index'])->name('offices');
            Route::post('/', [OfficeController::class, 'create'])->name('offices.create');
            Route::get('/edit/{id}', [OfficeController::class, 'edit'])->name('offices.edit');
            Route::post('/edit/{id}', [OfficeController::class, 'update'])->name('offices.update');
            Route::get('/delete/{id}', [OfficeController::class, 'delete'])->name('offices.delete');
        });

        Route::group(['prefix' => 'documents'], function () {
            Route::get('/', [FileController::class, 'index'])->name('files');
            Route::post('/', [FileController::class, 'store'])->name('file.store');
            Route::get('/delete/{id}', [FileController::class, 'delete'])->name('file.delete');

            Route::get('/transfer/{file_id}', [FileTransferController::class, 'send'])->name('file.send');
            Route::post('/transfer/{file_id}', [FileTransferController::class, 'store'])->name('file_transfer.store');
            Route::get('/transfer/acknowledge/{transfer_id}', [FileTransferController::class, 'acknowledge'])->name('acknowledge');
        });

        Route::get('/transfer', [FileTransferController::class, 'transfer'])->name('transfer');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    }
);

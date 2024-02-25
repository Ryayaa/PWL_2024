<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Route::get('/hello', function () {
//  return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
   });

Route::get('/ucapan', function () {
    return 'Selamat Datang';
   });

Route::get('/about', function () {
    return 'Nama: Arrya Fitriansyah NIM:2341728001';
   });

//Route::get('/user/{Arrya}', function ($name) {
   // return 'Nama saya '.$name;
   // });

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='Arrya') {
//     return 'Nama saya '.$name;
//     });

Route::get('/user/profile', function() {
    //
   })->name('profile');

//    Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
    // Uses first & second middleware...
// });
// Route::get('/user/profile', function () {
//  // Uses first & second middleware...
//  });
// });
// Route::domain('{account}.example.com')->group(function () {
//  Route::get('user/{id}', function ($account, $id) {
//  //
//  });
// });
// Route::middleware('auth')->group(function () {
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/post', [PostController::class, 'index']);
// Route::get('/event', [EventController::class, 'index']);
// });

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

   //Views
//    Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Andi']);
//     });

Route::get('/greeting', [WelcomeController::class, 
'greeting']);

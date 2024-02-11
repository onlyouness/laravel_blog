<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    $posts = [];
    $posts= Post::latest()->get();
    return view('home',['posts'=> $posts]);
});
Route::post("/register/addUser", [UserController::class, "addUser"]);
Route::post("/login/addUser", [UserController::class, "login"]);

//Posts Routes;
Route::get("/home/create-post", function () {
    return view("/createPost");
});
Route::post("/save-post", [PostController::class, 'savePost']);
Route::get("/logout",[UserController::class,"logout"]);

//comment:

Route::get('/comment/{post}',[PostController::class,'showComments'])->name("comments");
Route::post("/post/comments/{post}",[PostController::class,"saveComment"]);


//Comments
Route::post('/like/{post}',[PostController::class,'addLike']);
<?php

use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Eva']);
});

Route::get('/posts', function () {
    //Eager Loading di Router
    $post = Post::with(['user', 'category'])->get();
    return view('posts', ['title' => 'Blog Page', 'posts' => $post ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categorys/{category:slug}', function (CategoryPost $category) {

    return view('posts', ['title' => count($category->posts) . ' Article in Category ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
<?php

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
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Wahab Syahranie',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sri Evandayani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non ea tenetur reprehenderit animi enim maiores recusandae iusto quis ut ratione eveniet optio vel, commodi, sit sunt laborum consectetur voluptatum.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Wahab Syahranie',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta expedita harum culpa eius sunt laborum vitae architecto laboriosam, quae id quo delectus ducimus provident est ipsam maxime quidem quam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sri Evandayani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non ea tenetur reprehenderit animi enim maiores recusandae iusto quis ut ratione eveniet optio vel, commodi, sit sunt laborum consectetur voluptatum.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
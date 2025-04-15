<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Rahma',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus excepturi doloremque, nihil eos accusantium tempore error quos repudiandae, amet asperiores ipsa neque dolorum in vel temporibus dolore? Rem, eaque. Vero.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Rahma',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, enim accusantium voluptatibus, explicabo quaerat iste excepturi, distinctio earum fugiat consequatur harum ex dolor animi? Adipisci quam impedit corporis debitis iusto!'
        ]

    ] ] );
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page','name' => 'Rahma' ] );
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

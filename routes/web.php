<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halo, ini halaman utama!';
});

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post ID: $postId, Comment ID: $commentId";
});
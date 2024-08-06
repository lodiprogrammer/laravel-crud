<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'home',
    ]);
    // return 'Halaman Home';
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'nama' => 'Itadori Yuji',
        'image' => 'yuji.png',
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Itadori Yuji',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Kugisaki Nobara',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Megumi Fushiguro',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
    ];

    return view('posts', [
        'title' => 'blog',
        'postingnya' => $blog_posts,
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Itadori Yuji',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Kugisaki Nobara',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Megumi Fushiguro',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus perspiciatis illo non sapiente quia. Dignissimos error distinctio saepe numquam soluta ullam architecto fuga quaerat excepturi quis hic maiores, voluptatibus nam!',
        ],
    ];

    $newpost = [];
    foreach ($blog_posts as $post1) {
        if ($post1['slug'] === $slug) {
            $newpost = $post1;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'postnya' => $newpost,
    ]);
});

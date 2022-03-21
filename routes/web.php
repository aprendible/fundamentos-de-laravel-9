<?php

use Illuminate\Support\Facades\Route;
// personal-site.com => welcome
// personal-site.com/contacto => contact
// personal-site.com/blog => blog
// personal-site.com/about => about

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');

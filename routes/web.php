<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/specific', function () {
    return view('general/specific-article');
});

Route::get('/contact', function () {
    return view('general/contact');
});


Route::get('/issueweeks', function () {
    return view('general/issue-weeks');
});


Route::get('/issueyears', function () {
    return view('general/issue-years');
});

Route::get('/editor', function () {
    return view('editor/editor');
});
Route::get('/chief-editor', function () {
    return view('editor/chief-editor');
});
Route::get('/author',function(){
    return view('author/author');
});
Route::get('/articles',function(){
    return view('general/articles');
});

Route::get('/about',function(){
    return view('general/about');
});

Route::get('/reviewer',function(){
    return view('reviewer/reviewer');
});

Route::get('/author-guide',function(){
    return view('author/author-guide');
});


Route::get('/submit-article',function(){
    return view('general/submit-article');
});

Route::get('/request-for-review',function(){
    return view('reviewer/request-for-review');
});
Route::get('/login-register',function(){
    return view('general/login-register');
});
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

// author: elia deppe
// file: web.php

// Imports
use Illuminate\Support\Facades\Route;

/* route - index.blade.php
 *  via - app.blade.php, first nav-item in the nav-bar
 */
Route::get('/', function () {
    return view('index');
});

/* route - about.blade.php
 *  via - about.blade.php, second nav-item in the nav-bar
 */
Route::get('/about', function () {
    return view('about');
});

/* route - create.blade.php
 *  via - create.blade.php, fifth nav-item in the nav-bar
 */
Route::get('/create', function () {
    return view('create');
});

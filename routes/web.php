<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
/*
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', function () {
    $users = User::all();
    return view('users', compact('users'));
});

Route::get('/user/{name}', function ($name = "guess") {
    return "Hello ".$name;
});

Route::get('/about', function(){
    $name = "Newells";
    return view('test')->with('name', $name);
})->name('we');

Route::get('/home', function(){
    echo "<a href='".route('we')."'>Sponsor</a>";
    echo "<a href='".route('we')."'>rrr</a>";
    echo "<a href='".route('we')."'>ssss</a>";
    echo "<a href='" . route('we') . "'>qqqq</a>";
});
*/

$portfolios = [/*
    ['title' => 'Portfolio 1'],
    ['title' => 'Portfolio 2'],
    ['title' => 'Portfolio 3'],
    ['title' => 'Portfolio 4']*/
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio', compact('portfolios'))->name('portfolios');
Route::view('/contact', 'contact')->name('contact');

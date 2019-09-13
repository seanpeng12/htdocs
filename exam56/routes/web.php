<?php

// use Symfony\Component\Routing\Route;

// use Symfony\Component\Routing\Annotation\Route;

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

Route::get('/', function () { //localhost =>welcome.blade.php 網址=>動作
    return view('welcome')->with('name', 'tad')->with('say', ' ');
});

//攜帶參數to view
//send a list

// Route::get('/tad', function () {
//     return view('welcome')->with('name', 'tad')->with('say', '你好');
// });

// Route::get('/list', function () {
//     $data = ['name' => 'sean ', 'say' => 'list '];
//     return view("welcome", $data);
// });
// Route::get('/list2', function () {
//     return view('welcome', ['name' => 'possess0910 ', 'say' => '']);
// });

//加入內建的使用者認證機制時，自動產生路由
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
});
*/

// Route::group(['prefix' => config('backpack.base.route_prefix'), 'middleware' => ['admin'], 'namespace' => 'Admin'], function () {
//     CRUD::resource('tag', 'TagCrudController');
// });

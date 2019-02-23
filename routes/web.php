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
Route::get('/suo/suo', 'Suo@suo')->where(['id' => '\d+'])->name('get');
Route::get('res', 'Suo@res')->name('res');
Route::get('heihei', function () {
    return '我是home';
    //路由别名
})->name('home');
Route::get('admin', function () {
    //重定向redirect 路由助手函数route
//    return redirect()->route('home');
//    return '我是admin';
})->name('admin');
Route::get('json', function () {
    return response()->json([
        'id' => 1,
        'name' => "索殿君"
    ], 201);
})->name('json');
Route::get('download', function () {
    //下载
    return response()->download('./robots.txt');
})->name('dd');
Route::get('welcome', 'DemoController@welcome')->name('demo.welcome');
//加上命名空间名称的最后一位
Route::match(['get','post'],'admin/index', 'Admin\IndexController@index')->name('admin.index.index');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//    再次分组main
    Route::group(['prefix' => 'main'], function () {
        Route::get('index/{id?}', 'MainController@index')->where(['id' => '\d+'])->name('admin.main.index');
        Route::get('list', 'MainController@list')->name('admin.main.list');
        Route::get('detail', 'MainController@detail')->name('admin.main.detail');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('index', 'UserController@index')->name('admin.user.index');
        Route::get('add', 'UserController@add')->name('admin.user.add');
        Route::post('add', 'UserController@store')->name('admin.user.add');
        Route::match(['get', 'put'], 'edit/{id}', 'UserController@edit')->name('admin.user.edit')->where(['id' => '\d+']);
        Route::delete('del/{id}', 'UserController@delete')->name('admin.user.delete')->where(['id' => '\d+']);
    });
});
Route::get('admin/test','Admin\TestController@test')->name('admin.test.test');

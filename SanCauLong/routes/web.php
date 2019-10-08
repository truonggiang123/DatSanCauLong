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



use App\Http\Controllers\Backend\NgayController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('backend.layout.master');
});

Route::get('admin/ngay','Backend\NgayController@index')->name('backend.Ngay.index');
Route::get('admin/ngay/create','Backend\NgayController@create')->name('backend.Ngay.create');
Route::post('admin/ngay/store','Backend\NgayController@store')->name('backend.Ngay.store');

Route::get('admin/khunggio','Backend\KhungGioController@index')->name('backend.KhungGio.index');
Route::get('admin/khunggio/create','Backend\KhungGioController@create')->name('backend.KhungGio.create');
Route::post('admin/khunggio/store','Backend\KhungGioController@store')->name('backend.KhungGio.store');

Route::get('admin/loaisan','Backend\LoaiSanController@index')->name('backend.LoaiSan.index');
Route::get('admin/loaisan/create','Backend\LoaiSanController@create')->name('backend.LoaiSan.create');
Route::post('admin/loaisan/store','Backend\LoaiSanController@store')->name('backend.LoaiSan.store');


Route::get('admin/san','Backend\SanController@index')->name('backend.San.index');
Route::get('admin/san/create','Backend\SanController@create')->name('backend.San.create');
Route::post('admin/san/store','Backend\SanController@store')->name('backend.San.store');

Route::get('admin/datsan','Backend\DatSanController@index')->name('backend.DatSan.index');


Route::get('admin/nhanvien','Backend\NhanVienController@index')->name('backend.NhanVien.index');
Route::get('admin/nhanvien/create','Backend\NhanVienController@create')->name('backend.NhanVien.create');
Route::get('admin/nhanvien/create','Backend\NhanVienController@create')->name('backend.NhanVien.create');
Route::post('admin/nhanvien/store','Backend\NhanVienController@store')->name('backend.NhanVien.store');



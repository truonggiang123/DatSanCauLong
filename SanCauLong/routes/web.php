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
Route::get('admin/khunggio','Backend\KhungGioController@index')->name('backend.KhungGio.index');
Route::get('admin/loaisan','Backend\LoaiSanController@index')->name('backend.LoaiSan.index');
Route::get('admin/san','Backend\SanController@index')->name('backend.San.index');
Route::get('admin/datsan','Backend\DatSanController@index')->name('backend.DatSan.index');
Route::get('admin/nhanvien','Backend\NhanVienController@index')->name('backend.NhanVien.index');

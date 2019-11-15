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
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('backend.layout.master');
});
Route::group(['middleware' => 'auth'], function()
{
// các chức năng thao tác với ngày của admin và người quản lí
Route::get('admin/ngay','Backend\NgayController@index')->name('backend.Ngay.index');
Route::get('admin/ngay/create','Backend\NgayController@create')->name('backend.Ngay.create');
Route::post('admin/ngay/store','Backend\NgayController@store')->name('backend.Ngay.store');
// {id} là biến mà view index truyền lên tại thời điểm click vào nút sửa đã định dạng trước
Route::get('admin/ngay/edit/{id}','Backend\NgayController@edit')->name('backend.Ngay.edit');
// {id} là biến mà view index truyền lên tại thời điểm click vào nút sửa đã định dạng trước
Route::post('admin/ngay/update/{id}','Backend\NgayController@update')->name('backend.Ngay.update');
// chức năng xóa 1 ngày với route delete
Route::delete('admin/ngay/detroys/{id}','Backend\NgayController@destroy')->name('backend.Ngay.destroy');



// các chức năng thao tác với khung giờ của admin và người quản lí trang web
Route::get('admin/khunggio','Backend\KhungGioController@index')->name('backend.KhungGio.index');
// thêm 1 khung giờ mới
Route::get('admin/khunggio/create','Backend\KhungGioController@create')->name('backend.KhungGio.create');
Route::post('admin/khunggio/store','Backend\KhungGioController@store')->name('backend.KhungGio.store');
// sửa 1 khung giờ {id} có sẳn và lưu thay đổi
Route::get('admin/khunggio/edit/{id}','Backend\KhungGioController@edit')->name('backend.KhungGio.edit');
Route::post('admin/khunggio/update/{id}','Backend\KhungGioController@update')->name('backend.KhungGio.update');
// chức năng xóa 1 khung giờ với route delete
Route::delete('admin/khunggio/detroys/{id}','Backend\KhungGioController@destroy')->name('backend.KhungGio.destroy');

// route của chức nắng loại sân người dùng thao tác đến csdl loại sân
Route::get('admin/loaisan','Backend\LoaiSanController@index')->name('backend.LoaiSan.index');
// thêm 1 loại sân
Route::get('admin/loaisan/create','Backend\LoaiSanController@create')->name('backend.LoaiSan.create');
Route::post('admin/loaisan/store','Backend\LoaiSanController@store')->name('backend.LoaiSan.store');
// sửa 1 loại sân
Route::get('admin/loaisan/edit/{id}','Backend\LoaiSanController@edit')->name('backend.LoaiSan.edit');
Route::post('admin/loaisan/update/{id}','Backend\LoaiSanController@update')->name('backend.LoaiSan.update');
// chức năng xóa 1 loại sân với route delete
Route::delete('admin/loaisan/detroys/{id}','Backend\LoaiSanController@destroy')->name('backend.LoaiSan.destroy');




Route::get('admin/san','Backend\SanController@index')->name('backend.San.index');
// thêm sân
Route::get('admin/san/create','Backend\SanController@create')->name('backend.San.create');
Route::post('admin/san/store','Backend\SanController@store')->name('backend.San.store');
// sửa sân
Route::get('admin/san/edit/{id}','Backend\SanController@edit')->name('backend.San.edit');
Route::post('admin/san/update/{id}','Backend\SanController@update')->name('backend.San.update');

Route::get('admin/datsan','Backend\DatSanController@index')->name('backend.DatSan.index');
// chức năng xóa 1 san với route delete
Route::delete('admin/san/detroys/{id}','Backend\SanController@destroy')->name('backend.San.destroy');

// Chức năng với nhân viên
Route::get('admin/nhanvien','Backend\NhanVienController@index')->name('backend.NhanVien.index');
// thêm nhân viên
Route::get('admin/nhanvien/create','Backend\NhanVienController@create')->name('backend.NhanVien.create');
Route::post('admin/nhanvien/store','Backend\NhanVienController@store')->name('backend.NhanVien.store');
// chức năng sửa thông tin nhân viên
Route::get('admin/nhanvien/edit/{id}','Backend\NhanVienController@edit')->name('backend.NhanVien.edit');
Route::post('admin/nhanvien/update/{id}','Backend\NhanVienController@update')->name('backend.NhanVien.update');
// chức năng xóa 1 ngày với route delete
Route::delete('admin/Nhanvien/detroys/{id}','Backend\NhanVienController@destroy')->name('backend.NhanVien.destroy');

});
// Route cho chức năng frontend

Route::get('/user/home','Frontend\homeController@index')->name('frontend.user.home');

Route::post('/user/khunggio','Api\ApiController@chonkhunggio')->name('frontend.user.khunggio');

Route::post('/user/timsan','Frontend\TimSanController@timSan')->name('frontend.user.timSan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

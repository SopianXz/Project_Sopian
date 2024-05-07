<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Pengguna;
use App\Models\Telepon;

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
Route::get('/params/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama, $jk, $alamat, $pendidikan, $pekerjaan) {
    $nama = $nama;
    $Jk = $jk;
    $alamat = $alamat;
    $pendidikan = $pendidikan;
    $pekerjaan = $pekerjaan;
    return view('param', compact('nama', 'Jk', 'alamat', 'pendidikan', 'pekerjaan'));
});

Route::get('/about', function () {
    $nama = "Sofian";
    $Jk = "Laki-Laki";
    $alamat = "Bandung";
    $pendidikan = "Smk assalaam bandung";
    $pekerjaan = "peternak lele";
    return view('biodata', compact('nama', 'Jk', 'alamat', 'pendidikan', 'pekerjaan'));
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/data_post', function () {
    $post = Post::find(1);
    return $post;
    // return view('tampil_post', compact('post'));
});
Route::get('/data_produk', function () {
    $produk = Produk::all();
    return view('tampil_produk', compact('produk'));
});
Route::get('/data_pengguna', function () {
    $pengguna = Pengguna::all();
    return view('tampil_pengguna',compact('pengguna'));
});
Route::get('/data_telepon', function () {
    $telepon = Telepon::all();
    return view('tampil_telepon',compact('telepon'));
});

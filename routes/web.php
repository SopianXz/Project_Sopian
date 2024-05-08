<?php

use App\Models\barang;
use App\Models\detail_penjualan;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Produk2;
use App\Models\Merk;
use App\Models\penjualan;

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
    return view('tampil_pengguna', compact('pengguna'));
});
Route::get('/data_telepon', function () {
    $telepon = Telepon::all();
    return view('tampil_telepon', compact('telepon'));
});
Route::get('/data_produk2', function () {
    $produk2 = Produk2::all();
    return view('tampil_produk2', compact('produk2'));
});
Route::get('/data_merk', function () {
    $merk = merk::all();
    return view('tampil_merk', compact('merk'));
});
Route::get('/data_barang', function () {
    $barang = barang::all();
    return view('tampil_barang', compact('barang'));
});
Route::get('/data_penjualan', function () {
    $penjualan = penjualan::all();
    return view('tampil_penjualan', compact('penjualan'));
});
Route::get('/data_detail_penjualan', function () {
    $detail_penjualan = detail_penjualan::all();
    return view('tampil_detail_penjualan', compact('detail_penjualan'));
});

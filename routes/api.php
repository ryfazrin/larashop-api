<?php

use App\Book;
use App\Http\Resources\Book as BookResource;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nama', function () {
    return 'Namaku, Larashop API';
});

Route::post('umur', function () {
    return 17;
});

Route::match(['get', 'post'], 'test', function () {
    return 'dari test';
});

Route::get('category/{id?}', function ($id = null) {
    $categories = [
        1 => 'Progamming',
        2 => 'Desain Grafis',
        3 => 'Jaringan Komputer',
    ];
    $id = (int) $id;
    if ($id == 0) return 'Silakan pilih kategori';
    else return 'Anda memilih kategori <b>' . $categories[$id] . '</b>';
});

Route::get('book/{id}', function () {
    return 'buku angka';
})->where('id', '[0-9]+');

Route::get('book/{title}', function ($title) {
    return 'buku abjad';
})->where('title', '[A-Za-z]+');

Route::prefix('v1')->group(function () {
    Route::get('books', 'BookController@index');
    Route::get('book/{id}', 'BookController@view')->where('id', '[0-9]+');
    Route::resource('categories', 'CategoryController');
});

// Route::middleware(['cors'])->group(function () {
Route::get('buku/{judul}', 'BookController@cetak');
// });

Route::get('/book', function () {
    return new BookResource(Book::find(1));
});

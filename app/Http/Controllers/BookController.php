<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::select('select * from books');
        return $books;
    }

    public function view($id)
    {
        $book = DB::select('select * from books where id = :id', ['id' => $id]);
        return $book;
    }

    public function cetak($judul)
    {
        return $judul;
    }
}

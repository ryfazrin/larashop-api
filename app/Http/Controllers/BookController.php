<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->get();
        return $books;
    }

    public function view($id)
    {
        $book = DB::table('books')->where('id', $id)->get();
        return $book;
    }

    public function cetak($judul)
    {
        return $judul;
    }
}

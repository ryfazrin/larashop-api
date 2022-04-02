<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        foreach ($books as $book) {
            echo $book->title;
        }
        // return $books;
    }

    public function view($id)
    {
        $book = Book::where('status', 'PUBLISH')
            ->orderBy('title', 'asc')
            ->limit(10)
            ->get();
        return $book;
    }

    public function cetak($judul)
    {
        return $judul;
    }
}

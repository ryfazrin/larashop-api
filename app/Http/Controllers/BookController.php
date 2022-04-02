<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\Book as BookResource;
use App\Http\Resources\Books as BookCollectionResource;

class BookController extends Controller
{
    public function index()
    {
        $books = new BookCollectionResource(Book::get());
        return $books;
    }

    public function view($id)
    {
        $book = new BookResource(Book::find($id));
        return $book;
    }

    public function cetak($judul)
    {
        return $judul;
    }
}

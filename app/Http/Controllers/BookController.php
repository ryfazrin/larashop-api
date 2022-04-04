<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\Book as BookResource;
use Illuminate\Http\Request;
use App\Http\Resources\Books as BookResourceCollection;

class BookController extends Controller
{
    public function index()
    {
        $criteria = Book::paginate(6);
        return new BookResourceCollection($criteria);
    }

    public function top($count)
    {
        $criteria = Book::select('*')
            ->orderBy('views', 'DESC')
            ->limit($count)
            ->get();

        return new BookResourceCollection($criteria);
    }

    public function slug($slug)
    {
        $criteria = Book::where('slug', $slug)->first();
        return new BookResource($criteria);
    }
}

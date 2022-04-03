<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\Categories as CategoryResourceCollection;

class CategoryController extends Controller
{
    public function index()
    {
        $criteria = Category::paginate(6);
        return new CategoryResourceCollection($criteria);
    }
    public function random($count)
    {
        $criteria = Category::select('*')
            ->inRandomOrder()
            ->limit($count)
            ->get();

        return new CategoryResourceCollection($criteria);
    }
}

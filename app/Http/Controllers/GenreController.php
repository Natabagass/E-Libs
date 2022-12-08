<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class GenreController extends Controller
{
    public function index()
    {
        $categories = Category::latest();

        if(request('search')){
            $categories->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.genre', [
            'name' => auth()->user()->name,
            'categories' => $categories->get()
        ]);
    }

    public function show($id){
        $books = Book::where('category_id', $id)->get();

        return view('pages.listBook', [
            'books' => $books
        ]);
    }

}
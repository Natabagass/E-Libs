<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $books = Book::latest()->when(request()->search, function($books) {
            $books = $books->where('title', 'like', '%'. request()->search . '%');
        })->paginate(5);

        return view('post.view', compact('books'));
    }
}
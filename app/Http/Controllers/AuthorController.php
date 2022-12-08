<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::latest();

        return view('pages.author', [
            'name' => auth()->user()->name,
            'authors' => $authors->get()
        ]);
    }

    public function show($id){
        $books = Book::where('author_id', $id)->get();

        return view('pages.listAuthorBook', [
            'books' => $books
        ]);
    }
}

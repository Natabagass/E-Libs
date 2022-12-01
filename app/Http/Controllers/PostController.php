<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Models\Category;


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
        })->paginate(5)->withQueryString();

        return view('post.view', compact('books'));
    }

    public function create()
    {
    return view('post.create');
    }

    public function store(Request $request)
    {
    $this->validate($request, [
        'title'     => 'required',
        'author'   => 'required',
        'link' => 'required',
        'description' => 'required',
        'category_id' => 'required'
    ]);

    $books = Book::create([
        'title'     => $request->title,
        'author'   => $request->author,
        'link' => $request -> link,
        'description' => $request -> description,
        'category_id' => $request -> category_id
    ]);

    if($books){
        //redirect dengan pesan sukses
        return redirect()->route('post')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('post')->with(['error' => 'Data Gagal Disimpan!']);
    }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'author'   => 'required',
            'link' => 'required',
            'description' => 'required',
            'category_id' => 'required'
    ]);
    
  //get data post by ID
    $book = Book::findOrFail($request->id);

        $book->update([
            'title'     => $request->title,
            'author'   => $request->author,
            'link' => $request -> link,
            'description' => $request -> description,
            'category_id' => $request -> category_id
        ]);

    if($book){
     //redirect dengan pesan sukses
        return redirect()->route('post')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
     //redirect dengan pesan error
        return redirect()->route('post')->with(['error' => 'Data Gagal Diupdate!']);
    }
    }


    public function destroy($id)
    {
        $books = Book::where('id', '=', $id)->delete();

        return redirect('/post')->with('message', 'Book has been deleted!');
    }

    public function edit($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('post.edit', [
            'book' => $book
        ]);
    }
}
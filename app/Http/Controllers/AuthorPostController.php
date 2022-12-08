<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    public function index()
    {
        $authors = Author::latest()->when(request()->search, function($authors) {
            $authors = $authors->where('name', 'like', '%'. request()->search . '%');
        })->paginate(5)->withQueryString();

        return view('author.view', compact('authors'));
    }

    public function create()
    {
    return view('author.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'alamat'   => 'required',
            'tanggal_lahir' => 'required',
    ]);

    $authors = Author::create([
        'name'     => $request->name,
        'alamat'   => $request->alamat,
        'tanggal_lahir' => $request -> tanggal_lahir,
    ]);

    if($authors){
     //redirect dengan pesan sukses
        return redirect()->route('postAuthor')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
     //redirect dengan pesan error
        return redirect()->route('postAuthor')->with(['error' => 'Data Gagal Diupdate!']);
    }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'alamat'   => 'required',
            'tanggal_lahir' => 'required',
    ]);
    
  //get data post by ID
    $authors = Author::findOrFail($request->id);

        $authors->update([
            'name'     => $request->name,
            'alamat'   => $request->alamat,
            'tanggal_lahir' => $request -> tanggal_lahir,
        ]);

    if($authors){
     //redirect dengan pesan sukses
        return redirect()->route('postAuthor')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
     //redirect dengan pesan error
        return redirect()->route('postAuthor')->with(['error' => 'Data Gagal Diupdate!']);
    }
    }


    public function destroy($id)
    {
        $authors = Author::where('id', '=', $id)->delete();

        return redirect('/postAuthor')->with('alert', 'Book has been deleted!');
    }

    public function edit($id)
    {
        $authors = Author::where('id', '=', $id)->first();
        return view('author.edit', [
            'authors' => $authors
        ]);
    }
}

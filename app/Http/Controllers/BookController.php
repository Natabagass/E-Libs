<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Stakeholder;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function read($id){
        $books = Book::where('id', $id)->get();

        return view('pages.readBook', [
            'books' => $books
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'nim' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required',
            'hp' => 'required|starts_with:62|numeric',
            'line' => 'required|not_regex:(@)',
        ];

        $validatedData = $request->validate($rules);

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/dashboard')->with('message', 'Data diri sudah di update');
    }

    public function index()
    {   
        $user = auth()->user();

        if ($user->nim == null) {
            return redirect()->route('pendataan')
                ->with('message', 'Mohon lengkapi data anda terlebih dahulu');
        }

        $stakeholders = Stakeholder::latest();

        if(request('search')){
            $stakeholders->where('name', 'like', '%' . request('search') . '%');
        }

        $testimonials = Testimonial::get();

        $data = [
            'name' => $user->name,
            'stakeholders' => $stakeholders->paginate(10)->withQueryString(),
            'testimonials' => $testimonials
        ];

        return Inertia::render('Stakeholder', $data);
    }

    public function rak(Stakeholder $stakeholder)
    {
        $categories = Category::where('stakeholder_id', $stakeholder->id)->latest();

        if(request('search')){
            $categories->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('author', 'like', '%' . request('search') . '%');
        }

        return Inertia::render('Rak', [
            'name' => auth()->user()->name,
            'categories' => $categories->paginate(10)->withQueryString(),
        ]);
    }

    public function show(Category $category)
    {
        $books = Book::where('category_id', $category->id)->latest();

        if(request('search')){
            $books->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('author', 'like', '%' . request('search') . '%');
        }

        return Inertia::render('LandingPage', [
            'name' => auth()->user()->name,
            'books' => $books->paginate(10)->withQueryString(),
            'categories' => Category::all()
        ]);
    }
    
    public function detail(Book $book)
    {
        $book = Book::where('id', $book->id)->first();
        return Inertia::render('DetailBuku', [
            'name' => auth()->user()->name,
            'book' => $book,
            'categories' => Category::all()
        ]);
    }
}
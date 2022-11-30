<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest();

        if(request('search')){
            $categories->where('name', 'like', '%' . request('search') . '%');
        }

        return Inertia::render('Admin/AdminCategory', [
            'name' => auth()->user()->name,
            'categories' => $categories->paginate(10)->withQueryString()
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        Category::create($validatedData);

        return redirect('/admin/category')->with('message', 'New category has been added!');
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories|max:255',
        ];

        $validatedData = $request->validate($rules);

        Category::where('id', $request->id)->update($validatedData);

        return redirect('/admin/category')->with('message', 'Category has been updated!');
    }

    public function delete(Request $request)
    {     
        $categories = DB::table('categories')->where('id', '=', $request->id)->get();

        if ($categories->count() > 0){
            DB::table('categories')->where('id', '=', $request->id)->delete();
        } else {
            return redirect('/admin/category')->with('message', 'Category not yet deleted!');
        }

        return redirect('/admin/category')->with('message', 'Category has been deleted!');
    }
}
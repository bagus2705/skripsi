<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Validation\Rules\Can;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'categories'=>Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);
        Kategori::create($validatedData);
        return redirect('/dashboard/categories')->with('success', 'Category Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori $category)
    {
        $rules = [
            'name' => 'required|max:255'
        ];
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);

        kategori::where('id', $category->id)->update($validatedData);
        return redirect('/dashboard/categories')->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategori $category)
    {

        Kategori::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category Deleted');
    }

    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kategori::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Script;
use App\Models\Kategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.scripts.index', [
            'scripts' => Script::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.scripts.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:scripts',
            'image' => 'image|file|max:5000',
            'kategori_id' => 'required',
            'pengarang' => 'string|max:255',
            'lokasi_ditemukan' => 'string',
            'tahun_ditemukan' => 'nullable|integer|min:1|max:' . date('Y'), 
            'bahasa' => 'max:20',
            'detail' => 'required',
            'transkrip' => 'string',
            'translasi' => 'string'   
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/script-images');
        }

        Script::create($validatedData);

        return redirect('/dashboard/scripts')->with('success', 'Script Added');
    }


    /**
     * Display the specified resource.
     */
    public function show(Script $script)
    {
        return view('dashboard.scripts.show', [
            'script' => $script
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Script $script)
    {
        return view('dashboard.scripts.edit', [
            'script' => $script,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Script $script)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5000',
            'kategori_id' => 'required',
            'pengarang' => 'string|max:255',
            'lokasi_ditemukan' => 'string|max:255',
            'tahun_ditemukan' => 'nullable|integer|min:1|max:' . date('Y'), 
            'bahasa' => 'string|max:255',
            'detail' => 'required',
            'transkrip' => 'string', 
            'translasi' => 'string'   
        ];

        if ($request->slug != $script->slug) {
            $rules['slug'] = 'required|unique:scripts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($script->image) {
                Storage::delete($script->image);
            }
            $validatedData['image'] = $request->file('image')->store('public/script-images');
        }

        Script::where('id', $script->id)->update($validatedData);

        return redirect('/dashboard/scripts')->with('success', 'Script Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Script $script)
    {
        if ($script->image) {
            Storage::delete($script->image);
        }

        Script::destroy($script->id);

        return redirect('/dashboard/scripts')->with('success', 'Script Deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Script::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
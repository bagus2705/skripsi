<?php

namespace App\Http\Controllers;

use App\Models\Script;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class DashboardScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $scripts = Script::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->paginate(15);

        return view('dashboard.scripts.index', [
            'scripts' => $scripts,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.scripts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required|unique:scripts',
            'image' => 'image|file|max:1000|nullable',
            'category_id' => 'required',
            'pengarang' => 'nullable|max:50',
            'lokasi' => 'nullable|max:50',
            'tahun' => 'nullable|integer|min:1|max:' . date('Y'),
            'bahasa' => 'nullable|max:50',
            'detail' => 'required',
            'transliterasi' => 'nullable|string',
            'translasi' => 'nullable|string'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/script-images');
        }

        Script::create($validatedData);

        return redirect('/dashboard/scripts')->with('success', 'Naskah Added');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Script $script)
    {
        return view('dashboard.scripts.edit', [
            'script' => $script,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Script $script)
    {
        $rules = [];

        if (Gate::allows('admin')) {
            $rules = [
                'title' => 'required|max:100',
                'slug' => 'required|unique:scripts,slug,' . $script->id,
                'category_id' => 'required',
                'pengarang' => 'nullable|max:50',
                'lokasi' => 'nullable|max:50',
                'tahun' => 'nullable|integer|min:1|max:' . date('Y'),
                'bahasa' => 'nullable|max:50',
                'detail' => 'required',
                'image' => 'image|file|max:1024',
                'transliterasi' => 'nullable|string',
                'translasi' => 'nullable|string'
            ];
        } elseif (Gate::allows('filologis')) {
            $rules = [
                'transliterasi' => 'nullable|string',
                'translasi' => 'nullable|string'
            ];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($script->image) {
                Storage::delete($script->image);
            }
            $validatedData['image'] = $request->file('image')->store('script-images');
        }

        $script->update($validatedData);

        return redirect('/dashboard/scripts')->with('success', 'Naskah berhasil diubah!');
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

        return redirect('/dashboard/scripts')->with('success', 'Naskah Deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Script::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

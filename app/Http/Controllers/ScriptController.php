<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Script;
use App\Models\Category;

class ScriptController extends Controller
{
    public function index()
    {
        $title = '';
        $categories = Category::orderBy('name', 'asc')->get();
        $scripts = Script::orderBy('title')
            ->filter(request(['search', 'category', 'pengarang', 'lokasi_ditemukan', 'tahun_ditemukan', 'bahasa']))
            ->paginate(15)
            ->withQueryString();

        $lokasi_ditemukan = $scripts->unique('lokasi_ditemukan')->sortBy('lokasi_ditemukan');
        $tahun_ditemukan = $scripts->unique('tahun_ditemukan')->sortBy('tahun_ditemukan');
        $bahasa = $scripts->unique('bahasa')->sortBy('bahasa');

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title .= ' in ' . $category->name;
        }

        return view('scripts', [
            "title" => "All Naskah" . $title,
            "scripts" => $scripts,
            "categories" => $categories,
            "lokasi_ditemukan" => $lokasi_ditemukan,
            "tahun_ditemukan" => $tahun_ditemukan,
            "bahasa" => $bahasa
        ]);
    }

    public function show(Script $script)
    {
        return view('script', [
            "title" => "Single Script",
            "script" => $script
        ]);
    }
}

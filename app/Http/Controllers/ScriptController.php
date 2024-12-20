<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Script;
use App\Models\Category;
use App\Models\User;

class ScriptController extends Controller
{
    public function index()
    {
        $title = '';
        $categories = Category::orderBy('name', 'asc')->get();
        $all = Script::orderBy('title')
            ->filter(request(['search', 'category', 'lokasi', 'tahun', 'bahasa']))
            ->paginate(200)
            ->withQueryString();

        $scripts = Script::orderBy('title')
            ->filter(request(['search', 'category', 'lokasi', 'tahun', 'bahasa']))
            ->paginate(15)
            ->withQueryString();

        $lokasi = $all->unique('lokasi')->sortBy('lokasi');
        $tahun = $all->unique('tahun')->sortBy('tahun');
        $bahasa = $all->unique('bahasa')->sortBy('bahasa');

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title .= ' di ' . $category->name;
        }

        return view('scripts', [
            "title" => "Semua Naskah" . $title,
            "scripts" => $scripts,
            "categories" => $categories,
            "lokasi" => $lokasi,
            "tahun" => $tahun,
            "bahasa" => $bahasa
        ]);
    }

    public function show(Script $script)
    {
        return view('script', [
            "title" => "Naskah Satuan",
            "script" => $script
        ]);
    }
}

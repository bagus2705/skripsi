<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Script;
use App\Models\Kategori;

class ScriptController extends Controller
{
    public function index()
    {
        $title = '';
        $kategoris = Kategori::all()->sortBy('name');
        $scripts = Script::latest()->filter(request(['search', 'kategori', 'pengarang', 'lokasi_ditemukan', 'tahun_ditemukan', 'bahasa']))->paginate(15)->withQueryString();

        $lokasi_ditemukan = $scripts->unique('lokasi_ditemukan')->sortBy('lokasi_ditemukan');
        $tahun_ditemukan = $scripts->unique('tahun_ditemukan')->sortBy('tahun_ditemukan');
        $bahasa = $scripts->unique('bahasa')->sortBy('bahasa');

        if (request('kategori')) {
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $title .= ' in ' . $kategori->name;
        }

        return view('scripts', [
            "title" => "All Scripts" . $title,
            "active" => 'scripts',
            "scripts" => $scripts,
            "kategoris" => $kategoris,
            "lokasi_ditemukan" => $lokasi_ditemukan,
            "tahun_ditemukan" => $tahun_ditemukan,
            "bahasa" => $bahasa
        ]);
    }


    public function show(Script $script)
    {
        return view('script', [
            "title" => "Single Post",
            "active" => 'script',
            "script" => $script
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Script;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $scriptCount = Script::count();
        $categoryCount = Category::count();

        $bookmarkCount = Auth::user() ? Auth::user()->bookmarks()->count() : 0;

        return view('dashboard.index', [
            'scriptCount' => $scriptCount,
            'categoryCount' => $categoryCount,
            'bookmarkCount' => $bookmarkCount
        ]);
    }
}

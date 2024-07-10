<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Script;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bookmarks = $user->bookmarks()->with('category')->get();
        return view('dashboard.bookmarks.index', compact('bookmarks'));
    }


    public function store(Script $script)
    {
        $user = auth()->user();
        $user->bookmarks()->attach($script->id);

        return back()->with('success', 'Script bookmarked successfully.');
    }

    public function destroy(Script $script)
    {
        $user = auth()->user();
        $user->bookmarks()->detach($script->id);

        return back()->with('success', 'Bookmark removed successfully.');
    }
}

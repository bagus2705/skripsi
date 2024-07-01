<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        $categories = Category::all()->sortBy('name');

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title .= ' in ' . $category->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category','excerpt','body']))->paginate(7)->withQueryString(),
            "categories" => $categories
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}

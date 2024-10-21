<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        BlogPost::create($post);
        return redirect()->route('blog.index')->with('success', 'Post created successfully.');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function findAll()
    {
        $posts = BlogPost::all();
        return view('blog.index', compact('posts'));
    }
}
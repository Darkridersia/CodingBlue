<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function create()
    {
        if (Gate::allows('isAuthor')) {
            dd('Author allowed');
        } else {
            dd('You are not an Author');
        }
    }

    public function edit()
    {
        if (Gate::allows('isAuthor')) {
            dd('Author allowed');
        } else {
            dd('You are not an Author');
        }
    }

    public function delete()
    {
        if (Gate::allows('isAdmin')) {
            dd('Admin is allowed');
        } else {
            dd('You are not an Admin');
        }
    }

    // Policies
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show()
    {
        $posts = Post::all();

        return view('posts.show', ['posts' => $posts]);
    }

    // the post create function can't be created bcs the above got one more create function

    public function store(Request $req)
    {
        $posts = Post::create(($req->all()));

        return redirect()->route('posts.showStore');
        // return view('posts.createForm', ['posts' => $posts]);
    }

    public function showStore()
    {
        return view('posts.createForm');
    }

    // the post edit function can't be created bcs the above got one more create function

    public function update()
    {
        $posts = Post::all();

        return view('posts.update', ['posts' => $posts]);
    }

    public function destroy()
    {
        $posts = Post::all();

        return view('posts.destroy', ['posts' => $posts]);
    }

}

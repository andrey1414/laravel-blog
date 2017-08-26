<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;


class PostController extends Controller
{
    public function get($id)
    {
        $post = Posts::findOrFail(intval($id));
        return view('post/index', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('post.create');
        /*
        if($request->user()->can_post()) {
            return view('posts.create');
        } else {
            return redirect('/')->withErrors('У вас недостаточно прав');
        }
        */
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required',
        ]);
        $posts = new Posts;
        $posts->title = $request->title;
        $posts->body = $request->body;
        if ($posts->save()) {
            return redirect('/');
        } else {
            return back()->withInput();
        }
    }
}
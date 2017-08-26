<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Posts;



class HomeController extends Controller
{

    /**
     * Отклик на запрос GET /users
     */
    public function index()
    {

        $posts = Posts::get();
        return view('index', [
            'posts' => $posts
        ]);
    }
}
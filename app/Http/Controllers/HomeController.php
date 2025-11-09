<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use App\Category;


class HomeController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
        						->with('posts_count', Post::all()->count())
        						->with('users_count', User::all()->count())
        						->with('categories_count', Category::all()->count())
        						->with('trashed_count', Post::onlyTrashed()->get()->count());
    }
}

<?php

namespace main\Http\Controllers;

use Illuminate\Http\Request;
use main\Http\Requests;
use main\Post;

class BlogController extends Controller
{	
	protected $pagelimit = 3;

    public function index()
    {
        $posts = Post::with('author')->latestfirst()->simplePaginate($this->pagelimit);
        return view("blog.index", compact('posts'));
    }
}

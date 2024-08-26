<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function singleBlog($id)
    {
        $post = Blog::find($id);
        return view('news-single', compact('post'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function whoWeAre()
    {
        return view('who_we_are');
    }

    public function missionVision()
    {
        return view('mission_vision');
    }

    public function structure()
    {
        return view('structure');
    }

    public function members()
    {
        return view('members');
    }

    public function management()
    {
        return view('management');
    }

    public function history()
    {
        return view('history');
    }

    public function news()
    {
        $blogs = Blog::latest()->paginate(8);
        return view('news', compact('blogs'));
    }
}

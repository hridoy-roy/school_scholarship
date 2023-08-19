<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Gallery;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'blogs' => Blog::take(6)->get(),
            'gallerys' => Gallery::get(),
            // 'sliders' => Slider::get(),
        ];
        return view('frontend.index', $data);
    }

    public function blog()
    {
        $data = [
            'blogs' => Blog::paginate(15),
        ];
        return view('frontend.blog', $data);
    }
    public function details(Blog $blog)
    {
        $data = [
            'blog' => $blog,
        ];
        return view('frontend.blog-details', $data);
    }


    





}

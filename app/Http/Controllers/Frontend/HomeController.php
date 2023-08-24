<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Counter;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Slider;
use App\Models\Member;
use App\Models\Ad;
use App\Http\Controllers\Controller;
use App\Models\Sponsor;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'blogs' => Blog::take(6)->get(),
            'gallerys' => Gallery::get(),
            'counters' => Counter::first(),
            'history' => History::first(),
            'sponsor' => Sponsor::first(),
            'sliders' => Slider::get(),
            'members' => Member::get(),
            'ad' => Ad::first(),
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

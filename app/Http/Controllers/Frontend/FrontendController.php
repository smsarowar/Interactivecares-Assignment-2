<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }

    public function login(){
        return view('frontend.auth.login');
    }

    public function register(){
        return view('frontend.auth.register');
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $blogs=Post::all();
        return view('frontend.category.list',[
            'blogs'=>$blogs,
        ]);
//        return $category;
    }


}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $products = config('db.pasta');

        return view('pages.welcome', compact('products'));
     }

     public function aboutFun() {

        return view('pages.about');
     }

     public function blogFun() {
        $posts = config('db.posts');

        return view('pages.blog', compact('posts'));
     }
}

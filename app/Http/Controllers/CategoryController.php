<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function category(){
        return view('category.category');
    }
    function food(){
        return view('category.food');
    }
    function beauty(){
        return view('category.beauty');
    }
    function homecare(){
        return view('category.homecare');
    }
    function baby(){
        return view('category.baby');
    }
}


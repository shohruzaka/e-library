<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $cat = Category::all();
        return view('landing',['cat'=>$cat]);
    }
    public function adminka(){
        $cat = Category::all();
        return view('dashboard',['cat'=>$cat]);
    }
}

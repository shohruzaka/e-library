<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function create() {
    return view('category.create');
   } 

   public function store(Request $request){
    $request->validate([
        'cat_name' => 'required|unique:category',
    ]);
    $res = Category::create($request);

    if($res){
       return redirect()->route('cabinet')->with('success',"Maqola xatosiz qo'shildi"); 
    }

   }
}

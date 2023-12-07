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
        'cat_name' => 'required|unique:categories',
    ]);
    Category::create($request->all());
       return redirect()->route('adminka')->with('success',"Kategoriy xatosiz qo'shildi"); 
   }

   public function show()
   {
      $category=Category::all();

      return;
   }

   public function destroy($id){
      Category::destroy($id);
       return redirect()->route('adminka')->with('success',"Kategoriya o'chirildi !"); 
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list()
    {
        $cat = Category::all();
        return view('admin.category.list', ['cat' => $cat]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|unique:categories',
        ]);
        Category::create($request->all());
        return redirect()->route('category.list')->with('success', "Kategoriy xatosiz qo'shildi");
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.category.edit', ['cat' => $cat]);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category.list')->with('success', "Kategoriya o'chirildi !");
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'required|unique:categories,cat_name,' . $id,
        ]);
        Category::find($id)->update($request->all());
        return redirect()->route('category.list')->with('success', "Kategoriy xatosiz yangilandi");
    }
}

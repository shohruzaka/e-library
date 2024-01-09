<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $cat = Category::all();
        $books = Books::paginate(3);
        return view('index', ['cat' => $cat, 'books' => $books]);
    }

    public function login()
    {
        return view('pages.login');
    }

    public function auth()
    {
       return view('admin.index');
    }

    public function adminka()
    {
        $cat = Category::all();
        return view('dashboard', ['cat' => $cat]);
    }

    public function download($id)
    {
        // dd($id);
        $file = Books::find($id);
        $file->increment('downloads', 1);

        $f_path = storage_path('app/' . $file->file_path);

        return response()->download($f_path);
        // return Storage::download($f_path);
    }
}

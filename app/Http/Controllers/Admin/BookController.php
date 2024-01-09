<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function list()
    {
        $books = Books::paginate(3);
        return view('admin.book.list', ['books' => $books]);
    }
    public function create()
    {
        $cat = Category::all();
        return view('admin.book.create', ['cat' => $cat]);
    }

    public function edit($id)
    {
        $book = Books::find($id);
        $cat = Category::pluck('cat_name', 'id')->all();
        return view('admin.book.edit', ['book' => $book, 'cat' => $cat]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'book_name' => 'required',
            'authors' => 'required',
            'lang' => 'required|in:Uz,Eng,Ru',
            'pub_date' => 'required',
            'category_id' => 'required|integer',
            // 'fayl' => 'file|required|mimes:pdf,doc,docx,rtf'
        ]);
        dd($id);
    }

    public function store(Request $request)
    {
        //   dd($request);
        $request->validate([
            'book_name' => 'required',
            'authors' => 'required',
            'lang' => 'required|in:Uz,Eng,Ru',
            'pub_date' => 'required',
            'category_id' => 'required|integer',
            'fayl' => 'file|required|mimes:pdf,doc,docx,rtf'
        ]);

        $data = $request->all();

        if ($request->hasFile('fayl')) {
            $folder = Category::find($data['category_id']);
            $or_name = date('dmY').'-'.$request->file('fayl')->getClientOriginalName();
            $data['fayl'] = $request->file('fayl')->storeAs("public/books/{$folder['cat_name']}",$or_name);
            $data['filesize'] = Storage::size($data['fayl']) / 1048576;
        }
        $book = Books::create([
            'title' => $data['book_name'],
            'authors' => $data['authors'],
            'lang' => $data['lang'],
            'pub_date' => $data['pub_date'],
            'file_path' => $data['fayl'],
            'filesize' => $data['filesize'],
            'cat_id' => $data['category_id']
        ]);
        if ($book) {
            return redirect()->route('book.list')->with('success', "Adabiyot qo'shildi");
        }
    }

    public function destroy($id)
    {
        if (Books::destroy($id)) {
            return redirect()->route('book.list')->with('success', "Adabiyot o'chirildi");
        }
    }
}

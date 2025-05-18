<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aphorism;

class AphorismController extends Controller
{
    public function list()
    {
        // Fetch all aphorisms from the database
        $aphorisms = Aphorism::paginate(15);
       
        return view('admin.aphorism.list', ['aphorisms' => $aphorisms]);
        
    }

    public function create()
    {
        return view('admin.aphorism.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'text' => 'required|string|max:1000',
        'author' => 'nullable|string|max:255',
    ]);

        Aphorism::create($request->all());
        return redirect()->route('aphorism.list')->with('success', 'Aphorism created successfully.');
    }

    public function edit($id)
    {
        // Find the aphorism by ID and pass it to the edit view
        // $aphorism = Aphorism::findOrFail($id);
        return view('admin.aphorism.edit', compact('aphorism'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the aphorism
        // $aphorism = Aphorism::findOrFail($id);
        // $aphorism->update($request->all());
        return redirect()->route('aphorism.list')->with('success', 'Aphorism updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the aphorism
        // $aphorism = Aphorism::findOrFail($id);
        // $aphorism->delete();
        return redirect()->route('aphorism.list')->with('success', 'Aphorism deleted successfully.');
    }
}

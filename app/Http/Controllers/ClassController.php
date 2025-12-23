<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;

class ClassController extends Controller
{
    // List all classes
    public function index()
    {
        $classes = SchoolClass::all(); // make sure SchoolClass correct hai
        return view('classes.index', compact('classes'));
    }


    // Show create form
    public function create()
    {
        return view('classes.create');
    }

    // Save new class
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|unique:classes,class_name|max:50'
        ]);

        SchoolClass::create([
            'class_name' => $request->class_name
        ]);

        return redirect()->route('classes.index')->with('success', 'Class added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $class = SchoolClass::findOrFail($id);
        return view('classes.edit', compact('class'));
    }

    // Update class
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => 'required|max:50|unique:classes,class_name,'.$id
        ]);

        $class = SchoolClass::findOrFail($id);
        $class->update([
            'class_name' => $request->class_name
        ]);

        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    // Delete class
    public function destroy($id)
    {
        $class = SchoolClass::findOrFail($id);
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}

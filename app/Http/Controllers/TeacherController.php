<?php
 
// app/Http/Controllers/TeacherController.php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Display all tests
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests'));
    }

    // Show form to create a new test
    public function create()
    {
        return view('tests.create');
    }

    // Store the newly created test
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'title' => 'required|string',
            'date' => 'required|date',
            'total_marks' => 'required|integer',
        ]);

        // Create the test in the database
        Test::create([
            'subject' => $request->subject,
            'title' => $request->title,
            'date' => $request->date,
            'total_marks' => $request->total_marks,
        ]);

        return redirect()->route('tests.index')->with('success', 'Test created successfully!');
    }
}

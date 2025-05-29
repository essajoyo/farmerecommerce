<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    
    public function index()
    {
        return view('admin.class.class');
    }

    
   
    
    public function store(Request $request)
    {    
        $request->validate([
            'name'=>'required'
        ]);    
        $data = new Classes();
        $data->name = $request->name;
        $data->save();

        return redirect()->route('class.create')
                         ->with('success', 'class added successfully.');
    }
    


    function read(){     
       
        $data['class']=Classes::get();
       
        return view('admin.class.class_list',$data);
        
    }



    public function show(Classes $classes)
    {
       
    }

    
    public function edit(Classes $classes)
    {
        //
    }

    
    public function update(Request $request, Classes $classes)
    {
        //
    }

    
    public function destroy(Classes $classes)
    {
        //
    }
}

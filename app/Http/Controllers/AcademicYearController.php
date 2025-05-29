<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYear;


class AcademicYearController extends Controller
{
    public function index()
    {
        return view('admin.academic_year');
    }
    public function table()
    {
        return view('admin.table');
    }

    public function store(Request $request)
    {
       
           
        $data = new AcademicYear();
        $data->name = $request->name;
        $data->save();

        return redirect()->route('academic-year.create')
                         ->with('success', 'Academic year added successfully.');
    }
    function read(){     
       
        $data['academic_year']=AcademicYear::get();
       
        return view('admin.academic_year_list',$data);
        
    }
}

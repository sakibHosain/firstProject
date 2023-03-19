<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students']= Student::all();
        return view("welcome",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data["editData"] = "";
        return view("add",$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->reg = $request->reg;
        if ($request->hasFile('image')) {
            //insert that image
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filename);
            $student->image=$filename;
             
        }

        $student->save();
        return redirect()->route('view.student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['editData'] = Student::find($id);
        return view("add",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->reg = $request->reg;
        $student->save();
        return redirect()->route('view.student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}

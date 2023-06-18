<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('backend.course.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $course=new Course();
        $course->name=$request->name;
        $course->duration=$request->duration;
        $course->fee=$request->fee;
        $course->syllabus=$request->syllabus;
        $course->category_id=$request->category_id;

        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().$file->getClientOriginalName();
            $file->move('course-image',$newName);
            $course->image='course-image/'.$newName;
        }


        $course->save();
        return redirect()->back();
               
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

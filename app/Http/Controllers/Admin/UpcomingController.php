<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Upcoming;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $upcoming=Upcoming::all();
        return view('backend.upcoming.index',compact('upcoming'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $courses=Course::all();
        return view('backend.upcoming.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $upcoming=new Upcoming();
        $upcoming->course_id=$request->course_id;
        $upcoming->date=$request->date;
        $upcoming->time=$request->time;
        $upcoming->class_type=$request->class_type;
        $upcoming->save();
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
          $upcoming=Upcoming::find($id);
          $courses=Course::all();
          return view("backend.upcoming.edit",compact('upcoming','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $upcoming= Upcoming::find($id);
        $upcoming->course_id=$request->course_id;
        $upcoming->date=$request->date;
        $upcoming->time=$request->time;
        $upcoming->class_type=$request->class_type;
        $upcoming->update();
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

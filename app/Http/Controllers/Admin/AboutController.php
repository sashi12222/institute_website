<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $about=About::first();
        return view('backend.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //to save the record

        $about=new About();
        $about->title=$request->title;
        $about->description=$request->description;
        $about->save();
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
        $about=About::find($id);
        return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $about= About::find($id);
        $about->title=$request->title;
        $about->description=$request->description;
        $about->update();
        return redirect('/course');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

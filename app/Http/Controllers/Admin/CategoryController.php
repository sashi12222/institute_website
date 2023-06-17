<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $category=Category::all();

        return view('backend.category.index',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $category=new Category();
        $category->name=$request->name;
        if($request->hasFile('image'))
        {
            $filename=$request->image;
            $newName=time().$filename->getClientOriginalName();
            $filename->move('category-image',$newName);
            $category->image='category-image/'.$newName;
        }

        $category->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $category= Category::find($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       $category=Category::find($id);
       return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $category= Category::find($id);
        $category->name=$request->name;
        if($request->hasFile('image'))
        {
            $filename=$request->image;
            $newName=time().$filename->getClientOriginalName();
            $filename->move('category-image',$newName);
            $category->image='category-image/'.$newName;
        }

        $category->update();
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

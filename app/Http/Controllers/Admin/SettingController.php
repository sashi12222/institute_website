<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('backend.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $setting=new Setting();
            $setting->name=$request->name;
            $setting->address=$request->address;
            $setting->contact=$request->contact; 
            $setting->email=$request->email;
            $setting->regno=$request->regno;


            //logo code goes like
            if($request->hasFile('logo')){
                $file=$request->logo;
                $newName=time().$file->getClientOrignialName();
                $file->move('images',$newName);
                $setting->logo='images/'.$newName;
            }
            $setting->save();
           $this->$request->session()->flash('message','Record saved successfully');
            return redirect();
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

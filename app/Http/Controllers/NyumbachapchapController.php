<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property;
use App\User;

class NyumbachapchapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return View('layouts.property');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $property= property::all();
      return view('layouts.property_table', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//validate the data before inserting into database
// $validateData = $request->validate([
//   'propertyName'=>'required|max:255',
//   'locationName'=>'required',
//   'description'=>'required',
//   'contact'=>'required',
// ]);

// update data in the Database
if(request('id')==""){
//inserting data into database
      $property= new property();
      $property->Name=request('propertyName');
      $property->location=request('locationName');
      $property->description=request('description');
      $property->contacts=request('contacts');
      $property->save();
      return redirect('/newtable');
    }
    else{
  $property= property::all()->find(request('id'));
  $property->Name=request('propertyName');
  $property->location=request('locationName');
  $property->description=request('description');
  $property->contacts=request('contacts');
  $property->save();
  return redirect('/property_table');
    }
  } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $property= property::all();
      return view('layouts.property_table', compact('property'));
        //return view('layouts.property_table');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
      $login= new login();
      $login->Email=request('emailAddress');
      $login->password=request('password');
      $login->save();
      return redirect('/users');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $property=property::all()->find($id);
      return view('layouts.property', compact('property'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $property=property::all()->find($id);
      $property->delete();
      return redirect('/property_table');
    }
     public function go()
    {
       $property= property::all();
      return view('layouts.property_table', compact('property'));
    }
    
      public function getAlbum($id)
  {
      $album = Album::with('Photos')->find($id);
      $albums = Album::with('Photos')->get();
      //dd($album);
      return view('album', ['album'=>$album, 'albums'=>$albums]);
      //->with('album',$album);
  }
    
}

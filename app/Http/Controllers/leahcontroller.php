<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//include leah
use App\leah;

class leahcontroller extends Controller
{
  public function lister(){
    $all = Leah::all();
    return view('leah.all',['rows' => $all]);
  }

  public function add(Request $request){
    //validation
    $this->validate($request, [
      'lname' => 'required|max:5'
    ]);

    //save
    // Leah::create(['lname' => $request->get('lname').'w1']);

    //way include_one
    $l = new Leah();

    //way one
    $l->leah_name = $request->get('lname').'w';
    $l->save();

    //redirect
    return redirect()->route('all');
  }
  public function($leah_id, $request){
    //get the record
    $record = leah::findOrFail( $leah_id);
    $record->delete();
    return redirect()->route('all')
  }
}

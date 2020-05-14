<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;
//use app\students;

class student extends Controller
{
    public function mainstudent(){
        return view('design/studentins');
    }
    public function store(Request $request){
        $std=new students;
        $std->name=$request->name;
        $std->address=$request->address;
        $std->email=$request->email;
        $std->phone=$request->phone;
        $std->save();
        return response()->json('$std');
        //return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use app\students;

class student extends Controller
{
    public function mainstudent(){
        return view('design/studentins');
    }
    public function displayy(){
        $data = students::all();
        //return response()->json($data);
        return view('design/stddisplay',compact('data'));
    }
    public function store(Request $request){
        try {
            $std=new students;
            $std->name=$request->name;
            $std->address=$request->address;
            $std->email=$request->email;
            $std->phone=$request->phone;
            $std->save();
            return redirect()->back()->with('success','data  insert successful!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error','data not insert successful!');
        }


    }
    public function stdview($id){
        $data=students::findorfail($id);
        return view('design/stdview')->with('love',$data);
    }
    public function stddelete($id){
        $data=students::findorfail($id)->delete();
        if ($data){
            return redirect()->back();
        }
    }
    public function stdedit($id){
        $data=students::findorfail($id);
        return view('design/stdedit')->with('love',$data);
    }

    public function updatestd(Request $request,$id){
        try {
            $std=students::findorfail($id);
            $std->name=$request->name;
            $std->address=$request->address;
            $std->email=$request->email;
            $std->phone=$request->phone;
            $std->save();
            return redirect()->route('display');
        }
        catch (\Exception $e){
            return redirect()->back();
        }
    }
}

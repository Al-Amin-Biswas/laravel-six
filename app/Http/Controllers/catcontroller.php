<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\MessageBag;

class catcontroller extends Controller
{
    public function carry(){
        return view('design/addcat');
    }
    public function storecatagory(Request $req){
       $validatedData = $req->validate([
           'cname' => 'required',
           'slug' => 'required',
       ]);

        $data =array();
        $data['name']=$req->cname;
        $data['status']=$req->slug;
        $catagory = DB::table('category')->insert($data);
        if($catagory){
         return redirect()->route('allcat')->with('alert');
        }else{
            echo"insert fail";
        }

        //return response()->json($data);
    }

    public function showcat(){
        $category=DB::table('category')->get();
        return view('design/allcat',compact('category'));
    }
    public function viewcat($id){
        //echo $id;
        $catego=DB::table('category')->where('id',$id)->first();
        //return response()->json($catego);
        return view('design/viewcat')->with('bindu',$catego);
    }
    public function deletecat($id){
        $category=DB::table('category')->where('id',$id)->delete();
        if($category){
            return redirect()->back();
        }else{
            echo"delate fail";
        }
    }
    public function updatecat($id){
        $category=DB::table('category')->where('id',$id)->first();
        //return response()->json($category);
        return view('design/editcat',compact('category'));
    }
    public function comup(Request $req,$id){
        $data =array();
        $data['name']=$req->cname;
        $data['status']=$req->slug;
        $catagory = DB::table('category')->where('id',$id)->update($data);
        if($catagory){
            return redirect()->route('allcat');
        }else{
            echo"update fail";
        }
    }


}

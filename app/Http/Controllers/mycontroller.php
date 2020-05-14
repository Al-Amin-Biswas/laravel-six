<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class mycontroller extends Controller
{
    public function home(){
        $category=DB::table('post')->paginate(3);
       // return view('design/home')->with('brinta',$category);
        return view('design/home')->with('jerin',$category);
       // return response()->json($category);
    }
    public function about(){
        return view('design/about');
    }
    public function contact(){
        return view('design/contact');
    }
}

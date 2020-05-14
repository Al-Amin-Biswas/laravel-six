<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class postcontroller extends Controller
{
    public function write(){
        $category=DB::table('category')->select('name','id')->get();
        return view('design/write',compact('category'));
    }
    public function addpost(Request $requ){

        if ($requ->hasFile('image')) {
            $image = $requ->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/fontend/images');
            $image->move($destinationPath, $name);
        }

        try {
            DB::table('post')->insert([
                'title'=>$requ->tile,
                'cat_id'=>$requ->categoryId,
                'details'=>$requ->details,
                'image'=>$name,

            ]);
            return redirect()->back()->with('success','data  insert successful!');

        }
        catch (\Exception $e)
        {
         //   return $e->getMessage();
            return redirect()->back()->with('error','data not insert successful!');
        }
    }

    public function displaypost(){
        $post=DB::table('post')
            ->join('category','post.cat_id','category.id')
            ->select('post.*','category.name')
            ->paginate(2);
        return view('design/allpost')->with('jerin',$post);
    }
    public function viewpost($id){
        $post=DB::table('post')
            ->join('category','post.cat_id','category.id')
            ->select('post.*','category.name')
            ->where('post.id',$id)
            ->first();
        //return response()->json($post);
        return view('design/viewpost')->with('data',$post);
    }
    public function deletewpost($id){
        $results = DB::table('post')->where('id',$id)->first();
        $image_path=public_path('/fontend/images/').$results->image;
        $post=DB::table('post')->where('id',$id)->delete();
        if ($post){
            @unlink($image_path);
            return redirect()->route('allpostt');

        }
    }
    public function editpost($id){
        $category=DB::table('category')->get();
        $post=DB::table('post')->where('id',$id)->first();
        return view('design/editpost',compact('category','post'));
        //return response()->json($post);
    }
    public function updatepost(Request $requ, $id){
        if ($requ->hasFile('image')) {
            $imageName = DB::table('post')->select('image')->where('id',$id)->first();
            if(File::delete(public_path('/fontend/images/').$imageName->image)) {
                $image = $requ->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/fontend/images');
                $image->move($destinationPath, $name);
            }
        }
        try {
            DB::table('post')->where('id',$id)->update([
                'title'=>$requ->tile,
                'cat_id'=>$requ->categoryId,
                'details'=>$requ->details,
                'image'=>$name,

            ]);
            return redirect()->route('allpostt');

        }
        catch (\Exception $e)
        {
            //   return $e->getMessage();
            return redirect()->route('allpostt');
        }
    }
}

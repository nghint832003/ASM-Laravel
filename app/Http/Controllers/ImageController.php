<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //

    public function list(){
        $image = DB::table('image')->select('id','img1','img2','img3','img4')->get();
        return view('admin.image.list',compact('image'));
    }

    public function add(){
        return view('admin.image.add');
    }

    public function handleAdd(Request $request){
        if($request->isMethod('POST')){
            if($request->hasFile('images') ){
                $images = $request->file('images');
                foreach($images as $image){
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
                    $imagesName[] = $imageName;
                }
            }
            $imageAdd = Image::create(['img1' => $imagesName[0], 'img2' =>$imagesName[1], 'img3' => $imagesName[2], 'img4' => $imagesName[3]]);
        }

        return redirect()->route('list-image');
    }

    public function edit(Request $request,$id){
        $image = Image::where('id',$id)->first();
        return view('admin.image.edit',compact('image'));
    }

    public function handleEdit(Request $request,$id){
            if($request->hasFile('images') ){
                $images = $request->file('images');
                foreach($images as $image){
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
                    $imagesName[] = $imageName;
                }
            }
            $result = Image::where('id',$id)->update(['img1' => $imagesName[0], 'img2' =>$imagesName[1], 'img3' => $imagesName[2], 'img4' => $imagesName[3]]);

        return redirect()->route('list-image');
    }

    public function delete($id){
        Image::where('id',$id)->delete();
        return redirect()->route('list-image');
    }
}

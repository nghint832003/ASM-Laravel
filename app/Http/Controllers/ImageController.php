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

    public function handleAdd(ImageRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('img1') || $request->hasFile('img2') || $request->hasFile('img3') || $request->hasFile('img4')){
                $image1 = $request->file('img1');
                $image2 = $request->file('img2');
                $image3 = $request->file('img3');
                $image4 = $request->file('img4');

                $params['img1'] = time() . '_' . $image1->getClientOriginalName();
                $params['img2'] = time() . '_' . $image2->getClientOriginalName();
                $params['img3'] = time() . '_' . $image3->getClientOriginalName();
                $params['img4'] = time() . '_' . $image4->getClientOriginalName();

                $uploadFile1 = $image1->move(public_path('uploads'),$params['img1']);
                $uploadFile2 =$image2->move(public_path('uploads',),$params['img2']);
                $uploadFile3 =$image3->move(public_path('uploads'),$params['img3']);
                $uploadFile4 =$image4->move(public_path('uploads'),$params['img4']);

            }

            $image = Image::create($params);
        }

        return redirect()->route('list-image');
    }

    public function edit(Request $request,$id){
        $image = Image::where('id',$id)->first();
        return view('admin.image.edit',compact('image'));
    }

    public function handleEdit(Request $request,$id){

            $params = $request->except('_token','_method');
            if($request->hasFile('img1') && $request->hasFile('img2') && $request->hasFile('img3') && $request->hasFile('img4')){
                $image1 = $request->file('img1');
                $image2 = $request->file('img2');
                $image3 = $request->file('img3');
                $image4 = $request->file('img4');

                $params['img1'] = time() . '_' . $image1->getClientOriginalName();
                $params['img2'] = time() . '_' . $image2->getClientOriginalName();
                $params['img3'] = time() . '_' . $image3->getClientOriginalName();
                $params['img4'] = time() . '_' . $image4->getClientOriginalName();

                $uploadFile1 = $image1->move(public_path('uploads'),$params['img1']);
                $uploadFile2 =$image2->move(public_path('uploads',),$params['img2']);
                $uploadFile3 =$image3->move(public_path('uploads'),$params['img3']);
                $uploadFile4 =$image4->move(public_path('uploads'),$params['img4']);
            }
            $result = Image::where('id',$id)->update($params);


        return redirect()->route('list-image');
    }

    public function delete($id){
        Image::where('id',$id)->delete();
        return redirect()->route('list-image');
    }
}

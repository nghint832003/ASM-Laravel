<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomtypeRequest;
use Illuminate\Http\Request;
use App\Models\Roomtype;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class RoomTypeController extends Controller
{
    //
    public function list(){
        $roomType = DB::table('room_type')->select('id','name','quantity_people','quantity_bed')->get();
        return view('admin.room_type.list',compact('roomType'));
    }

    public function add(){
        return view('admin.room_type.add');
    }

    public function handleAdd(RoomtypeRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $roomType = Roomtype::create($params);
        }

        return redirect()->route('list-roomtype');
    }

    public function edit(Request $request,$id){
        $room_type = Roomtype::where('id',$id)->first();
        return view('admin.room_type.edit',compact('room_type'));
    }

    public function handleEdit(Request $request,$id){
        $params = $request->except('_token','_method');
        $result = Roomtype::where('id',$id)->update($params);

        return redirect()->route('list-roomtype');
    }

    public function delete($id){
        Roomtype::where('id',$id)->delete();
        return redirect()->route('list-roomtype');
    }
}

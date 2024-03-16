<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list(){
        $room = DB::table('room')->select('id','name','status_room','price','roomType_id','address','description','id_image')->get();
        return view('admin.room.list',compact('room'));
    }

    public function inforRoom(){
        $room = DB::table('room')
                    ->join('image','room.id_image','=','image.id')
                    ->select('room.*','image.*')
                    ->get();
        return view('customer.index',compact('room'));
    }

    public function add(){
        $room_type = DB::table('room_type')->select('id','name')->get();
        $image = DB::table('image')->select('id')->get();
        return view('admin.room.add',compact('room_type','image'));
    }

    public function handleAdd(RoomRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $room = Room::create($params);
        }

        return redirect()->route('list-room');
    }

    public function edit(RoomRequest $request,$id){
        $room = Room::where('id',$id)->first();
        $room_type = DB::table('room_type')->select('id','name')->get();
        $image = DB::table('image')->select('id')->get();
        return view('admin.room.edit',compact('room','room_type','image'));
    }

    public function handleEdit(RoomRequest $request,$id){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $result = Room::where('id',$id)->update($params);
        }

        return redirect()->route('list-room');
    }

    public function delete($id){
        Room::where('id',$id)->delete();
        return redirect()->route('list-room');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Http\Requests\BillRequest;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //
    public function list(){
        $bill = DB::table('bill')->select('id','customer_id','room_id','booking_date','checkOut_date')->get();
        return view('admin.bill.list',compact('bill'));
    }

    public function add(BillRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $bill = Bill::create($params);

        }
        return redirect()->route('infor-room');
    }
}

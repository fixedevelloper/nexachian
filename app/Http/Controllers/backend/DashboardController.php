<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Lottory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    function dashboard(){
        return view('backend.dashboard');
    }
    function particpant(){
        $participants=Lottory::all();
        return view('backend.particpant',[
            "participants"=>$participants
        ]);
    }
    function sendLottory(Request $request){
        logger($request->get("numbers"));
        $lottery=new Lottory();
        $lottery->address=$request->get("address");
        $lottery->numbers=json_encode($request->get("numbers"));
        $lottery->date=date("Y-m-d");
        $lottery->save();
        return response()->json(['data' =>  $lottery, 'status'=> true]);
    }
}

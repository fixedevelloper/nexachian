<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Lottory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    function dashboard(){
        $arrays = [];
        $lottos = Lottory::all();
        foreach ($lottos as $lotto) {
            $vals = json_decode($lotto->numbers, true);
            if (is_array($vals)) {
                for ($i = 0; $i < sizeof($vals); $i++) {
                    $arrays[] = $vals[$i];
                }
            }

        }
        $values=[];
        $s_values=[];
        for ($i=1;$i<=30;$i++){
            $values[]=[
                "item"=>$i,
                "value"=> count(array_filter($arrays,function($value) use ($i) {return $i == $value;}))
            ];
            $s_values[]=count(array_filter($arrays,function($value) use ($i) {return $i == $value;}))
            ;
        }

        $array_column = array_column($values, 'value');
        array_multisort($array_column, SORT_DESC, $values);
        logger($values);
        return view('backend.dashboard',[
            "values"=>$values
        ]);
    }
    function my_tirage(){
        $address_session=Session::get("address_");
        $participants=Lottory::query()->where(['address'=>$address_session])->orderByDesc('id')->get();
        return view('backend.my_tirage',[
            "participants"=>$participants
        ]);
    }
    function particpant(){
        $participants=Lottory::query()->orderByDesc('id')->get();;
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

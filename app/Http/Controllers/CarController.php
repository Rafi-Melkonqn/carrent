<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Car;
use App\Image;
use App\Opinion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function getCarResult(){
        return view('carResult');
    }

    public function postCarOpinion(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'car_id' => 'required',
            'email' => 'required'
        ]);
        // Create new message
        $opinion = new Opinion;
        $opinion->name = $request->input('name');
        $opinion->email = $request->input('email');
        $opinion->car_id = $request->input('car_id');
        $opinion->opinion = $request->input('opinion');
        // Save Opinion
        $opinion->save();

        // Redirect
        return redirect('/')->with('success', 'Opinion Sent');
    }

    public function getCarOrder(){
        $citys = Agent::distinct()->get(['src']);
        return view('carOrder',compact('citys'));
    }
    public function getCarOrderStep1(Request $request){

        $controller = app(\App\Http\Controllers\CarController::class);

        $dateStart = Carbon::createFromDate($request->year,$request->month,$request->day, 'UTC');
        $dateEnd = Carbon::createFromDate($request->yearEnd,$request->monthEnd,$request->dayEnd, 'UTC');
        $length = $dateEnd->diffInDays($dateStart);
       $city = $request->city;
    $address = DB::table('images')
        ->Join('cars','cars.id', '=', 'images.id_car')
        ->join('agents','agents.id', '=', 'cars.agent_id')
        ->select('agents.src', 'cars.name', 'images.image','cars.price','cars.category','cars.id' )
        ->where('agents.src' , '=', $city)
        ->get();



        return view('step1',compact( 'address' , 'length', 'dateStart', 'dateEnd'));
//        return $controller->lastStep( $dateEnd , $dateStart , $length );
    }

    public function carInfo($id){
        $data = Car::findOrFail($id);
        $images= Image::all();
        return view('carInfo', compact('data','images'));

    }

    public function lastStep(Request $request , $id  ){
        $cars = Car::find($id);
    $data =([
        'name' => $request->name,
        'amount' => $request->amount,
        'image' => $request->image,
        'length' => $request->length,
        'dateEnd' => $request->dataEnd,
        'dateStart' => $request->dataStart
        ]);

        return view('successfulOrder', compact('data','cars'));
    }

    public function postCarOrder(Request $request , $id){
        return view('welcome')->with('success' , 'Successfully Order the agent reply to') ;
    }

}


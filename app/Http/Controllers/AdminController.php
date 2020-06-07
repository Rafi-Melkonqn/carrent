<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class AdminController extends Controller
{
    public function getCrudAgent(){
        $Agents = Agent::all();
        return view('admin.crudAgent', ['Agents' => $Agents]);
    }
    public function showAgent($id){
        $data = Agent::findOrFail($id);
        return view('admin/viewAgent', compact('data'));
    }
    public function showUploadAgent(){
        return view('admin.uploadeAgent');
    }

    public function editAgent($id){
        $data = Agent::findOrFail($id);
        return view('admin/editAgent', compact('data'));
    }
    public function destroyAgent($id){
        $agent = Agent::find($id);
        Storage::delete($agent->path);
        $agent->delete();
        return redirect('admin/crudAgent')->with('success' , 'Data is successfully delete');
    }
    public function updateAgent(Request $request,$id){

        $form_data = array(
            'name'  => $request->name ,
            'phone' => $request->phone,
            'address' => $request->address,
            'src' => $request->src,
            'email' => $request->email,
        );
        Agent::whereId($id)->update($form_data);
        return redirect('admin/crudAgent')->with('success' , 'Data is successfully updated') ;
    }
    public function storeFileAgent(Request $request)
    {
            $this->validate($request, [
                'name'        =>  'required',
                'email'       =>  'required|email' ,
                'phone'       =>  'required',
                'address'     =>  'required',
                'src'         =>  'required',

            ]);
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
        $pas = substr($random, 0, 10);
            $data = array(
                'name'      =>  $request->name,
                'pas'       => $pas
            );

//            Mail::to('web-tutorial@programmer.net')->send(new SendMail($data));

            $agents = new Agent;
            $agents->name = $request->name;
            $agents->phone = $request->phone;
            $agents->address = $request->address;
            $agents->src = $request->src;
            $agents->email = $request->email;
            $agents->password = Hash::make($pas);
            $agents->save();
            $Agents = Agent::all();
            return view('admin.crudAgent', ['Agents' => $Agents])
                ->with('success', 'You have successfully upload image.');
    }

    public function getNewCar(){
        $Image = Image::all();
        return view('admin.newCar', ['Image' => $Image]);
    }

    public function showAgentCar($id){
        $data = Image::findOrFail($id);
        return view('admin/viewAgentCar', compact('data'));
    }
    public function editAgentCar($id){

        $status = ['new','approved', 'annulled'];
        $data = Image::findOrFail($id);
        return view('admin/editAgentCar', compact('data','status'));
    }

    public function updateAgentCar(Request $request,$id){

        $form_data = array(

            'status' => $request->status,
        );
        Image::whereId($id)->update($form_data);
        return redirect('admin/newCar')->with('success' , 'Data is successfully updated') ;
    }

    public function destroyAgentCar($id){
        $image = Image::find($id);
        Storage::delete($image->path);
        $image->delete();
        return redirect('admin/newCar')->with('success' , 'Data is successfully delete');
    }

    public function getAdvertising(){
        return view('admin.createAdvertising');
    }


    public function getOpinion(){
        $opinions = Opinion::all();

        return view('admin.reviews')->with('opinions', $opinions);
    }
    public function getCreateNews(){
        return view('admin.createNews');
    }

}

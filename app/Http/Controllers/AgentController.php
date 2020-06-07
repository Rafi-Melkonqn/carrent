<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    public function getConfirmRequest(){
        return view('agents/confirmRequest');
    }
    public function getMyCar(){
        $Images = Image::all();
        $cars = Car::all();
        return view('agents.myCar', ['Images' => $Images, 'cars' => $cars]);
    }

    public function showUploadForm($id){
        $data = Car::findOrFail($id);

        return view('agents/upload',compact('data'));
    }

    public function showUploadFormCar(){
        $categories = ['economy', 'premium', 'SUV', 'estate', 'standarted'];
        return view('agents/uploadCar', compact('categories'));
    }

    public function storeFile(request $request)
    {

        request()->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        if ($request->hasFile('file')) {

            $imageName = $request->file->getClientOriginalName();
            $imagesize = $request->file->getClientSize();
            $request->file->storeAs('public/postCrudCar/images', $imageName);


           $images = new Image;
           $images->name = $request->name_image;
           $images->image = $imageName;
           $images->id_car = $request->car_id;
           $images->id_agent = $imagesize;

           $images->save();
           $Images = Image::all();
           $cars = Car::all();
            return redirect()->to('agents/myCar')
                ->with('success', 'You have successfully upload image.');

        }
        return $request->all();
    }

    public function storeFileCar(request $request)
    {
        $this->validate($request, [
            'car_name'        =>  'required',
            'price'       =>  'required' ,
        ]);

            $cars = new Car;
            $cars->name = $request->car_name;
            $cars->price = $request->price;
            $cars->category = $request->category;
            $cars->agent_id = $request->price;
            $cars->extras_id = $request->price;

            $cars->save();
            $Images = Image::all();
            $cars = Car::all();
            return view('agents.myCar', ['Images' => $Images ],compact('cars'))
                ->with('success', 'You have successfully upload image.');



    }

    public function show($id){
           $data = Image::findOrFail($id);
           return view('agents/view', compact('data'));
    }
    public function showCar($id){
        $data = Car::findOrFail($id);
        $images= Image::all();
        return view('agents/viewCar', compact('data' , 'images'));
    }

    public function edit($id){
        $data = Image::findOrFail($id);
        return view('agents/edit', compact('data'));
    }

    public function editCar($id){
        $categories = ['economy', 'premium', 'SUV', 'estate', 'standarted'];
        $data = Car::findOrFail($id);
        return view('agents/editCar', compact('data' , 'categories'));
    }

    public function update(Request $request,$id){

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '')
        {
            $request->validate([
                'name'  => 'required' ,
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
            $image_name = rand() . '.' . $image->getClientOriginalName();
            $image->storeAs('public/postCrudCar/images', $image_name);
        }
        else
        {
            $request->validate([
                'name' => 'required'
            ]);
        }

        $form_data = array(
            'name'  => $request->name ,
            'image' => $image_name
        );
        Image::whereId($id)->update($form_data);
        return redirect('agents/myCar')->with('success' , 'Data is successfully updated') ;
    }

    public function updateCar(Request $request,$id){
        $form_data = array(
            'name'   => $request->name,
            'category' => $request->category,
            'price'  => $request->price,
        );
        Car::whereId($id)->update($form_data);
        return redirect('agents/myCar')->with('success' , 'Data is successfully updated') ;
    }

    public function destroyImg($id){
    $image = Image::find($id);
    Storage::delete($image->path);
    $image->delete();
    return redirect('agents/myCar')->with('success' , 'Data is successfully delete');
    }

    public function destroyCar($id)
    {
        $cars = Car::find($id);
        Storage::delete($cars->path);
        $cars->delete();
        return redirect('agents/myCar')->with('success', 'Data is successfully delete');
    }

    public function getNews(){
        return view('agents/news');
    }

}


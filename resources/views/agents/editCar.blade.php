@extends('layouts.appAgent')

@section('content')
    <div align="right">
        <a href="/agents/myCar" class="btn btn-default">Back</a>
    </div>
    <br />
    <form method="post" action="{{route('agents.updateCar' , $data->id)}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{$data->name}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Price</label>
            <div class="col-md-8">
                <input type="text" name="price" value="{{$data->price}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label for="car_category">Enter Status</label>
            <select name="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category}}">
                        {{$category}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="update" class="btn btn-primary input-lg " value="update" />
        </div>

    </form>
@endsection

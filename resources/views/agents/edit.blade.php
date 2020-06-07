@extends('layouts.appAgent')

@section('content')
    <div align="right">
        <a href="/agents/myCar" class="btn btn-default">Back</a>
    </div>
    <br />
    <form method="post" action="{{route('agents.update' , $data->id)}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')
         <div class="form-group">
             <label class="col-md-4 text-right">Enter Name</label>
             <div class="col-md-8">
                 <input type="text" name="name" value="{{$data->name}}" class="form-control input-lg" />
             </div>
         </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Select Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
                <img width="100" src="../../storage/postCrudCar/images/<?= $data->image ?>" class="img-thumbnail" />
                <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
            </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="update" class="btn btn-primary input-lg " value="update" />
        </div>
    </form>
@endsection

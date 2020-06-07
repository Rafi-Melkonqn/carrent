@extends('layouts.appAdmin')

@section('content')
    <div align="right">
        <a href="/admin/crudAgent" class="btn btn-default">Back</a>
    </div>
    <br />
    @if(count($errors) > 0)
        <div class="alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
               @foreach($error->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('admin.updateAgent' , $data->id)}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{$data->name}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Phone</label>
            <div class="col-md-8">
                <input type="text" name="phone" value="{{$data->phone}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Address</label>
            <div class="col-md-8">
                <input type="text" name="address" value="{{$data->address}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Enter City</label>
            <div class="col-md-8">
                <input type="text" name="src" value="{{$data->src}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 text-right">Enter e-mail</label>
            <div class="col-md-8">
                <input type="email" name="email" value="{{$data->email}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="update" class="btn btn-primary input-lg " value="update" />
        </div>

    </form>
@endsection

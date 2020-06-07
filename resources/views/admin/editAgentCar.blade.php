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
    <form method="post" action="{{route('admin.updateAgentCar' , $data->id)}}" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="form-group">
            <label for="agent-image">Enter Status</label>
            <select name="status" class="form-control">
                @foreach($status as $status)
                <option value="{{$status}}">
                    {{$status}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="update" class="btn btn-primary input-lg " value="update" />
        </div>
    </form>
@endsection

@extends('layouts.appAdmin')

@section('content')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="/admin/crudAgent" class="btn btn-default">Back</a>
        </div>
        <br/>
        <h3>Name - {{ $data->name }}</h3>
        <h3>Phone - {{ $data->phone }}</h3>
        <h3>City - {{ $data->src }}</h3>
        <h3>Address - {{ $data->address }}</h3>
        <h3>E-mail - {{ $data->email }}</h3>

    </div>
@endsection

@extends('layouts.appAdmin')

@section('content')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="/admin/newCar" class="btn btn-default">Back</a>
        </div>
        <br/>
        <img width="100" src="../../storage/postCrudCar/images/<?= $data->image ?>" alt="<?= $data->image ?>">
        <h3>Name - {{ $data->name }}</h3>
        <h3>Status - {{ $data->status }}</h3>
        <h3>Id Car - {{ $data->id_car }}</h3>
        <h3>Id Agent - {{ $data->id_agent }}</h3>
    </div>
@endsection

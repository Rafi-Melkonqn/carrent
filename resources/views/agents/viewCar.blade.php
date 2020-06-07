@extends('layouts.appAgent')

@section('content')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="/agents/myCar" class="btn btn-default">Back</a>
        </div>
        <br/>
        <h3>Name Car - {{ $data->name }}</h3>
        <h3>Status - {{ $data->status }}</h3>
        <h3>Price - {{ $data->price }}</h3>
        <h3>Agent - {{ $data->agent_id }}</h3>
        <h3>Category - {{ $data->category }}</h3>
        <h3>Extras - {{ $data->extras_id }}</h3>
        @foreach($images as $image)
            @if($data->id == $image->id_car)
                <img width="100" src="../../storage/postCrudCar/images/<?= $image->image ?>" alt="<?= $image->image ?>">
                <h3>Name - {{ $image->name }}</h3>
                <h3>Status - {{ $image->status }}</h3>
            @endif
        @endforeach


    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ URL::previous() }}">Go Back</a>
        </div>
        <br/>
        <h3>{{ $data->name }}</h3>
        <h3>{{ $data->price }} лв.</h3>
        <h3>{{ $data->category }}</h3>
        @foreach($images as $image)
            @if($data->id == $image->id_car)
                <img width="100" src="../../storage/postCrudCar/images/<?= $image->image ?>" alt="<?= $image->image ?>">
            @endif
        @endforeach


    </div>
@endsection


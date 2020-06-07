@extends('layouts.appAgent')

@section('content')
    <div class="jumbotron text-center">
        <div align="right">
            <a href="/agents/myCar" class="btn btn-default">Back</a>
        </div>
        <br/>
        <img width="100" src="../../storage/postCrudCar/images/<?= $data->image ?>" alt="<?= $data->image ?>">
        <h3>Name - {{ $data->name }}</h3>
        <h3>Status - {{ $data->status }}</h3>
        <form action="{{ route('agentsImg.destroye', $data->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-car btn btn-danger btn-sm"   onclick="return confirm('Are you sure ?')" >
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </form>
    </div>
@endsection

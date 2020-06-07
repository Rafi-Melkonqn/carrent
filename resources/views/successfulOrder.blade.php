
@extends('layouts.app')

@section('content')
    @foreach($data as $dat)
    <?php dd($dat)?>
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new image</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('lastStep' , $cars) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="jumbotron text-center">
                            <div align="right">
                                <a href="{{ URL::previous() }}">Go Back</a>
                            </div>
                            <br/>
{{--                            <h3>{{ $data->name }}</h3>--}}
                            <h3> от {{ $data->dateEnd }} до {{ $data->dateStart }} </h3>
                            <h3>{{ $data->amount }} лв.</h3>
                            <h3>{{ $data->length }} дни</h3>
                            <img width="100" src="../../storage/postCrudCar/images/<?= $data->image ?>" alt="<?= $data->image ?>">
                            <div class="d-flex justify-content-around bd-highlight example-parent">
                                <div class=" h3 p-2 bd-highlight col-example">
                                    <input type="submit" class="nextStep btn btn-success btn-lg ">
                                </div>
                            </div>
                        </div>
                    </form>

@endsection


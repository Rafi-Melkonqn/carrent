@extends('layouts.appAgent')

@section('content')
    <h1>Моите снимки</h1>

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
                <form action="{{ route('upload.file', $data->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        Name<br>
                        <input type="hidden" id="car_id" name="car_id" value="{{$data->id}}">
                        <input type="text" name="name_image"><br>
                        <input type="file" name="file">
                        <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
{{--    <div class="panel-body">--}}
{{--        @if ($message = Session::get('success'))--}}
{{--            <div class="alert alert-success alert-block">--}}
{{--                <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </div>--}}
{{--            <img src="images/{{ Session::get('image') }}">--}}
{{--        @endif--}}
{{--        @if (count($errors) > 0)--}}
{{--            <div class="alert alert-danger">--}}
{{--                <strong>Whoops!</strong> There were some problems with your input.--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <form action="{{ route('crud.car.post') }}" method="POST" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <input type="file" name="image" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <button type="submit" class="btn btn-success">Upload</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection

@section('sidebarAgent')

@endsection

@extends('layouts.appAgent')

@section('content')
    <h1 class="p-3 mb-2  text-white"style="background-image:url('../storage/postCrudCar/images/wee.jpg');" >Моите коли</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <h2 class="panel-heading p-3 mb-2  text-white">Create new car</h2>
                        <div align="right" >
                            <a href="/agents/myCar" class=" btn btn-dark btn-outline-warning"role="button">Back</a>
                        </div>
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
                        <form action="{{ route('uploadCar.file') }}" method="post" class="form-horizontal p-3 mb-2  text-white bold" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            Car  Name<br>
                            <input type="text" name="car_name" ><br>
                            Price<br>
                            <input type="number" name="price"><br>
                            Category<br>
                            <div class="form-group">
                                <label for="car_category"></label>
                                <select name="category" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category}}">
                                            {{$category}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Create" class="btn btn-success input-lg ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('sidebarAgent')

@endsection

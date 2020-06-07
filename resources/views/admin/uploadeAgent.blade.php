@extends('layouts.appAdmin')

@section('content')
    <h1>Създаване на нов агент</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
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
                    <form action="{{ route('uploadAgent.file') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        Name<br>
                        <input type="text" name="name"><br>
                        Phone<br>
                        <input type="number" name="phone"><br>
                        Address<br>
                        <input type="text" name="address"><br>
                        City<br>
                        <input type="text" name="src"><br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                        </div>
                        <input type="submit" class="btn btn-success input-lg ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sidebarAdmin')

@endsection


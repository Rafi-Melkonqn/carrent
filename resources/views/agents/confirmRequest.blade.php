@extends('layouts.appAgent')

@section('content')
    <h1 class="p-3 mb-2  text-white"style="background-image:url('../storage/postCrudCar/images/wee.jpg');" >Заявки</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h2 class="panel-heading p-3 mb-2  text-white">Нова заявка от</h2>
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
                    <form  class="form-horizontal p-3 mb-2  text-white bold" >
                        <table class="table p-3 mb-2  text-white bold">
                            <tr>
                                <th>Name User</th>
                                <th>E-mail</th>
                                <th>Phone number</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="car_name" ></td>
                                <td><input type="text" name="price"></td>
                                <td><input type="number" name="price"></td>
                            </tr>
                            <tr>
                                <th>ID car</th>
                                <th>Car name</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><input type="number" name="price"></td>
                                <td><input type="text" name="price"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Period</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>From <input type="number" name="price"></td>
                                <td>To<input type="number" name="price"></td>
                                <td></td>
                            </tr>
                            <th>Total amount</th>
                            <th></th>
                            <th></th>
                            <tr>
                                <td><input type="number" name="price"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <div align="right" >
                            Message
                            <textarea name="message" placeholder="Enter Message Text"></textarea><br><br>
                            <input type="submit" value="Confirm" class="btn btn-success input-lg ">
                            <input type="submit" value="Refusal" class="btn btn-warning input-lg ">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sidebarAgent')

@endsection

@extends('layouts.appAdmin')

@section('content')
    <h1>Мнения на клиенти</h1>
    @if(count($opinions) > 0)
        @foreach($opinions as $opinion)
            <ul class="list-group mt-3">
                <li class="list-group-item">Name: {{$opinion->name}}</li>
                <li class="list-group-item">Email: {{$opinion->email}}</li>
                <li class="list-group-item">Car: {{$opinion->car_id}}</li>
                <li class="list-group-item">Message: {{$opinion->opinion}}</li>
                <li class="list-group-item">Status: {{$opinion->status}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebarAdmin')

@endsection



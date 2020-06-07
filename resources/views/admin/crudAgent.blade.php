@extends('layouts.appAdmin')

@section('content')
    <h1 class="p-3 mb-2  text-white"style="background-image:url('../storage/postCrudCar/images/wee.jpg');" >Създаване на агенти</h1>

    <table class="table">
        <tr class="p-3 mb-2 bg-dark text-white">
            <th width="100px">No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>e-mail</th>
            <th class="text-center" width="100px">
                <a href="{{ route('uploadAgent.file') }}" class="create-car btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>
        {{csrf_field()}}
        <?php $no = 1; ?>
        @foreach ($Agents as $kay=> $agent)
            <tr class="post{{$agent->id}} p-3 mb-2  text-white" style="background-image:url('../storage/postCrudCar/images/bridge-16.jpg');">
                <td>{{ $no++ }}</td>
                <td><?= $agent->name ?></td>
                <td><?= $agent->phone ?></td>
                <td><?= $agent->address?></td>
                <td><?= $agent->src ?></td>
                <td><?= $agent->email ?></td>
                <td>
                    <a href="{{ route('admin.viewAgent' , $agent->id) }}" class="show-car btn btn-info btn-sm" data-id="{{$agent->id}}" data-name="{{$agent->name}}" date-phone="{{$agent->phone}}" date-city="{{$agent->src}}" date-address="{{$agent->address}}" date-email="{{$agent->email}}" >
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </a>
                    <a href="{{ route('admin.editAgent' , $agent->id) }}" class="edit-car btn btn-warning btn-sm" data-id="{{$agent->id}}" data-name="{{$agent->name}}" date-phone="{{$agent->phone}}" date-city="{{$agent->src}}" date-address="{{$agent->address}}" date-email="{{$agent->email}}" >
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <form action="{{ route('admin.destroyAgent', $agent->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-car btn btn-danger btn-sm"   onclick="return confirm('Are you sure ?')" >
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

@section('sidebarAdmin')

@endsection

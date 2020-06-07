@extends('layouts.appAgent')

@section('content')
    <h1 class="p-3 mb-2  text-white"style="background-image:url('../storage/postCrudCar/images/wee.jpg');" >Моите коли</h1>
    <table class="table">
        <tr class="p-3 mb-2 bg-dark text-white">
            <th width="100px">No</th>
            <th>Car Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
            <th class="text-center" width="100px">
                <a href="{{ route('uploadCar.file') }}" class="create-car btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>
        {{csrf_field()}}
        <?php $no = 1; ?>
        @foreach($cars as $car)
            <tr class="post{{$car->id}} p-3 mb-2  text-white">
                <td>{{ $no++ }}</td>
                <td><?= $car->name ?></td>
                <td><?= $car->price ?></td>
                <td><?= $car->category ?></td>
            @foreach ($Images as  $image)
                @if($image->id_car == $car->id)
                    <td>{!! $loop->first ? 'class="special"': '' !!}<img width="100" src="../storage/postCrudCar/images/<?= $image->image ?>" alt="<?= $image->image ?>">

                        <a href="{{ route('agents.edit' , $image->id) }}" class="edit-car btn btn-warning btn-sm"  data-name="{{$image->name}}" date-image="{{$image->image}}"  >
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <form action="{{ route('agentsImg.destroye', $image->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-car btn btn-danger btn-sm"   onclick="return confirm('Are you sure ?')" >
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </form>
                    </td>
             @endif
            @endforeach
                    <td>
                        <a href="{{ route('agentsCar.view' , $car->id) }}" class="show-car btn btn-info btn-sm" data-id="{{$car->id}}" data-name="{{$car->name}}" date-image="{{$image->image}}" date-price="{{$car->price}}" data-category="{{$car->category}}" data-status="{{$car->status}}" >
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="{{ route('agentsCar.edit' , $car->id) }}" class="edit-car btn btn-warning btn-sm" data-id="{{$car->id}}" data-name="{{$car->name}}" date-image="{{$image->image}}" date-price="{{$car->price}}" data-category="{{$car->category}}"  >
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <form action="{{ route('agentsCar.destroye', $car->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-car btn btn-danger btn-sm"   onclick="return confirm('Are you sure ?')" >
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </form>
                        <a href="{{ route('upload.file', $car->id)}}" class="create-car btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-picture"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
    </table>

@endsection

@section('sidebarAgent')

@endsection

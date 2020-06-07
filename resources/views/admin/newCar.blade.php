@extends('layouts.appAdmin')

@section('content')
    <h1>Потвърждаване на нова кола</h1>
    <table class="table">
        <tr>
            <th width="100px">No</th>
            <th>Image Name</th>
            <th>Image</th>
        </tr>
        {{csrf_field()}}
        <?php $no = 1; ?>
        @foreach ($Image as $kay=> $image)
            @if($image->status == 'new')
                <tr class="post{{$image->id}}">
                    <td>{{ $no++ }}</td>
                    <td><?= $image->name ?></td>
                    <td><img width="100" src="../storage/postCrudCar/images/<?= $image->image ?>" alt="<?= $image->image ?>"></td>
                    <td>
                        <a href="{{ route('admin.viewCar' , $image->id) }}" class="show-car btn btn-info btn-sm" data-id="{{$image->id}}" data-name="{{$image->name}}" date-image="{{$image->image}}" date-status="{{$image->status}}" data-id_car="{{$image->id_car}}" data-id_agent="{{$image->id_agent}}">
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="{{ route('admin.editCar' , $image->id) }}" class="edit-car btn btn-warning btn-sm" data-id="{{$image->id}}"  date-status="{{$image->status}}" >
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <form action="{{ route('admin.destroyCar', $image->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-car btn btn-danger btn-sm"   onclick="return confirm('Are you sure ?')" >
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @else
                I don't have any new Car!
            @endif
        @endforeach
    </table>


@endsection

@section('sidebarAdmin')

@endsection

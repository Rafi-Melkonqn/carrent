@extends('layouts.app')

@section('content')
    <section class="ks-title">
        <h1 class="bold italic text-white text-center text">Rent a car G&D</h1>
        <h3 class="bold italic text-white text-center text">Бързо и лесно
            <i class="	glyphicon glyphicon-road"></i>
        </h3>
    </section>

    <div class="jumbotron text-center p-3  mr-5 text-white bold"style="background-image:url('../storage/postCrudCar/images/hGWBye.jpg');">
        <div align="right" class="mr-5" >
            <a href="/agents/myCar" class="btn btn-lg btn-dark btn-outline-warning "role="button">Back</a>
        </div>

        <br/>
        @foreach($address as $addres)
            <form class="parameter-form" method="get" action="{{ route('lastStep' , $addres->id) }} "class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" id="name" name="name" value="{{$addres->name}}">

            <table class="p-3 mb-2  text-white bold">
                <tbody>
                    <tr>
                        <td>
                        <img width="100" src="../../storage/postCrudCar/images/<?= $addres->image ?>" alt="<?= $addres->image ?>">
                        </td>
                        <td class="mt-4">
                            <div class="d-flex justify-content-start bd-highlight mb-3 example-parent">
                                <div class=" h3 p-2 bd-highlight col-example">
                                    {{ $addres->name }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-around bd-highlight example-parent">
                                <div class=" h3 p-2 bd-highlight col-example">
                                    {{ $addres->category }} category</h3>
                                </div>
                            </div>

                        </td>
                        <td>
                            <div class=" h3 p-2 bd-highlight col-example text-left">

                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start bd-highlight mt-4 example-parent">
                                <div class=" h3  bd-highlight col-example text-left">
                                    <?php $amount = $addres->price * $length ?>
                                    {{ $amount }} лв.
                                    @if($length == 1)
                                        за {{ $length }} ден.
                                    @else
                                        за {{ $length }} дни.
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" id="amount" name="amount" value="{{$amount}}">
                            <input type="hidden" id="lenght" name="length" value="{{$length}}">
                            <input type="hidden" id="image" name="image" value="{{$addres->image}}">
                            <input type="hidden" id="dataend" name="dataEnd" value="{{$dateEnd}}">
                            <input type="hidden" id="datastart" name="dataStart" value="{{$dateStart}}">

                            <div class="d-flex justify-content-around bd-highlight example-parent">
                                <div class=" h3 p-2 bd-highlight col-example">

                                    <a href="{{ route('infoCar' , $addres->id ) }}" class="show-car btn btn-info btn-sm" data-name="{{$addres->name}}" data-amount="{{$amount}}" data-end="{{$dateEnd}}" data-start="{{$dateStart}}" data-image="{{$addres->image}}">
                                        Details <i class="glyphicon glyphicon-eye-open"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around bd-highlight example-parent">
                                <div class=" h3 p-2 bd-highlight col-example">
                                    <input type="submit" value="Reserve" class="nextStep btn btn-success btn-lg ">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br/>
        </form>
        @endforeach
    </div>

@endsection

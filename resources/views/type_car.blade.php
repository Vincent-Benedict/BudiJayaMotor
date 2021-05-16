@extends('layout.master')


@section('extra-css')

    <link rel="stylesheet" href="{{asset('css/type_car.css')}}">

@endsection


@section('content')

    <div class="container">

        <div class="content">

            <div class="content-header">

                <p>{{$type[0]->type_name}}</p>

            </div>

            <div class="content-body">

                @if(count($car) == 0)

                    <div class="no-card">
                        <img src="{{url('/assets/No Result Found.png')}}" alt="">

                        <div class="desc">
                            <p>Sorry! No result found :(</p>
                            <p>We're sorry what you were looking for. Please try another way.</p>
                        </div>

                    </div>


                @else

                @foreach($car as $c)

                    <div class="card">

                        <div class="card-left">
                            <img src="{{url('/storage_upload/'.$c->image)}}" alt="">

                            <div class="card-left-desc">
                                <p>{{$c->name}}</p>
                                <p>Rp. {{number_format($c->price,0, ",", ".")}}</p>
                            </div>
                        </div>

                        <div class="card-right">

                            <a href="{{url('/detail_car/'.$c->id)}}">
                                <div class="button">
                                    <p>View More</p>
                                </div>
                            </a>

                        </div>


                    </div>



                @endforeach


                @endif

            </div>

        </div>



    </div>






@endsection
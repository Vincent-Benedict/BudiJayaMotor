@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/detail_car.css')}}">
@endsection

@section('content')

    <div class="container">

        <div class="content">
            {{--        <h1>{{$car->name}}</h1>--}}
            {{--        <p>type: {{$car->getType->type_name}}</p>--}}

            <div class="content-header">
                <div class="content-header-slides">

                    <div class="content-header-slides-main">
                        <img id="featured" width="300px" src="{{url('/storage_upload/'.$car->image)}}" alt="">
                    </div>

                    <div class="content-header-slides-thumbnail">

                        <img width="25px" id="slideLeft" class="arrow" src="{{url('/assets/arrow-left.png')}}">

                        <div id="slider">
                            <img class="thumbnail active" width="300px" src="{{url('/storage_upload/'.$car->image)}}" alt="">
                            @foreach($car->getImageDetail as $img)
                                <img class="thumbnail" src="{{url('/detail_image_storage/'.$img->image)}}" alt="">
                            @endforeach
                        </div>

                        <img width="25px" id="slideRight" class="arrow" src="{{url('/assets/arrow-right.png')}}">

                    </div>

                </div>

                <div class="content-header-title">
                    <div class="name">
                        <p>{{$car->name}}</p>
                    </div>

                    <div class="type">
                        <p>{{$car->getType->type_name}}</p>
                    </div>

                    <div class="price">
                        <p>Rp. {{number_format($car->price,0, ",", ".")}}</p>
                    </div>

                    <a target="_blank" href="https://wa.me/message/KYYTTCHDE76BI1">
                        <div class="penjual">
                            <p>Chat with Seller</p>
                        </div>
                    </a>

                </div>

            </div>

            <div class="content-detail">
                <div class="content-detail-header">
                    <p>Detail</p>
                </div>

                <div class="content-detail-body">

                    <div class="row">
                        <div class="left">
                            <div class="name">
                                <p>Brand</p>
                            </div>

                            <div class="value">
                                <p>{{$car->merk}}</p>
                            </div>
                        </div>

                        <div class="right">

                            <div class="name">
                                <p>Mileage</p>
                            </div>

                            <div class="value">
                                <p>{{$car->mileage}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">

                            <div class="name">
                                <p>Color</p>
                            </div>

                            <div class="value">
                                <p>{{$car->color}}</p>
                            </div>
                        </div>

                        <div class="right">

                            <div class="name">
                                <p>Variant</p>
                            </div>

                            <div class="value">
                                <p>{{$car->variant}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">

                            <div class="name">
                                <p>Year</p>
                            </div>

                            <div class="value">
                                <p>{{$car->year}}</p>
                            </div>
                        </div>

                        <div class="right">

                            <div class="name">
                                <p>Fuel</p>
                            </div>

                            <div class="value">
                                <p>{{$car->fuel}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">

                            <div class="name">
                                <p>transmission</p>
                            </div>

                            <div class="value">
                                <p>{{$car->transmition}}</p>
                            </div>
                        </div>

                        <div class="right">

                            <div class="name">
                                <p>Machine</p>
                            </div>

                            <div class="value">
                                <p>{{$car->machine}}</p>
                            </div>
                        </div>
                    </div>



                </div>



            </div>


            <div class="content-description">
                <div class="content-description-header">
                    <p>Description</p>
                </div>

                <div class="content-description-desc">
                        {!! nl2br($car->description) !!}
                </div>
            </div>

        </div>


    </div>






    <script>

        let thumbnails = document.getElementsByClassName('thumbnail')

        let activeImage = document.getElementsByClassName('active')

        for(let i = 0; i<thumbnails.length; i++){

            thumbnails[i].addEventListener('click', () => {

                if(activeImage.length > 0){
                    activeImage[0].classList.remove('active')
                }

                thumbnails[i].classList.add('active')
                document.getElementById('featured').src = thumbnails[i].src
            })
        }

        let buttonLeft = document.getElementById('slideLeft')
        let buttonRight = document.getElementById('slideRight')
        let slider = document.getElementById('slider')

        buttonLeft.addEventListener('click', () => {
            slider.scrollLeft -= 180
        })

        buttonRight.addEventListener('click', () => {
            slider.scrollLeft += 180
        })


    </script>

@endsection
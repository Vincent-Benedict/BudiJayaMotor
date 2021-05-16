@extends('layout.master')

@section('title', 'index')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">


@endsection

@section('content')

    <div class="content">

        <div class="search">

            <div class="search-header">
                <p>Our Car List</p>
            </div>

            <form action="{{url()->current()}}" method="POST">
                @csrf
                <input class="type" type="text" name="keyword" placeholder="search here...">
                <input class="button" type="submit" name="submit">
            </form>

        </div>

        <div class="container" style="color: white;">

            <div id="originalResult">
                @foreach($cars as $key => $car)
                    @include('components.card', ['car' => $car])
                @endforeach
            </div>

            <br><br><br>


        </div>

        <div>
            {{$cars->links()}}
        </div>
    </div>

    <div class="popup">
        <div class="popup-content">
            <div class="popup-content-header">
                <p id="confirmation">Are you sure you want to delete ${x} ?</p>
            </div>

            <div class="popup-content-body">
                <div onclick="yesPopUp()" class="button-popup yes">
                    <p>Yes</p>
                </div>

                <div onclick="noPopUp()" class="button-popup no">
                    <p>No</p>
                </div>
            </div>
        </div>
    </div>


    <script>

        let name_car = null
        let id_car = null
        let popUp = document.getElementsByClassName('popup')

        const popUpDelete = (id, name) => {
            id_car = id;
            name_car = name;
            let text_confirmation = document.getElementById('confirmation')
            text_confirmation.innerHTML = `Are you sure you want to delete <span id="popup_name"> ${name_car} </span> ?`

            popUp[0].style.display = "block"
        }

        const noPopUp = () => {
            name_car = null
            id_car = null
            popUp[0].style.display = "none"
        }

        const yesPopUp = () => window.location.href = "/delete/" + id_car

    </script>



@endsection



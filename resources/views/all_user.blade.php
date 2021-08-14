@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/user_page.css')}}">
@endsection

@section('content')


    <div class="contain">

        <div class="content">

            <div class="content-header">
                <p>All User</p>
            </div>

            <div class="content-body">

                <div class="content-body-card title">
                    <div class="left">
                        <p>Username</p>
                    </div>

                    <div class="mid">
                        <p>Role</p>
                    </div>

                    <div class="right">
                        <p>Action</p>
                    </div>
                </div>

                @foreach($user as $s)

                    <div class="content-body-card">

                        <div class="left">
                            <p>{{$s->username}}</p>
                        </div>

                        <div class="mid">
                            <p>{{$s->role}}</p>
                        </div>

                        <div class="right-card">
                            <div class="button" onclick="upopUpDelete('{{$s->id}}', '{{$s->username}}')">
                                <p>Delete</p>
                            </div>
                        </div>

                    </div>

                @endforeach
            </div>
        </div>


    </div>


    <div class="upopup">
        <div class="upopup-content">
            <div class="upopup-content-header">
                <p id="uconfirmation">Are you sure you want to delete ${x} ?</p>
            </div>

            <div class="upopup-content-body">
                <div onclick="yesUPopUp()" class="button-popup yes">
                    <p>Yes</p>
                </div>

                <div onclick="noUPopUp()" class="button-popup no">
                    <p>No</p>
                </div>
            </div>
        </div>
    </div>

    <script>

        let name_user = null
        let id_user = null
        let popUp = document.getElementsByClassName('upopup')

        const upopUpDelete = (id, name) => {
            id_user = id;
            name_user = name;
            let text_confirmation = document.getElementById('uconfirmation')
            text_confirmation.innerHTML = `Are you sure you want to delete <span id="popup_name"> ${name_user} </span> ?`

            popUp[0].style.display = "block"
        }

        const noUPopUp = () => {
            name_user = null
            id_user = null
            popUp[0].style.display = "none"
        }

        const yesUPopUp = () => window.location.href = "/deleteUser/" + id_user

    </script>

@endsection






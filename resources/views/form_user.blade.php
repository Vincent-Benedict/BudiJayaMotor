@extends('layout.master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/form_user.css')}}">
@endsection

@section('content')

    <div class="container-form">
        <form action="{{url('/formUser')}}" method="POST">
            @csrf
    
            <div class="form-section">
                <b>Username</b> <br>
                <input type="text" name="username">
            </div>
    
            <div class="form-section">
                <b>Password</b> <br>
                <input type="password" name="password">
            </div>
    
            <div class="form-section">
                <b>Role</b> <br>
                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="master">Master</option>
                </select>
            </div>
    
            <div class="form-button">
                <input id="button" type="submit" value="Insert">
            </div>
    
        </form>
    </div>

    


@endsection
@extends('layout.master')

@section('content')

    <form action="{{url('/formUser')}}" method="POST">
        @csrf

        <div class="form-section">
            <b>Username</b> <br>
            <input type="text" name="username">
        </div>

        <div class="form-section">
            <b>Password</b> <br>
            <input type="text" name="password">
        </div>

        <div class="form-section">
            <b>Role</b> <br>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="master">Master</option>
            </select>
        </div>

        <input type="submit" value="Insert">

    </form>


@endsection
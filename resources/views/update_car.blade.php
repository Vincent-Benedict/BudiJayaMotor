@extends('layout.master')

@section('title', 'update')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('css/update_car.css')}}">

@endsection

@section('content')

    <div class="content">

        <div class="container">

            <div class="container-header">
                <p>Update {{$car->name}}</p>
            </div>

            <form action="{{url('/update_car/'.$car->id)}}" class="form" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-section">
                    <b>Name</b> <br>
                    <input id="name" type="text" name="name" value="{{$car->name}}">
                </div>

                <div class="form-section">
                    <b>File Gambar Thumbnail</b><br>
                    <input type="file" name="file">
                </div>

                <div class="form-section">
                    <b>File Gambar Detail</b><br>
                    <input type="file" class="form-control" name="images[]" placeholder="address" multiple>
                </div>


                <div class="form-section">
                    <b>Type</b><br>
                    <select name="type" id="">
                        @foreach($allType as $type)
                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-section">
                    <b>Price</b><br>
                    <input type="text" name="price" value="{{$car->price}}">
                </div>

                <div class="form-section">
                    <b>Merk</b><br>
                    <input type="text" name="merk" value="{{$car->merk}}">
                </div>

                <div class="form-section">
                    <b>Mileage</b><br>
                    <input type="text" name="mileage" value="{{$car->mileage}}">
                </div>

                <div class="form-section">
                    <b>Color</b><br>
                    <input type="text" name="color" value="{{$car->color}}">
                </div>

                <div class="form-section">
                    <b>Variant</b><br>
                    <input type="text" name="variant" value="{{$car->variant}}">
                </div>

                <div class="form-section">
                    <b>Year</b><br>
                    <input type="text" name="year" value="{{$car->year}}">
                </div>

                <div class="form-section">
                    <b>Fuel</b><br>
                    <input type="text" name="fuel" value="{{$car->fuel}}">
                </div>

                <div class="form-section">
                    <b>Transmition</b><br>
                    <input type="text" name="transmition" value="{{$car->transmition}}">
                </div>

                <div class="form-section">
                    <b>Machine</b><br>
                    <input type="text" name="machine" value="{{$car->machine}}">
                </div>

                <div class="form-section">
                    <b>Description</b><br>
                    <textarea name="description" rows="15" cols="100">{{$car->description}}</textarea>
                </div>

                <div class="form-button">
                    <input id="button" type="submit" value="Update">
                </div>
            </form>
        </div>



        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </div>



@endsection
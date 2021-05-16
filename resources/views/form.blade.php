@extends('layout.master')

@section('content')

    <div class="content">

        <div class="container">

            <form action="{{url('/form/upload')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>File Gambar Thumbnail</b><br>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <b>File Gambar Detail</b><br>
                    <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
                </div>

                <div class="form-group">
                    <b>Name</b><br>
                    <input type="text" name="name">
                </div>

                <div class="form-group">
                    <b>Type</b><br>
                    <select name="type" id="">
                        @foreach($allType as $type)
                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <b>Price</b><br>
                    <input type="text" name="price">
                </div>

                {{--  ===================================================     --}}

                <div class="form-group">
                    <b>Merk</b><br>
                    <input type="text" name="merk">
                </div>

                <div class="form-group">
                    <b>Jarak Tempuh</b><br>
                    <input type="text" name="mileage">
                </div>

                <div class="form-group">
                    <b>Warna</b><br>
                    <input type="text" name="color">
                </div>

                <div class="form-group">
                    <b>Varian</b><br>
                    <input type="text" name="variant">
                </div>

                <div class="form-group">
                    <b>Tahun</b><br>
                    <input type="text" name="year">
                </div>

                <div class="form-group">
                    <b>Tipe Bahan Bakar</b><br>
                    <input type="text" name="fuel">
                </div>

                <div class="form-group">
                    <b>Transmisi</b><br>
                    <input type="text" name="transmition">
                </div>

                <div class="form-group">
                    <b>Kapasitas Mesin</b><br>
                    <input type="text" name="machine_capacity">
                </div>

                <div class="form-group">
                    <b>Deskripsi</b><br>
                    <textarea name="description" rows="15" cols="100"></textarea>
                </div>

                <input type="submit" value="Upload">

            </form>

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


    </div>


@endsection
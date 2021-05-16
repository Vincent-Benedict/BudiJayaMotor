
    <div class="card">
        <a href="{{url('/detail_car/'.$car->id)}}" style="text-decoration: none; color: #000;">
            <div class="header">
                <img width="200px" src="{{url('/storage_upload/'.$car->image)}}" alt="">
                <p class="header-name">{{$car->name}}</p>
                <p class="header-type">{{$car->getType->type_name}}</p>
                <p class="header-price">Rp. {{number_format($car->price,0, ",", ".")}}</p>
            </div>
        </a>

        @if(auth()->check())
        <div class="button">
            <a href="{{url('/update_car/'.$car->id)}}">
                <div class="button-update">
                    <p>Update</p>
                </div>
            </a>

            <div onclick="popUpDelete('{{$car->id}}', '{{$car->name}}')" class="button-delete">
                <p>Delete</p>
            </div>
        </div>
        @endif

    </div>

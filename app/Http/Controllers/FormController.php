<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarDetailImage;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{


    /* Membuat Constructor Untuk Middleware */
    public function __construct()
    {
        $this->middleware('myauth')->only('index');


    }


    public function index(){

        $allType = Type::all();

        return view('form')->with("allType", $allType);
    }

    public function upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg,webp',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'merk' => 'required',
            'mileage' => 'required',
            'color' => 'required',
            'variant' => 'required',
            'year' => 'required',
            'fuel' => 'required',
            'transmition' => 'required',
            'machine_capacity' => 'required',
            'description' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $name = $request->name;
        $type = $request->type;
        $price = $request->price;
        $merk = $request->merk;
        $mileage = $request->mileage;
        $color = $request->color;
        $variant = $request->variant;
        $year = $request->year;
        $fuel = $request->fuel;
        $transmition = $request->transmition;
        $machine = $request->machine_capacity;
        $description = $request->description;

        $file_name = time()."_".$file->getClientOriginalName();

        /*
                // nama file
                echo 'File Name: '.$file->getClientOriginalName();
                echo '<br>';

                // ekstensi file
                echo 'File Extension: '.$file->getClientOriginalExtension();
                echo '<br>';

                // real path
                echo 'File Real Path: '.$file->getRealPath();
                echo '<br>';

                // ukuran file
                echo 'File Size: '.$file->getSize();
                echo '<br>';

                // tipe mime
                echo 'File Mime Type: '.$file->getMimeType();

        */

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage_upload';
        $file->move($tujuan_upload,$file_name);


        $data = Car::create([
            'name'=>$name,
            'type_id'=>$type,
            'image'=> $file_name,
            'price' => $price,
            'merk' => $merk,
            'mileage' => $mileage,
            'color' => $color,
            'variant' => $variant,
            'year' => $year,
            'fuel' => $fuel,
            'transmition' => $transmition,
            'machine' => $machine,
            'description' => $description
        ]);

        $images=array();
        $detailFiles = $request->file('images');


        if($detailFiles){
            foreach($detailFiles as $fileImg){
                $detailImageName=time()."_".$fileImg->getClientOriginalName();
                $fileImg->move('detail_image_storage',$detailImageName);
                $images[]=$detailImageName;
                CarDetailImage::create([
                    'car_id' => $data->id,
                    'image' => $detailImageName
                ]);
            }
        }

        return redirect('home');

    }

    public function userIndex(){
        return view('form_user');
    }

    public function insertUser(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('home');

    }

}

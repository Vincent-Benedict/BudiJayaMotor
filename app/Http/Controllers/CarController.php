<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarDetailImage;
use App\Models\Type;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function home(){
        return view('index');
    }

    public function index(Request $request){
        if ($request->query('keyword') == null) {
            $cars = Car::with('getType')->Paginate(20);
        }
        else {
            $page = $request->query('page');
            $cars = Car::with('getType')->where('name', 'like', "%".$request->keyword."%")
                ->skip(($page - 1) * 20)->paginate(20);
        }
        return view('index')->with('cars', $cars);
    }

    public function search(Request $request){
        $cars = Car::with('getType')->where('name', 'like', "%".$request->keyword."%")->Paginate(20);
        $cars->appends($request->only('keyword'));
        return view('index')->with('cars', $cars);
    }

    public function liveSearch(Request $request){
        $inputSearch = $request->inputSearch;
        $cars = Car::with('getType')->where('name', 'like', "%".$inputSearch."%")->get();
        echo $cars;
    }

    public function detailCar($id){
        $car = Car::with('getImageDetail', 'getType')->Find($id);
        return view('detail_car', ["car" => $car]);
    }

    public function delete($id){

        $car = Car::where('id', '=', $id)->first();
        $destinationPath = 'storage_upload';
        unlink($destinationPath . '/' . $car->image);

        $carDetail = CarDetailImage::where('car_id', '=', $id)->get();
        $destinationPath2 = 'detail_image_storage';
        foreach ($carDetail as $c){
            unlink($destinationPath2 . '/' . $c->image);
        }

        Car::where('id', '=', $id)->delete();
        CarDetailImage::where('car_id', '=', $id)->delete();

        return redirect()->back();
    }

    public function updateGet($id){
        $car = Car::find($id);
        $allType = Type::all();
        return view('update_car')->with('car', $car)->with('allType', $allType);
    }

    public function updatePost($id, Request $request){

        $this->validate($request, [
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
            'machine' => 'required',
            'description' => 'required'
        ]);

        $car = Car::find($id);

        $file = $request->file('file');

        if($file){
            $destinationPath = 'storage_upload';
            unlink($destinationPath . '/' . $car->image);
            $file_name = time()."_".$file->getClientOriginalName();
            $file->move($destinationPath,$file_name);
            Car::where('id', '=', $id)->update([
                'image' => $file_name
            ]);
        }

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
        $machine = $request->machine;
        $description = $request->description;

        $images=array();
        $detailFiles = $request->file('images');

        if($detailFiles){

            $carDetail = CarDetailImage::where('car_id', '=', $id)->get();
            foreach ($carDetail as $c){
                unlink('detail_image_storage/'.$c->image);
            }

            CarDetailImage::where('car_id', '=', $id)->delete();

            foreach($detailFiles as $fileImg){
                $detailImageName=time()."_".$fileImg->getClientOriginalName();
                $fileImg->move('detail_image_storage',$detailImageName);
                $images[]=$detailImageName;
                CarDetailImage::create([
                    'car_id' => $id,
                    'image' => $detailImageName
                ]);
            }
        }


        Car::where('id', '=', $id)->update([
            'name' => $name,
            'type_id' => $type,
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

        return redirect('/home');
    }

}

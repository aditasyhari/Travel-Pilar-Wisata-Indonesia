<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $cars = Car::all()->sortByDesc('updated_at');
            return view('admin.cars.index', compact('cars'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.cars.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'priceBali' => 'required|numeric|digits_between:5,8',
            'priceBanyuwangi' => 'required|numeric|digits_between:5,8',
            'capacity' => 'required|numeric|digits_between:1,2',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');
		$name_file = time()."_".$file->getClientOriginalName();
		$file->move(\base_path() ."/public/img/img_upload_car",$name_file);

        Car::create([
            'name' => $request->name,
            'priceBali' => $request->priceBali,
            'priceBanyuwangi' => $request->priceBanyuwangi,
            'capacity' => $request->capacity,
            'file' => $name_file
        ]);

        
        // Article::create($request->all());
        return redirect('/admin/cars')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.cars.show', compact('car'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.cars.edit', compact('car'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
        $request->validate([
            'name' => 'required',
            'priceBali' => 'required|numeric|digits_between:5,8',
            'priceBanyuwangi' => 'required|numeric|digits_between:5,8',
            'capacity' => 'required|numeric|digits_between:1,2',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $car->name = $request->name;
        $car->priceBali = $request->priceBali;
        $car->priceBanyuwangi = $request->priceBanyuwangi;
        $car->capacity = $request->capacity;

        if($request->has('file')) {
            \File::delete(public_path('img/img_upload_car/'.$car->file));
            $file = $request->file('file');
		    $name_file = time()."_".$file->getClientOriginalName();
            $file->move(\base_path() ."/public/img/img_upload_car",$name_file);
            $car->file = $name_file;
        }

        $car->update();

        return redirect('/admin/cars')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        if(\File::exists(public_path('img/img_upload_car/'.$car->file))) {
            \File::delete(public_path('img/img_upload_car/'.$car->file));
        }

        Car::destroy($car->id);
        return redirect('/admin/cars')->with('status', 'Data Berhasil Dihapus!');
    }
}

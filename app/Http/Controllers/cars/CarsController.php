<?php

namespace App\Http\Controllers\cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;
use App\http\Requests\CarsValidation;
use Illuminate\Support\Facades\Validator;


class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all();
        return view('cars.showcar', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.createcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarsValidation $request)
    {
        $request->validate();

        $cars = Cars::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'imageurl' => $request->input('imageurl')
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $car = Cars::find($id);
        return view('cars.editcar')->with('cars' , $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarsValidation $request, $id)
    {
        $request->validate();

        $cars = Cars::where('id', $id)
            ->update(['name' => $request->input('name'),
                'description' => $request->input('description'),
                'imageurl' => $request->input('imageurl')
            ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Cars::find($id)->delete();

        return redirect('/cars');
    }
}

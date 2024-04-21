<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cars.index', [
            'cars' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->validated());

        

        Session::flash('success', 'car added successfully');
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Car::Destroy($id);
        Session::Flash('success', 'Car trashed successfully');
        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        $car = Car::withTrashed()->where('id', $id)->first();
        $car->forceDelete();
        Session::Flash('success', 'Car deleted successfully');
        return redirect()->route('cars.index');
    }

    public function restore($id)
    {
        $car = Car::withTrashed()->where('id', $id)->first();
        $car->restore();
        Session::Flash('success', 'Car restored successfully');
        return redirect()->route('students.trashed');
    }
}
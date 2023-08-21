<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Master_Sensor;
use Illuminate\Support\Facades\Validator;

class SensorController extends Controller
{
    //
    public function index()
    {
        $sensor = Master_Sensor::all();
        return Inertia::render('Sensor/Index', ['sensor' => $sensor]);
    }

    public function create()
    {
        return Inertia::render('Sensor/Create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'sensor' => ['required'],
            'sensor_name' => ['required'],
            'unit' => ['required'],
            'created_by' => ['required'],
            'created_at' => ['required'],
        ])->validate();

        Master_Sensor::create($request->all());

        return redirect()->route('sensor.index');
    }

    public function edit(Master_Sensor $sensor)
    {
        return Inertia::render('Sensor/Edit', [
            'sensor' => $sensor
        ]);
    }

    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'sensor' => ['required'],
            'sensor_name' => ['required'],
            'unit' => ['required']
        ])->validate();

        Master_Sensor::find($id)->update($request->all());
        return redirect()->route('sensor.index');
    }

    public function destroy($id)
    {
        Master_Sensor::find($id)->delete();
        return redirect()->route('sensor.index');
    }
}
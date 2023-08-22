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
        // $sensor = Master_Sensor::withTrashed()->get();
        // dd($sensor);
        return Inertia::render('Sensor/Index', ['sensor' => $sensor]);
    }

    public function create()
    {
        return Inertia::render('Sensor/Create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'sensor'        => ['required'],
            'sensor_name'   => ['required'],
            'unit'          => ['required'],
            'created_by'    => ['required'],
            'created_at'    => ['required'],
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
            'sensor'        => ['required'],
            'sensor_name'   => ['required'],
            'unit'          => ['required'],
            'created_by'    => ['required'],
            'created_at'    => ['required'],
        ])->validate();

        Master_Sensor::find($id)->update($request->all());
        return redirect()->route('sensor.index');
    }

    public function destroy($id)
    {
        $sensor = Master_Sensor::find($id);

        // Check the user's role
        if (auth()->user()->role === 'admin') {
            // Update deleted_at for admin (softdelete)
            // * softdelete dilakukan secara manual agar data masih dapat tampil di index superadmin dan tetap dapat dihapus
            $sensor->deleted_at = now();
            $sensor->save();
        } elseif (auth()->user()->role === 'superadmin') {
            // Regular delete for superadmin
            $sensor->delete();
        }

        return redirect()->route('sensor.index');
    }
}
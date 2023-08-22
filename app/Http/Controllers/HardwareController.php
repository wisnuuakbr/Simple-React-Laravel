<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Hardware;
use Illuminate\Support\Facades\Validator;

class HardwareController extends Controller
{
    //
    public function index()
    {
        $hardware = Hardware::all();
        return Inertia::render('Hardware/Index', ['hardware' => $hardware]);
    }

    public function create()
    {
        return Inertia::render('Hardware/Create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'hardware'              => ['required'],
            'location'              => ['required'],
            'timezone'              => ['required'],
            'local_time'            => ['required'],
            'latitude'              => ['required'],
            'longitude'             => ['required'],
            'created_by'            => ['required'],
            'created_at'            => ['required'],
        ])->validate();

        Hardware::create($request->all());

        return redirect()->route('hardware.index');
    }

    public function edit(Hardware $hardware)
    {
        return Inertia::render('Hardware/Edit', [
            'hardware' => $hardware
        ]);
    }

    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'hardware'          => ['required'],
            'location'          => ['required'],
            'timezone'          => ['required'],
            'local_time'        => ['required'],
            'latitude'          => ['required'],
            'longitude'         => ['required'],
            'created_by'        => ['required'],
            'created_at'        => ['required'],
        ])->validate();

        Hardware::find($id)->update($request->all());
        return redirect()->route('hardware.index');
    }

    public function destroy($id)
    {
        $sensor = Hardware::find($id);

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

        return redirect()->route('hardware.index');
    }
}
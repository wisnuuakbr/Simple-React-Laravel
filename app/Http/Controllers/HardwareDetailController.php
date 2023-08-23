<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\HardwareDetail;
use Illuminate\Support\Facades\Validator;

class HardwareDetailController extends Controller
{
    public function index()
    {
        $hardware_detail = HardwareDetail::all();
        return Inertia::render('HardwareDetail/Index', ['hardware_detail' => $hardware_detail]);
    }

    public function create()
    {
        return Inertia::render('HardwareDetail/Create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'hardware'  => ['required'],
            'sensor'    => ['required'],
        ])->validate();

        HardwareDetail::create($request->all());

        return redirect()->route('hardware_detail.index');
    }

    public function edit(HardwareDetail $hardware_detail)
    {
        return Inertia::render('HardwareDetail/Edit', [
            'hardware_detail' => $hardware_detail
        ]);
    }

    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'hardware'          => ['required'],
            'sensor'          => ['required']
        ])->validate();

        HardwareDetail::find($id)->update($request->all());
        return redirect()->route('hardware_detail.index');
    }

    public function destroy($id)
    {
        $sensor = HardwareDetail::find($id);

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

        return redirect()->route('hardware_detail.index');
    }
}
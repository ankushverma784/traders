<?php

namespace App\Http\Controllers;
use App\Models\AddVehicle;

use Illuminate\Http\Request;

class AddVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vehicle = Vehicle::all();
        $addVehicle = AddVehicle::all();
        return view ('admin.addVehicle.index', compact('addVehicle'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('admin/addVehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_no' => 'required',
           ' insuranceRem_days'  =>"",
            'fitnessRem_days' =>'',
            'permitRem_days' =>'',
            'pollutionRem_days' =>'',
            ]);
            addVehicle::create($request->all());
            
            return redirect()->route('admin.addVehicle.index')
            ->with('success','Vehicle Added successfully.');

    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AddVehicle $addVehicle)
    {
        return view('admin.addVehicle.update',compact('addVehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddVehicle $addVehicle)
     { 
         
        $request->validate([
        // 'vehicle_no' => 'required', 
        'insuranceRem_days' => 'required',
        'fitnessRem_days' => 'required',
        'permitRem_days' => 'required', 
        'pollutionRem_days'=> 'required',
            ]);

        $addVehicle->update($request->all());
    
        return redirect()->route('admin.addVehicle.index')
                        ->with('success','Vehicle updated successfully');



        
        // return view ('admin/addVehicle.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(addVehicle $addVehicle)
    {
        $addVehicle->delete();
        return redirect()->route('admin.addVehicle.index')
                        ->with('success','Vehicle deleted successfully');
    }
}

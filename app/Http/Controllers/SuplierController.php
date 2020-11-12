<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = Suplier::all();

        return view ('admin.suplier.index',compact('suplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('admin.suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'mobile' => 'required',  
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'state' => '',
        ]);   
    
        

        Suplier::create($request->all());
     
        return redirect()->route('admin.suplier.index')
                        ->with('success','Suplier Details Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show(Suplier $suplier)
    {
        //
    }
    public function transaction()
    {
        return view('admin/suplier/transaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Suplier $suplier)
    {
        return view('admin.suplier.edit',compact('suplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplier $suplier)
    {
         $request->validate([
             'mobile'=> 'required',
            'name' => 'required',
            'city'=>'required',
            'address' => 'required',
        ]);   
        $suplier->update($request->all());
    
        return redirect()->route('admin.suplier.index')
                        ->with('success','Suplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplier $suplier)
    {
        $suplier->delete();
    
        return redirect()->route('admin.suplier.index')
                        ->with('success','Suplier deleted successfully');
    }
}

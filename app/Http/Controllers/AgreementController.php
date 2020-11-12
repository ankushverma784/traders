<?php

namespace App\Http\Controllers;
use App\Models\Agreement;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agreement = Agreement::all();
        return view ('admin.agreement.index',compact('agreement'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.agreement.create');
        
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
            'mobile' => 'required',  
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            
            ]);
    //    dd($_POST);
        // Agreement::create($request->all());
        
        $agreement = new Agreement();
        
        $agreement->mobile = $request->get('mobile'); 
        $agreement->name = $request->get('name'); 
        $agreement->city = $request->get('city'); 
        $agreement->address = $request->get('address'); 
        $agreement->select_material = serialize($request->get('select_material')); 
        $agreement->material_type = serialize($request->get('material_type')); 
        $agreement->quantity_type = serialize($request->get('quantity_type')); 
        $agreement->min_rate = serialize($request->get('min_rate')); 
        $agreement->max_rate = serialize($request->get('max_rate')); 
     
        
        // dd($agreement);
        $agreement->save();
        // $agreement= Agreement::find($request->input('agreement'));
        return redirect()->route('admin.agreement.index')
                        ->with('success','Agreement Created successfully.');
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
    public function edit(Request $request,$id = null)
    {

        $agreement = Agreement::find($id);

        $material = unserialize($agreement->select_material);
        $type = unserialize($agreement->material_type);
        $quantity = unserialize($agreement->quantity_type);
        $min_rate = unserialize ($agreement->min_rate);
        $max_rate = unserialize ($agreement->max_rate); 

        $material_list = ['1'=>'Aggregate','2'=>'Cement', '3'=>' Brick','4'=>'Sand' ];
        $type_list  = ['1'=>'Ambuja Cement','2'=>'UltraTech Cement'];
        $quantity_list =  ['1'=>'Bag','2'=>'Price', '3'=>'Quantal' ];


        // dd($agreement);

        // dd(count($material ));
         $count = count($material);
        
   
        
        return view('admin.agreement.edit',compact('agreement','count','material','type','quantity','min_rate','max_rate','material_list','type_list',
        'quantity_list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agreement $agreement)
    {
        $request->validate([
        'mobile' => 'required',  
        'name' => 'required',
        'city' => 'required',
        'address' => 'required',
        'select_material' => 'required',
        'quantity_type' => 'required',
        'min_rate' => 'required',
        'max_rate' => 'required',
        ]);
        

        $agreement->update($request->all());
    
        return redirect()->route('admin.agreement.index')
                        ->with('success','Agreement updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agreement $agreement)
    {
        $agreement->delete();
    
        return redirect()->route('admin.agreement.index')
                        ->with('success','Agreement deleted successfully'); 
    }
}

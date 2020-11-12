<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase = Purchase::all();

        return view ('admin.purchase.index',compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.purchase.create');
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
            'mobile' =>'',
            'bill_no' =>'',
            'material_name' =>'',
            'material_type' =>'',
            'material_quantity_type' =>'',
            'quantity' =>'',
            'material_price' =>'',
            'material_gst' =>'',
            'material_tax'=>'',
            'total_price'=>'',
            'deliveryCharge' =>'',
            'otherCharge' =>'',
            'loadingCharge' =>'',
            'payment_amount' =>'',
            'payment_cheque' =>'',
        ]);   

        $purchase = new Purchase();
        
        $purchase->mobile = $request->get('mobile'); 
        $purchase->bill_no = $request->get('bill_no'); 
        $purchase->material_name = serialize($request->get('material_name')); 
        $purchase->material_type = serialize($request->get('material_type')); 
        $purchase->material_quantity_type = serialize($request->get('material_quantity_type')); 
        $purchase->quantity = serialize($request->get('quantity')); 
        $purchase->material_price = serialize($request->get('material_price')); 
        $purchase->material_gst = serialize($request->get('material_gst')); 
        $purchase->material_tax = serialize($request->get('material_tax')); 
        $purchase->total_price = serialize($request->get('total_price')); 
        $purchase->deliveryCharge = $request->get('deliveryCharge'); 
        $purchase->otherCharge = $request->get('otherCharge'); 
        $purchase->loadingCharge = $request->get('loadingCharge'); 
        $purchase->payment_amount = $request->get('payment_amount'); 
        $purchase->payment_cheque = $request->get('payment_cheque'); 
        $purchase->save();
        return redirect()->route('admin.purchase.index')
                        ->with('success','purchase Added Successfully.');
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
        // return view ('admin/purchase.transaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        // dd($purchase);
        $purchase = Purchase::find($id);
// dd($purchase->material_name);

        $material = unserialize($purchase->material_name);
        $material_type = unserialize($purchase->material_type);
        $material_quantity_type = unserialize($purchase->material_quantity_type);
        $quantity = unserialize ($purchase->quantity);
        $material_price = unserialize ($purchase->material_price); 
        $material_gst = unserialize ($purchase->material_gst);
        $material_tax = unserialize ($purchase->material_tax); 
        $total_price = unserialize ($purchase->total_price); 



        $material_list = ['1'=>'Aggregate','2'=>'Cement', '3'=>' Brick','4'=>'Sand' ];
        // $type_list  = ['1'=>'Ambuja Cement','2'=>'UltraTech Cement'];
        // $quantity_list =  ['1'=>'Bag','2'=>'Price', '3'=>'Quantal' ];



        // dd(count($material_name ));
         $count = count($material);

        return view('admin.purchase.edit',compact('purchase','count','material','material_type','material_quantity_type','quantity','material_price','material_gst','material_tax','total_price',
        'material_list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            
        ]);   
        $purchase->update($request->all());
    
        return redirect()->route('admin.purchase.index')
                        ->with('success','Suplier updated successfully');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        
            return redirect()->route('admin.purchase.index')
                            ->with('success','Purchase deleted successfully');
    }
    
    
}


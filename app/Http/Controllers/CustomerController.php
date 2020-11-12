<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

        return view ('admin.customer.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view ('admin.customer.index',compact('customer'));
    }
    public function transaction()
    {
        return view ('admin/customer.transaction');
    }
    public function payment()
    {
        return view ('admin/customer.payment');
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
            'mob_no' => 'required|max:10',  
            'gst_no' => 'required|max:25',
            'customer_name' => 'required|max:30',
            'aadhar_no' => 'required|max:12',
            'pan_no' => 'required|max:10',
        ]);
    
        Customer::create($request->all());
     
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer Details Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    // public function show()
    {
        return view ('admin/customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    public function edit(Customer $customer)
    {
        
        return view('admin/customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([

            'mob_no' => 'required|max:10',
            'customer_name' => 'required|max:25',
            'gst_no' => 'required:max:30',
            'address' => 'required',
            'aadhar_no' => 'required|max:12',
            'pan_no' => 'required|max:10',
            'city' => 'required',

        ]);
    
        $customer->update($request->all());
    
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer deleted successfully');
    
    }
}

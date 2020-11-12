<?php

namespace App\Http\Controllers;
use App\Models\Challan;
use Illuminate\Http\Request;
use App\Models\AddVehicle;
class ChallanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
       
        // return $this->hasMany(AddVehicel::class);
        $challan = Challan::all();
        return view ('admin/challan.index', compact('challan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addVehicle = AddVehicle::all();

 
        return view ('admin/challan.create', compact('addVehicle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $challan = new Challan($request->all());
        $request->validate([  
            'vehicle_no' => 'required',  
            'date' => 'required',
            'comment' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            ]);
       
            // if($file = $request->hasFile('image')) {
            //     $file = $request->file('image') ;
            //     $fileName = $file->getClientOriginalName() ;
            //     $destinationPath = public_path().'/challan_imgs/';
            //     $file->move($destinationPath,$fileName);
            // }

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                  $fileName = time().'.'.$extension;

                  $destinationPath = public_path().'/challan_imgs/';

                  $completeFilePath = $fileName ;
                //   dd(public_path());

                  $file->move($destinationPath, $fileName);

                //   $file->move('public/challan_imgs/', $fileName);
                $challan->image = $completeFilePath;
                // $challan->save();
            }

            else{
                // $imagePath = 'noimage.jpg';  
            }
            // $path =  $request->file('image')->storeAs('public/challan_imgs',$fileName);
            // $imagePath = $destinationPath.".".$fileName ;
            // $data = new challan();
            // $data->image = $imagePath;
            // $data->save();

            // Challan::create ($request->all());
            $challan->save();
        return redirect()->route('admin.challan.index')
                        ->with('success','Challan Created successfully.');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challan $challan) 
    {
        $challan->delete();
    
        return redirect()->route('admin.challan.index')
                        ->with('success','Challan deleted successfully');
    }
}

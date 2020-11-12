<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(1);
 
        // dd($user->toArray());
    
        return view ('admin.profile' ,compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'name' => 'required',  
                'password' => 'required',
                'profile_photo_url' => 'required',
            ]);

            User::create($request->all());
        
            return redirect()->route('admin.profile.index')
                            ->with('success',' User Create successfully.');
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
  
   
    public function update(Request $request, User $user)
    {
        $request->validate([

            'name' => '',  
            'password' => '',
            'profile_photo_url' => '',

        ]);
    
        $user->update($request->all());
    
        return redirect()->route('admin.profile.index')
                        ->with('success','User Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


/* 

<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Suplier  $suplier
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Suplier $suplier)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Suplier  $suplier
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Suplier $suplier)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Suplier  $suplier
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Suplier $suplier)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Suplier  $suplier
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Suplier $suplier)
//     {
//         //
//     }
// }


// */
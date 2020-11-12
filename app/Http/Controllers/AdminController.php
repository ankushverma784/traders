<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// namespace App\Models;
use App\Models\User;
class AdminController extends Controller
{
    public function profile()
    {
        // $user = User::all();

        $user = User::find(1);
 
        // dd($user->toArray());
    
        return view ('admin.profile' ,compact('user'));
    }
    // public function edit()
    // {
    
    //     return view ('admin.profile' ,compact('user'));
    // }
    




    // public function update(Request $request, User $user)
    // {
    //     $request->validate([

    //         'name' => 'required',
    //         'profile_photo_path' => 'required',
    //         'password' => 'required',

    //     ]);

    //     $name = $request->input('name');
    //     $password = $request->input('password');
    //     $profile_photo_path = $request->input('profile_photo_path');
    
    //     if($name !='' && $profile_photo_path != ''){
    //       $data = array('name'=>$name,"photo"=>$profile_photo_path);
    
    //       // Call updateData() method of Page Model
    //       User::updateData($userid, $data);
    //       echo 'Update successfully.';
    //       header('localhost/admin/profile');
    //     }else{
    //       echo 'Fill all fields.';
    //     }
    
    //     exit; 
    //   }

        // $user->update($request->all());
    
        // return redirect()->route('admin.profile')
        //                 ->with('success','Profile updated successfully');

        




}

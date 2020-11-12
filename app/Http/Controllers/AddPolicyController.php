<?php
namespace App\Http\Controllers;
use App\Models\Policy;
use Illuminate\Http\Request;
class AddPolicyController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
    $policy = Policy::all();
    return view ('admin.addPolicy.index',compact('policy'));
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
    'amount' => 'required',
    'date' => 'required',
    'policy_no' => 'required',
    'ploicy_name' => 'required',
    ]);
    Policy::create($request->all());
    return redirect()->route('admin.addPolicy.index')
    ->with('success','Policy created successfully.');
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
public function destroy($id)
  {
    Policy::find($id)->delete();
    // $policy->delete();
    return redirect()->route('admin.addPolicy.index')
    ->with('success','Policy deleted successfully');
    }
}
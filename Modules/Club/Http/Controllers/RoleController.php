<?php

namespace Modules\Club\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Club\Entities\role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
          $roles=role::all();
        return view('club::Role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('club::Role.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required |unique:roles'
        ]);
            $role=new role();
            $role->name =$request->name;
            $role->save();
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $role=role::find($id);

        return view('club::Role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'name'=>'required |unique:roles'
        ]);
        $role=role::find($id);
        $role->update([
            'name'=>$request->name
        ]);
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('roles.index');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $role=role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with(['messege','delete success']);
    }
}

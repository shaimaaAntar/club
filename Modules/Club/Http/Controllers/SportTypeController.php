<?php

namespace Modules\Club\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Club\Entities\sportType;

class SportTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $sportTypes=sporttype::all();
        return view('club::sportType.index',compact('sportTypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('club::sportType.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required |unique:sportTypes'
        ]);
        $sportType=new sportType();
        $sportType->name =$request->name;
        $sportType->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('sportTypes.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('club::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $sportType=sportType::find($id);

        return view('club::sportType.edit',compact('sportType'));
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
        $sportType=sportType::find($id);
        $sportType->update([
            'name'=>$request->name
        ]);
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('sportTypes.index');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $sportType=sportType::find($id);
        $sportType->delete();

        return redirect()->route('sportTypes.index');

    }

}

<?php

namespace Modules\Club\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Club\Entities\role;
use Modules\Club\Entities\user;
use Modules\Club\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users=user::with('role')->get();
        return view('club::user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $roles=role::all();
        return view('club::user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserRequest $request)
    {
        $validate = $request->validated();
        $user=new user();
        $user->fullName=$request->fullName;
        $user->email=$request->email;
        $user->password=encrypt($request->password) ;
        $user->role_id=$request->role;
        $user->status=$request->status;
        $user->age=$request->age;
        $user->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $user=user::find($id);
        $roles=role::all();
        return view('club::user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UserRequest $request, $id)
    {
        $user=user::find($id);
        $user->update([
            'fullName'=>$request->fullName,
            'email'=>$request->email,
            'password'=>$request->password,
            'age'=>$request->age,
            'status'=>$request->status,
            'role_id'=>$request->role,
        ]);
        toastr()->success('updated');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $user=user::find($id);
        $user->delete();
        toastr()->success('Deleted');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles= Role::all();
        
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
              
        $request->validate([
            'name'=> 'required|string|max:255',
            'emial'=>"required|string|email|max:255|unique:users,email,{$user->id}",
            'password'=>'nullable|string|min:8|confirmed',

        ]);
        

        $user->name= $request->name;
        $user->email= $request->email;

        if ($user->password) {
            $user->password = bcrypt($request->password);
        }
        
        
        $user->roles()->sync($request->roles);
        //$user->update($request->all());
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=> '¡Bien Hecho!',
            'text'=>'El usuario se actualizo correctamente'
        ]);
        

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

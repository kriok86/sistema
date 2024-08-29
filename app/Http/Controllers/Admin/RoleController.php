<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
     
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=> '¡Bien Hecho!',
            'text'=>'El rol se  creo correctamente'
        ]);
        
        return view('admin.roles.create', compact('permissions'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'unique:roles'],
            'permissions'=> 'nullable|array',
        ]);

        
        $roles= Role::create($request->all());

        $roles->permissions()->attach($request->permissions);
        //$roles->permissions()->sync($request->permissions);
        session()->flash('swal',[
            'icon'=>'success',
            'title'=> '¡Bien Hecho!',
            'text'=>'El rol se creo correctamente'
        ]);
       

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view( 'admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //$permissions = $role->permissions->pluck('id')->toArray();
        //return $permissions;
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
                
        $request->validate([
            'name'=> ['required', 'unique:roles,name,'. $role->id],
            'permissions'=> 'nullable|array'
        ]);

        $role->update($request->all());
        
        $role->permissions()->sync($request->permissions);
        session()->flash('swal',[
            'icon'=>'success',
            'title'=> '¡Bien Hecho!',
            'text'=>'El rol se actualizo correctamente'
        ]);

        
        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        session()->flash('swal',[
            'icon'=>'success',
            'title'=> '¡Bien Hecho!',
            'text'=>'El rol se elimino correctamente'
        ]);
        return redirect()->route('admin.roles.index');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        return view('super-admin-dash.roles.index', [
            'roles' => Role::all(),
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required'],
            'permissions' => ['nullable']
        ]);

        //permissions



        // Create a role
        $role = Role::create($formData);

        //add permissions to role

        $role->givePermissionTo($formData['permissions']);


        return back()->with('message', 'Role created successfully!');
    }

    public function create()
    {
        return view('super-admin-dash.roles.create', [
            'permissions' => Permission::all(),
        ]);
    }

    public function show()
    {
        //

    }
}
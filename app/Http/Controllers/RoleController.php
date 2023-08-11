<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        return view('admins.roles.index', [
            'roles' => Role::all(),
            'permissions' => DB::table('roles')
                ->join('role_has_permissions', 'roles.id', '=', 'role_has_permissions.role_id')
                ->join('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->select('roles.id', 'roles.name', 'permissions.id', 'permissions.name', 'role_has_permissions.*')
                ->where('role_has_permissions.role_id', '=', 'roles.id')
                ->get(),

        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required'],
            'permissions' => ['nullable']
        ]);

        // Create a role
        $role = Role::create($formData);

        //add permissions to role

        $role->givePermissionTo($formData['permissions']);


        return back()->with('message', 'Role created successfully!');
    }

    public function create()
    {
        return view('admins.roles.create', [
            'permissions' => Permission::all(),
        ]);
    }

    public function show()
    {
        //

    }
}
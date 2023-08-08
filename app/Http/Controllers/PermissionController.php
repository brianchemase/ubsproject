<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admins/permissions.index', [
            'permissions' => Permission::all(),
        ]);
    }

    public function create()
    {
        return view('admins/permissions.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required'],
        ]);

        //guard_name



        // Create a permission
        $permission = Permission::create($formData);

        return back()->with('message', 'Permission created successfully!');
    }
}
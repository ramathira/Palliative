<?php

namespace App\Http\Controllers;
use App\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('pages.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('pages.permissions.create');
    }

    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'permission' => 'required|unique:permissions,name',
        ]);

        Permission::create([
            'name' => $request->permission,
        ]);

        return redirect()->route('permissions.index')->with('success', 'Role created successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error creating permission: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function edit(Permission $permission)
    {
        return view('pages.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'permission' => 'required|unique:permissions,name,' . $permission->id,
            ]);
    
            // Update the permission
            $permission->update([
                'name' => $request->permission,
            ]);
    
            // Redirect back with success message
            return redirect()->route('permissions.index')->with('success', 'Permission updated successfully');
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error('Error updating permission: ' . $e->getMessage());
    
            // Redirect back with the error message
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Permission $role)
    {
        $role->delete();
        return redirect()->route('pages.permissions.index')->with('success', 'Role deleted successfully');
    }
}

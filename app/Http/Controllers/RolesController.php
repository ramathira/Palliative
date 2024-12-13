<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('pages.roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'role' => 'required|unique:roles,name',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id', 
        ]);

        $role = Role::create([
            'name' => $request->role,
        ]);
        $roleId = $role->id;
        $existingPermissions = DB::table('permission_role')
        ->where('role_id', $roleId)
        ->pluck('permission_id')
        ->toArray();

        $newPermissions = array_filter($request->permissions, function ($permissionId) use ($existingPermissions) {
            return !in_array($permissionId, $existingPermissions);
        });
 
        $permissionsToInsert = array_map(function ($permissionId) use ($roleId) {
            return [
                'role_id' => $roleId,
                'permission_id' => $permissionId,
            ];
        }, $newPermissions);

        if (!empty($permissionsToInsert)) {
            DB::table('permission_role')->insert($permissionsToInsert);
        }

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error creating roles: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }


    public function edit(Role $role)
    {
        $permissions = DB::table('permissions')->get();
        return view('pages.roles.edit', compact('role','permissions'));
    }

    public function update(Request $request, Role $role)
    {
        try {
            $request->validate([
                'role' => 'required|unique:roles,name,' . $role->id,
                'permissions' => 'required|array',
        'permissions.*' => 'exists:permissions,id', // Ensure permissions are valid
            ]);
    
            $role->update([
                'name' => $request->role,
            ]);
            $role->permissions()->sync($request->permissions);
    
            return redirect()->route('roles.index')->with('success', 'Role updated successfully');
        } catch (\Exception $e) {
            \Log::error('Error updating permission: ' . $e->getMessage());    
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

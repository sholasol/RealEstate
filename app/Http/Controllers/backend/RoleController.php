<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function permissions()
    {
        $permissions = Permission::all();
        return view('role.permissions', ['permissions' => $permissions]);
    }

    public function createPermission(Request $request)
    {
        $request->validate([
            'permission' => ['required', 'string', 'max:255'],
            'group_name' => ['required', 'string', 'lowercase'],
        ]);

        $perms = new Permission();

        $perms->name = trim($request->name);
        $perms->group_name = trim($request->group_name);

        $perms->save();

        $notificaion = array(
            'message' => 'Permission created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }
}

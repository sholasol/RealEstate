<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function permissions()
    {
        $items = Permission::paginate(5);
        return view('role.permissions', ['items' => $items]);
    }

    public function createPermission(Request $request)
    {
        $request->validate([
            'permission' => ['required', 'string', 'max:255'],
            'group_name' => ['required', 'string', 'lowercase'],
        ]);

        $perms = new Permission();

        $perms->name = trim($request->permission);
        $perms->group_name = trim($request->group_name);

        $perms->save();

        $notificaion = array(
            'message' => 'Permission created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }

    public function deletePermission($id)
    {
        $perm = Permission::findOrFail($id);
        $perm->delete();

        $notificaion = array(
            'message' => 'Permission deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }
}

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile', ['data' => $data]);
    }

    public function uploadImg(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->username = $request->username;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notificaion = array(
            'message' => 'Profile Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }
}

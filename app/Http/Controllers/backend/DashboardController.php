<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

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
        //dd($request->all());

        // $request->validate([
        //     'fisrtname' => ['required', 'string', 'max:255'],
        //     'lastname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255',]
        // ]);

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
        ]);


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
            @unlink(public_path('uploads/' . $data->photo)); //remove previous image
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

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'confirm_password' => ['required_with:password|same:password|min:6'],
        ]);

        $id = Auth::user()->id;
        $data = User::find($id);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notificaion = array(
                'message' => 'Invalid password',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notificaion);
        }

        //update
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        $notificaion = array(
            'message' => 'Password changed successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function ViewAllUsers()
    {
        $users = DB::select('select * from users');
        return view('Admin.ManageStaff.view-all', compact('users'));
    }

    public function SearchUser(Request $request)
    {
        return $request;
    }

    public function create()
    {
        return view('Admin.ManageStaff.create-new-staff');
    }


    public function UpdateUserAccess(Request $request, $id)
    {

        User::find($id)->update([
            'allreport' => $request->allreport,
            'alluser' => $request->alluser,
            'reviewreport' => $request->reviewreport,
            'assignstaff' => $request->assignstaff,
            'reviewstatistic' => $request->reviewstatistic,
        ]);

        $notification = array(
            'message' => "User access updated successfully",
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function store(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'dept' => $request->dept,
            'position' => $request->position,
            'contact_no' => $request->contact_no,
            'role' => $request->role,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => "User access updated successfully",
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );
        return redirect()->route('dashboard')->with($notification);
    }


    public function UpdateUser(Request $request, $id)
    {
        if ($request->password == null) {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
        } else {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
        }

        $notification = array(
            'message' => "User info updated successfully",
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function EditUser($id)
    {
        $user = User::find($id);
        return view('Admin.ManageStaff.edit-staff-info', compact('user'));
    }
}

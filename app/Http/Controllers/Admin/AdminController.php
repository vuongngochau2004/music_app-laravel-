<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminController extends Controller
{
    public function logon()  {
        return view('admin.logon');
    }
    public function signUp()  {
        return view('admin.register');
    }
    public function postLogon(Request $request)  {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password ,'role'=> 0])){
            return redirect()->route('admin.index');
        }
        return back()->withErrors([
            'err' => 'Sai ten dang nhap hoac mat khau.'
        ]);
    }
    public function postSignUp(Request $request)  {
        
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $info = [
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'role' => 0
        ];
        User::create($info);
        return redirect()->route('logon');
        
    }
    public function signOut()  {
        Auth::logout();
        return redirect()->route('logon');
    }
}


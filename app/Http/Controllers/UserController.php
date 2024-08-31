<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function getLogin() {
        return view('client.login');
    }
    public function getRegister() {
        return view('client.register');
    }
   
    public function postLogin(Request $request) {
        
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password ,'role'=>1])){
            return redirect('/');
        }
        // if (Auth::attempt($credentials)) {
        //     return redirect('/');
        // }
        return back()->withErrors([
            'login_failed' => 'Sai ten dang nhap hoac mat khau.'
        ]);
    }
    public function postRegister(Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // if (Auth::attempt($credentials)) {
        //     return redirect('/');
        // }
        // return back()->withErrors([
        //     'retgister_failed' => 'sai ten dang nhap hoac mat khau.'
        // ]);
        $info = [
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']), 
            'role' => 1
        ];
        User::create($info);
        return redirect()->route('login');
        // dd(Hash::make($request->password));
        // try {
        //     User::create($request->all());
        // } catch (\Throwable $th) {
        //     dd($th);
        // }
    }
    public function logout() {
        Auth::logout();
        return redirect()->back();
    }
}

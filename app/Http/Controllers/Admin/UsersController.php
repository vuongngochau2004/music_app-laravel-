<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users',compact('users'));
   }
   public function edit(User $user)
    {
        $users = User::all();
        return view('admin.edit-user', compact('users', 'user'));    
    }
    public function update(Request $request, User $user)
    {
        $userUpadte = $request->validate([
            'name' => ['required'],
        ]);
        try {
            $user->update($userUpadte);            
            return redirect()->route('users.index')->with('success','Cập nhật thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại.');
        }
    }
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('users.index')->with('success','Xoá thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Xoá thất bại.');
        }
    }
}

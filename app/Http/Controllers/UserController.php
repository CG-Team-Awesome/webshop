<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function show(){
        
        $user = Auth::user();

        return view('user/profile', [
            'user' => $user
        ]);
    }

    public function edit(){
        
        $user = Auth::user();

        return view('user/edit', [
            'user' => $user
        ]);
    }


    public function validateUser(){
        // TODO: validateUser maken + update hiermee coordineren
    }

    public function update(Request $request){
        
        $user = Auth::user();

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'website' => $request->website
        ]);
            
        return $this->show();
    }

    public function destroy($id){
        User::destroy($id);

        return redirect()->route('admin.user.index');
    }

    public function index(){
        
        $users = User::all();

        return view('admin/user/index', [
            'users' => $users
        ]);
    }
}

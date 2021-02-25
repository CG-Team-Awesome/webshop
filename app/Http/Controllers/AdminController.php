<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //

    public function index(){

        $role = Role::findById(1);
        $permission = Permission::findById(1);
        $role->givePermissionTo($permission);

        return view('admin');
        

        // ddd($_REQUEST);    
        
        // $user = Auth::user();

        // return view('user/profile', [
        //     'user' => $user
        // ]);
    }
}

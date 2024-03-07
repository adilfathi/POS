<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // function user($id,$name){
    //     return view('user',['id' => $id, 'name' => $name]);
    // }

    function index(){

        // $data =[
        //     'username' => 'customer-1',
        //     'nama' => 'pelanggan',
        //     'password' => Hash::make('1234'),
        //     'level_id' => 5
        // ];
        // UserModel::where('username','customer-1')-> update($data);

        $user = UserModel::findOr(2,['username','nama'],function(){
            abort(404);
        });
        return view('users', ['data' => $user]);
    }
}


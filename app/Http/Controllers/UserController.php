<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // function user($id,$name){
    //     return view('user',['id' => $id, 'name' => $name]);
    // }
    function tambah()
    {
        return view('user_tambah');
    }
    function store(Request $request): RedirectResponse{
        $validated = $request-> validated();
        $validated= $request->safe()->only('user_id','level_id','username','nama','password') ;
        $validated= $request->safe()->only('user_id','level_id','username','nama','password') ;
        return redirect('/user');
    }
    function ubah($id){
        $user = UserModel::find($id);
        return view('user_ubah',['data' => $user]);
    }

    function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }
    function ubah_simpan($id,Request $request){
        $user = UserModel::find($id);
        $user -> username = $request->username;
        $user -> nama = $request->nama;
        $user -> password = Hash::make('$request->password');
        $user->save();
        return redirect('/user');

    }
    function hapus($id){
        $user = UserModel::find($id);
        $user-> delete();

        return redirect('/user');
    }
    function create() {
        return view('/m_user/create');
    }

    function index()
    {
        $user = UserModel::with('level')->get();
        return view('users', ['data' => $user]);
        // $user = UserModel::findOrFail(1);
        

        // $user = UserModel::with('level')->get();
        // return view('users', ['data' => $user]);


        // $data =[
        //     'username' => 'customer-1',
        //     'nama' => 'pelanggan',
        //     'password' => Hash::make('1234'),
        //     'level_id' => 5
        // ];
        // UserModel::create($data);
        // $user = UserModel::all();
        // return view('users', ['data' => $user]);

        // // UserModel::insert($data)
        // UserModel::where('username','customer-1')-> update($data);

        // Retriving Single Model
        // $user = UserModel::findOr(1,['username','nama'],function(){
        //     abort(404);
        // });
        // return view('users', ['data' => $user]);

        //No Found Exception
        // $user= UserModel::where('username','manager7')->firstOrFail();
        // return view('users', ['data' => $user]);

        //Retriving Aggregates
        // $user = UserModel::count();
        // return view('users', ['data' => $user]);

        // $user = UserModel::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager Lima Lima',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // $user->username = 'manager12';

        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username','level_id']);
        // $user->wasChanged('nama');
        // $user->wasChanged(['username','username']);
        // dd($user->wasChanged(['username','username']));

    }
}

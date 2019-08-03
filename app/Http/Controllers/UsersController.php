<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//lib db
use Illuminate\Support\Facades\DB;
// call model users
use App\Users;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index()
    {
    	if(Session::get('user_level') == 1){
			$users = Users::all();
    		return view('users/index', ['users' => $users]);
		}else{
			return redirect('/dashboard');
		}
    }

    public function tambah()
    {
		if(Session::get('user_level') == 1){
			return view('users/tambah');
		}else{
			return redirect('/dashboard');
		}
    }

    public function tambah_proses(Request $request)
    {
		DB::table('users')->insert([
			'nik' => $request->nik,
			'username' => $request->username,
			'password' => $request->password,
			'user_level' => $request->userlevel,
			'email' => $request->email
		]);
		return redirect('/users');
    }
    
    public function hapus($id)
    {
		if(Session::get('user_level') == 1){
			DB::table('users')->where('nik',$id)->delete();
			return redirect('/users');
		}else{
			return redirect('/dashboard');
		}
    }
    
	public function edit($id)
	{
		if(Session::get('user_level') == 1){
			$users = DB::table('users')->where('nik',$id)->get();
			return view('users/edit',['users' => $users]);
		}else{
			return redirect('/dashboard');
		}
	}

	public function edit_proses(Request $request)
	{
		DB::table('users')->where('nik',$request->nik)->update([
			'nik' => $request->nik,
			'username' => $request->username,
			'password' => $request->password,
			'user_level' => $request->userlevel,
			'email' => $request->email
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/users');
	}
}
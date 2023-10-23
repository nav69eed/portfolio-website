<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class customAuthController extends Controller
{
    public function loginuser(Request $req)
    {
        $user = User::where('email', '=', $req->email)->first();
        $req->validate([
            'email' => 'email|required',
            'password' => 'required|min:4|max:10'
        ]);
        if ($user) {
            if (($user->password) == ($req->password)) {
                $req->session()->put('loginID', $user->id);
                return redirect('/dashboard');
            } else {
                return back()->with('fail', 'Password Incorrect. Try again !!');
            }
        } else {
            return back()->with('fail', 'Email not Registered !!');
        }
        //  return $user;
    }
    public function logout()
    {
        if (Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('login');
        }
    }

    public function dashboard()
    {
        $datas = DB::table('form_data')->orderBy('id', 'desc')->paginate(5);
        $userData=DB::table('users')->where('id','=',Session::get('loginID'))->get()->first();
        //return Session::get('loginID');
    //   return $userData;
       return view('dashboard',['datas'=>$datas,'userData'=>$userData]);
    }
}

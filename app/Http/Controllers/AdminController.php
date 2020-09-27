<?php

namespace App\Http\Controllers;

use Hash;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.dashboard');
        }
    }

    public function login(){
        return view('admin.login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = Admin::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password, $data->password)){
                session()->put('name',$data->name);
                session()->put('email',$data->email);
                session()->put('admin/login',TRUE);
                return redirect('admin/dashboard');
            }
            else{
                return redirect('admin/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('admin/login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('admin.register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new Admin();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('admin/login')->with('alert-success','Kamu berhasil Register');
    }

}

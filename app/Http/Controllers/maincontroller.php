<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class maincontroller extends Controller
{

    public function home(){
        return view('home');
    }


    public function dashboardhome(){
        return view('dashboardhome');
    }
    public function login(){
        return view('login');
    }
    public function LoginUser(Request $data){
        $user = User::where('email',$data->input('email'))->where('password',$data->input('password'))->first();

        if($user){
            session()->put('id',$user->id);
            session()->put('type',$user->type);
            if($user->type=="admin"){
                return redirect('/');
            }

        }
        else{
            return redirect('login')->with('error'.'email/password incorrect');
        }
    }
    public function registration(){
        return view('registration');
    }
    public function RegistrationUser(Request $data){
        $user = new User();
        $user->name=$data->input('name');
        $user->email=$data->input('email');
        $user->password=$data->input('password');
        $user->type="admin";

        if($user->save()){
            return redirect('login')->with('Success_registration');
        }
    }
    public function logout(){
       session()->forget('id');
       session()->forget('type');
       return redirect('/login');
    }
}

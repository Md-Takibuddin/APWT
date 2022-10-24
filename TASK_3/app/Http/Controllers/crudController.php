<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;
use Hash;


class crudController extends Controller
{
   public function showData()
   {
     $showData = crud::all();
     return view('showData',compact('showData'));
   }

   public function registration()
   {
     return view('registration');
   }
   public function login()
   {
    if(session()->has('email')){
        return view('dashboard');
        }else return view('login');

   }
   public function dashboard()
   {
    if(session()->has('email')){
    return view('dashboard');
    }else return view('login');
   }
   public function storeData(Request $regData)
   {
    $regValidation=[

        'fname'=>'required | max:20',
        'lname'=>'required | max:20',
        'email'=>'required | max:25 | unique:cruds',
        'password'=>'required | min:4',
        'Address'=>'required | max:30',
        'phoneNumber'=>'required | regex:/(01)[0-9]{9}/ ',

    ];
    $this->validate($regData,$regValidation);

    $crud = new Crud();
    $crud->fname = $regData->fname;
    $crud->lname = $regData->lname;
    $crud->email = $regData->email;
    $crud->phoneNumber = $regData->phoneNumber;
    $crud->password = Hash::make ($regData->password);
    $crud->Address = $regData->Address;
    $crud->save();
    Session::flash('regSuccess','Congratulation! Registration successful');

    return redirect()->back();
   }


   public function loginDataCheck(Request $loginData)
   {

    $loginValidation=[

        'email'=>'required',
        'password'=>'required',

    ];
    $this->validate($loginData,$loginValidation);

    // $flag = crud::where('email',$loginData->email)
    // ->where('password',$loginData->password)
    // ->first();

    $user = crud::where ('email','=',$loginData->email)->first();

    if($user){
        if (Hash::check($loginData->password,$user->password)){
        $loginData->session()->put('email',$loginData->email);

        Session::flash('user','Welcome To Dashboard');
        return view('dashboard');
        }
        else {
            Session::flash('fail','Email or Password in incorrect.');
            return redirect()->back();
        }
    }
    else {
        Session::flash('fail','Email or Password in incorrect.');
        return redirect()->back();
    }

   }

   public function myData()
   {
    $email=session('email');
    if(session()->has('email')){
    $myData = crud::where ('email','=',$email)->first();
     return view('myData',compact('myData'));
    }
    else {
        return view('login');
    }

   }
   public function logout()
   {
    Session::forget('key');
    Session::flush();
    return view('login');
   }



}

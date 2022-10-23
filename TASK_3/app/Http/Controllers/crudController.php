<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;

class crudController extends Controller
{
   public function showData()
   {
     return view('show_data');
   }

   public function registration()
   {
     return view('registration');
   }
   public function login()
   {
     return view('login');
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
    $crud->password = $regData->password;
    $crud->Address = $regData->Address;
    $crud->save();
    Session::flash('regSuccess','Congratulation! Registration successful');

    return redirect()->back();
   }


   public function loginData(Request $loginData)
   {

    $loginValidation=[

        'email'=>'required',
        'password'=>'required',

    ];
    $this->validate($loginData,$loginValidation);
    return $loginData->all();
   }

   public function getData(Type $var = null)
   {
    # code...
   }

}

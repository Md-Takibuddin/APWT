<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required',
        'password'=>'required',
        'address'=>'required',
        'phoneNo'=>'required',

    ];
    $this->validate($regData,$regValidation);
    return $regData -> all();
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
}

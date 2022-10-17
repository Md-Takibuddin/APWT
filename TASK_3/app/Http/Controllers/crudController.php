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
    return $regData -> all();
   }
   public function loginData(Request $loginData)
   {

    $regValidation=[

        'email'=>'required',
        'password'=>'required',

    ];
    $this->validate($loginData,$regValidation);
    return $loginData->all();
   }
}

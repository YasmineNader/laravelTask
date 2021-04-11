<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fromController extends Controller
{
    public function viewForm(){

        return view('form');

    }

    public function validationFields(Request $request)
    {            dd($request);


        $this->validate($request,[

             'name'=>'required|alpha|min:3|max:40',
             'age'=>'required|integer|digits:2',
             'phone'=>'required|numeric|digits:11',
             'nationalid'=>'required|numeric|digits:14',
             'password'=>'required|min:6|max:15',
             'address'=>'required|string|min:10',
             'aboutme'=>'required|max:100',
     

        ]);
    
}

}
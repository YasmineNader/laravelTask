<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\person;

class formController extends Controller
{
    public function viewForm(){

        return view('form',['title'=>'form']);

    }

    public function add(Request $request)
    {           
      
       $data = $this->validate($request,[

             'name'=>'required|alpha|min:3|max:40',
             'age'=>'required|integer|digits:2',
             'phone'=>'required|numeric|digits:11',
             'nationalid'=>'required|numeric|digits:14',
             'password'=>'required|min:6|max:15',
             'address'=>'required|string|min:10',
             'aboutme'=>'required|max:100',
     

        ]);
            
        $data['password']=bcrypt($data['password']);
        $query=person::create($data);
      
        return redirect('display');

}

public function display(){
    $data=person::get();
    return view('displayform',["person_data"=>$data]);
}

public function delete(Request $request){
    $id=$request->id;
    $query=person::where('id',$id)->delete();
    

    return redirect('display');
  
}

}
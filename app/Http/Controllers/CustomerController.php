<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
       $user= User::where("user_type","customer")->get();
        return view("Customer.home" , ['users'=>$user]);
    }
    public function update(Request $request ){
        $request->validate(
            [
                "name"=>"required|min:2|max:12",
                "lastName"=>"required|min:6|max:12",
                "email"=>"required|min:7",
                "img"=>"nullable|mimies:png,jpg,jpeg,gif"
            ]
        );
        $imgPath=null;
        if($request->hasFile("img")){
            $imgPath = $request->file("img")->store('images',"public");
        }
       $customer=  new Customer();
       $customer->name= $request->name;
       $customer->lastName= $request->lastName;
       $customer->email= $request->email;
       $customer->gender= $request->gender;
       $customer->imgUrl= $imgPath->img;
       $customer->save();
    //    event(new createUserEvent())
    }
}
// //
    //    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ShowForm(){
        return view("Customer.addPro");
    }
    public function create(Request $r){
        $r->validate([
            "name"=>"required|min:3|max:20",
        ]);
           $imgPath=null;
        if($request->hasFile("image")){
            $imgPath = $request->file("img")->store('proimages',"public");
        }
        $p=new Product();
        $p->name=$r->name;
        $p->save();
        $pd= new ProDetails();
        $pd->price = $r->price;
        $pd->describtion= $r->details;
        $pd->quantity= $r->quantity;
        $pd->made_in= $r->made_in;
        $pd->product_id=$r->proId;
            } 
}

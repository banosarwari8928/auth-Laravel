<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\prodetail;
use App\Models\product;


class ProductController extends Controller
{
    //
    public function ShowForm(){
        return view("Product.addPro");
    }
    public function landing(){
            $pro = product::with("productDetail")->get();
            // return $pro;
           return view("welcome",["pro"=>$pro]); 
    }
    public function create(Request $r){
           $imgPath=null;
        if($r->hasFile("image")){
            $imgPath = $r->file("image")->store('proImages',"public");
        }
        $p= new Product();
        $p->name = $r->proname;
        $p->save();
        $pd= new prodetail ();
        $pd->price = $r->price;
        $pd->describtion= $r->details;
        $pd->quantity= $r->quantity;
        $pd->made_in= $r->made_in;
        $pd->product_id=$p->id;            
        $pd->imgUrl=$imgPath;
        $pd->save();
        return redirect('/');
            } 
}

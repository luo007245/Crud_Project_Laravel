<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class crudcontroller extends Controller
{
    function insert(Request $req){
      $name =  $req->get('pname');
      $price =  $req->get('pprice');
      $pimage =  $req->file('image')->getClientOriginalName();
        //move uploaded file
       $req->image->move(Public_path('images'),$pimage); 
      

       //return $req->input();


       $prod = new product();
       $prod->PName = $name;
       $prod->PPrice = $price;
       $prod->PImage = $pimage;
       $prod->save();
       return redirect('index');
    
    }
    function readdata(){
        $pdata = product::all();
        return view('dataRead',['data'=>$pdata]);
    }
    function updateanddelete(Request $req){
       $id = $req->get('id');
        $name = $req->get('name');
       $price = $req->get('price');
       if($req->get('update') == 'Update'){
          return view('updateview',['pid'=>$id,'pname'=> $name,'pprice' =>$price]);

       }
       else{
          $prod = product::find($id);
          $prod->delete();
       }
       return redirect('/');
    }
    function update(Request $req){

      $ID = $req->get('id');
      $Name = $req->get('name');
      $price = $req->get('price');
      $prod = product::find($ID);
      $prod->PName = $Name;
      $prod->PPrice = $price;
      $prod->save();
      return redirect('/');
    }

}

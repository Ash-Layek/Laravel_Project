<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemlist;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class itemController extends Controller
{
    
    
    public function createItem(){

        return view('createList');
    }



    public function Validation(Request $request){



            
     Validator::make($request->all(), [

        'id' => 'required',
        
        'title' => 'required',
        
        'description' => 'required',
       
        'price' => 'required',
       
        'quantity' => 'required',
        
        'sku' => 'required',

        'picture' => 'required',
       

    ],['required' => 'Required'])->validate();





     $listItem = new itemlist();

     $listItem->id = $request->query->get('id');

     $listItem->title = $request->get('title');

     $listItem->description = $request->get('description');

     $listItem->price = $request->get('price');

     $listItem->quantity = $request->get('quantity');

     $listItem->sku = $request->get('sku');



     $listItem->save();

     


     


       
       
        Storage::disk('local')->makeDirectory('images');

        Storage::disk('local/images')->put('file.png', $request->file('picture'));

     

    


    






}

}
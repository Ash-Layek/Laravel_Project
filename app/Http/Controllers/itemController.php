<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemlist;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image as Image;

use Illuminate\Http\File;

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

        'file' => 'required|mimes:png,jpeg,jpg'

        
       

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


       $request->file('file')->store('public/images/');

/*
        if ($request->hasFile('picture')){



                 $file = $request->file('image');

                $filename = $file->getClientOriginalName();


                $file->storeAs('local/images', $filename);


                return 'FILE T UPLOADA';
            
        }



      */

     

    

}

}
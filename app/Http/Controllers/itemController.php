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


    public function editItem($id,Request $request){


        switch($request->input('action')){



            case 'DELETEE':

            

              $item = itemList::find($id);


              $item->delete();


              if (itemList::find($id)){


                return "FUCK MAZAL KAYN";

              } else {



                return "DELETED FROM DATABASE";

                
              }


              

        
                


            case 'EDIT':

                
        $id = $request->get('idData');
        $title = $request->get('titleData');
        $description = $request->get('descriptionData');
        $price = $request->get('priceData');
        $quantity = $request->get('quantityData');
        $sku = $request->get('skuData');


          $data = [$id, $title,$description,$price,$quantity,$sku];


          return view('edit-item')->with("data", $data);


        }

    
        



    }

    public function deleteItem($id,Request $request){




       





    }



    public function updateItem($id,Request $request){


        Validator::make($request->all(),[

            'id' => 'required',
            
            'title' => 'required',

            'description' => 'required',
           
            'price' => 'required',
           
            'quantity' => 'required',
            
            'sku' => 'required',
    
    
        ],['required' => 'field should not be empty'])->validate();


    

        $items = itemlist::find($id);


 

    if (itemlist::where('title',$request->get('title'))->exists()){

        return 'Item already  in db';
         

    } else { 
          $items->title = $request->get('title');
          $items->description = $request->get('description');
          $items->price = $request->get('price');
          $items->quantity = $request->get('quantity');
          $items->sku = $request->get('sku');

          $items->update();

          return 'Added to database';
    }


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


    Validator::make($request->all(), [

        'title' => 'unique:itemlists,title',
        'id' => 'unique:itemlists,id',
    


    ],['name.unique' => 'Already in Database'])->validate();




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



       $data = itemlist::all();


       return view('item-list', ['items' => $data]);



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
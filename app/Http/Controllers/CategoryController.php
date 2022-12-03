<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

use App\Models\categoryList;
use Illuminate\Support\Facades\Log;

use illuminate\support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    


    public function createCategory(Request $request){


       
        
     Validator::make($request->all(), [

        'name' => 'required'
    


    ],['name.required' => 'Required'])->validate();

     Validator::make($request->all(), [

        'name' => 'unique:category_lists,name'
    


    ],['name.unique' => 'Already in Database'])->validate();
    
   



            
            $newCategoryList = new categoryList;

            $newCategoryList->name = $request->input('name');

            $newCategoryList->save();






          







              

            $data = categoryList::all();




           

         return view('category-list', ['category'=>$data]);





        
    

        //return ''view('form');

    }

 


    public function editCategory(Request $request){


        
     $data = $request->get('nameData');
     $id = $request->get('idData');

     $totaldata = [$data, $id];




      
   
     
     return  view('formData')->with('data',$totaldata,);


    }


    public function sendCategory($id, Request $request){




               
     Validator::make($request->all(), [

        'name' => 'required'
    


    ],['name.required' => 'Required'])->validate();




$categories = categoryList::find($id);


 

    if (categoryList::where('name',$request->get('name'))->exists()){

        return 'Already in db';
         

    } else { 
          $categories->name = $request->get('name');


          $categories->update();

          return 'Added to database';
    }

         
    //    categoryList::where('name',$name)->update(['name'=>$$name]);


    }

    

    




    }



   






 


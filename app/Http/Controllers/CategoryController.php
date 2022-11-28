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


 
         
        

       

    $validate = Validator::make($request->all(), [

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




      
     return  view('formData')->with('data',$data);


    }



   






 
}

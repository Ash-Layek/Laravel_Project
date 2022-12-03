<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <body>
        <title>Item form</title>

       <p style="color :red"> {{$errors}} </p>

        <form action="{{route('Validation')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

      
         <label for="id"  >ID :</label>
         <input type="text" name="id" value="{{old('id')}}"></br>
         <label for="title">TITLE : </label>
         <input type="text" name="title" value="{{old('title')}}"></br>
         <label for="description">DESCRIPTION :</label>
         <input type="text" name="description" value="{{old('description')}}"></br>
         <label for="price"  >PRICE : </label>
         <input type="text" name="price" value="{{old('price')}}"></br>
         <label for="quantity" >QUANTITY : </label>
         <input type="text" name="quantity" value="{{old('quantity')}}"></br>
         <label for="sku" >SKU : </label>
         <input type="text" name="sku" value="{{old('sku')}}"></br>
         <label for="file" >PICTURE : </label>
         <input type="file" name="file" value=""></br>
  
         <button type="submit" >Submit </button>


        </form>



    </body>
</html>

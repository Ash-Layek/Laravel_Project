<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <body>
        <title>Laravel</title>

       <p style="color :red"> {{$errors}} </p>

        <form action="{{route('createCategory')}}" method="post">
        {{csrf_field()}}

      
         <label for="name"  >Name :</label>
         <input type="text" name="name" value="{{old('name')}}">
         <button type="submit" >Submit </button>


        </form>



    </body>
</html>

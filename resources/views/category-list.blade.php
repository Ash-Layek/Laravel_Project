
<h1> Category List </h1>



<table>


<tr>

<td>Category Name : </td>

</tr>

@foreach($category as $data)
<form  method="post" action="{{route('editCategory', $data['id'])}}">
{{csrf_field()}}

<tr>    

<input type="hidden" name="idData" value={{$data['id']}} </br>
<input type="hidden" name="nameData" value={{$data['name']}} </br>

<td> {{$data['name']}} <input type="submit" value="EDIT"></button></td>


</tr>

</form>

@endforeach

<form action='categories/create' method="get">

<button type="submit" value="CLICK HERE TO CREATE NEW CATEGORY">CLICK HERE TO CREATE NEW CATEGORY</button>

</form>



</table>

<h1> Category List </h1>



<table>


<tr>

<td>Category Name : </td>

</tr>

@foreach($category as $data)
<form  method="post" action="{{route('editCategory', $data['id'])}}">
{{csrf_field()}}

<tr>

<input type="hidden" name="data" value={{$data['id']}} </br>

<td> {{$data['name']}} <input type="submit">EDIT</button></td>


</tr>

</form>

@endforeach



</table>
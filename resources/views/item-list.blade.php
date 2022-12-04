
<h1> ITEM List </h1>



<table>


<tr>

<td>ITEM Name : </td>

</tr>

@foreach($items as $data)
<form  method="post" action="{{route('editItem', $data['id'])}}">
{{csrf_field()}}

<tr>    

<input type="hidden" name="idData" value={{$data['id']}} </br>
<input type="hidden" name="titleData" value={{$data['title']}} </br>
<input type="hidden" name="descriptionData" value={{$data['description']}} </br>
<input type="hidden" name="priceData" value={{$data['price']}} </br>
<input type="hidden" name="quantityData" value={{$data['quantity']}} </br>
<input type="hidden" name="skuData" value={{$data['sku']}} </br>


<td> {{$data['title']}} <input type="submit" name="action" value="EDIT"></button><a  onclick="return confirm('Are you sure you want to delete this item?')"> <input type="submit"  name="action" value="DELETEE" onClick=></button>  </a> </td>




</tr>

</form>

@endforeach

<form action='categories/create' method="get">

<button type="submit" value="CLICK HERE TO CREATE NEW ITEM">CLICK HERE TO CREATE NEW ITEM</button>

</form>



</table>

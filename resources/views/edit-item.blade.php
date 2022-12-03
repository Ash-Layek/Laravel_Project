<form action="{{route('updateItem', $data[0])}}" method="post">

@csrf
@method('PATCH')
      <p style="color :red"> {{$errors}} </p>

<label for="id">ID : </label>
<input type="text" name="id" value="{{$data[0]}}"/></br>
<label for="title">TITLE : </label>
<input type="text" name="title" value="{{$data[1]}}"/></br>
<label for="description">DESCRIPTION : </label>
<input type="text" name="description" value="{{$data[2]}}"/></br>
<label for="price">PRICE : </label>
<input type="text" name="price" value="{{$data[3]}}"/></br>
<label for="quantity">QUANTITY : </label>
<input type="text" name="quantity" value="{{$data[4]}}"/></br>
<label for="name">SKU : </label>
<input type="text" name="sku" value="{{$data[5]}}"/></br>


<button type="submit">UPDATE</button>



</form>


<form action="{{route('sendCategory', $data[1])}}" method="post">

@csrf
@method('PATCH')
      <p style="color :red"> {{$errors}} </p>

<label for="name">NAME : </label>
<input type="text" name="name" value="{{$data[0]}}"/></br>

<button type="submit">UPDATE</button>



</form>
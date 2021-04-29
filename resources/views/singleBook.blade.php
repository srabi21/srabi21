@extends('layouts.app')



<div style="padding:30px;">
<h2>Books:</h2>
@foreach($id as $product)


ID: {{$product->getId() }} 
|
Title: <strong>{{$product->getTitle()}}</strong>
|
First Name: {{$product->getFirstName()}}
|
NO. of Pages: {{$product->getNumberOfPages()}}
|
Price:{{ $product->getPrice()}}
   
@endforeach
            
<br>

<!-- update form -->
<form method="POST" action="{{route('product.update',$product->getId())}}" >
@csrf
@method('PUT')

<span ><strong>Product Type:</strong></span>
<select name="type">
<option value="book">BOOk</option>

<br>    
</select><br>
<input  type="text" name="title"  value="{{$product->getTitle()}}" required><br>
<input  type="text" name="fname"  value="{{$product->getFirstName()}}"><br>
<input type="text" name="sname"  value="{{$product->getMainName()}}"><br>
<input type="text" name="price"  value="{{$product->getPrice()}}"><br>
<input  type="text" name="papl" value="{{$product->getNumberOfPages()}}"><br>
<button  type="submit" name="" class="btn btn-success">SAVE</button>

</form>
   
</div>



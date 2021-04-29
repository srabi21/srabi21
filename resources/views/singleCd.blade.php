@extends('layouts.app')



<div style="padding:30px;">
<h2>CDs:</h2>
@foreach($id as $product)

ID: {{$product->getId() }}
|
Title: <strong>{{$product->getTitle()}}</strong>
|
First Name: {{ $product->getFirstName()}}
|
PlayLength: {{ $product->getPlayLength()}}
|
Price:{{ $product->getPrice()}}


@endforeach
         <br>   





<form method="POST" action="{{route('product.update',$product->getId())}}" >
@csrf
@method('PUT')

<span ><strong>Product Type:</strong></span>
<select name="type">
<option value="book">CD</option>

<br>    
</select><br>
<input  type="text" name="title" placeholder="Title" value="{{$product->getTitle()}}" required><br>
<input  type="text" name="fname" placeholder="First Name" value="{{$product->getFirstName()}}"><br>
<input  type="text" name="sname" placeholder="Surname" value="{{$product->getMainName()}}"><br>
<input  type="text" name="price" placeholder="Price" value="{{$product->getPrice()}}"><br>
<input  type="text" name="papl" placeholder="Pages/Play Length/PaPl" value="{{$product->getPlayLength()}}"><br>
<button  type="submit" name="" class="btn btn-success">UPDATE</button>

</form>
   
</div>



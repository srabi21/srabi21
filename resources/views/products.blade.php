@extends('layouts.app')



<div style="padding:30px; background-color:#9deb0e;">

       
<h2>CDs:</h2>
@foreach($cds as $product)

 {{-- ID:{{$product->getId()}} --}} 
|   
<strong>{{$product->getTitle()}}</strong>
|
First Name: {{$product->getFirstName()}} {{$product->getMainName()}}
|

PlayLength:{{$product->getPlayLength()}}
<br>
<a href="{{url('products/'. $product->getId())}}">Select</a>


    
    <form method="post" action="{{route('product.delete',$product->getId())}}">
                        @csrf
                        @method('delete')
                            <button type="submit"> Delete </button>
                    </form>
<br>
@endforeach
           


           
<h2>Books:</h2>
@foreach($books as $product)

{{-- ID:{{$product->getId()}} --}} 
 |
<strong>{{$product->getTitle()}}</strong>
|
First Name: {{$product->getFirstName()}} {{$product->getMainName()}}
|
No. of pages:{{$product->getNumberOfPages()}}

<br>
<a href="{{url('products/'. $product->getId())}}"><span class="btn-btn-primary">select</span></a>

   
    <form method="post" action="{{route('product.delete',$product->getId())}}">
                        @csrf
                        @method('delete')
                            <button type="submit"> Delete </button>
                    </form>
    
 


@endforeach
            
 <h2>Add Product</h2> 
<form method="POST" action="/products/store" >
@csrf

<span ><strong>Product Type:</strong></span>
<select name="type" >
    <option value="cd">CD</option>
    <option value="book">BOOk</option>
    
</select><br>
<br>
<input type="text" name="title" placeholder="Title" required><br>
<input type="text" name="firstname" placeholder="First Name"><br>
<input type="text" name="surname" placeholder="Surname"><br>
<input type="text" name="price" placeholder="Price"><br>
<input type="text" name="papl" placeholder="Pages/Play Length/PaPl"><br>
<button type="submit" name="" class="btn btn-success">SAVE</button>

</form>
</div>
       
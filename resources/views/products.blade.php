@extends('layouts.app')


<div style="padding:80px; background-color:#fcf8e0; background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  
background: linear-gradient(to right, #CFDEF3, #E0EAFC); ">

       
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
<button> <a href="{{url('products/'. $product->getId())}}">Select</a> </button>
<br>
<br>

    
<form method="post" action="{{route('product.delete',$product->getId())}}">
@csrf
@method('delete')
<button type="submit"> Delete </button>
</form>
<br>
@endforeach
           
<hr>

           
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
<button> 
    <a href="{{url('products/'. $product->getId())}}"><span class="btn-btn-primary">Select</span></a> </button>
<br>
<br>

   
    <form method="post" action="{{route('product.delete',$product->getId())}}">
                    @csrf
                    @method('delete')
                         <button type="submit"> Delete </button>
                    </form>
    
 
 <hr>


@endforeach
            
<h2>Add Product</h2> 
<form method="POST" action="/products/store" >
@csrf

<span ><strong>Product Type:</strong></span>
<select name="type" >
    <option value="cd">CD</option>
    <option value="book">BOOK</option>
    
</select><br>
<br>
<input type="text" name="title" placeholder="Title" required><br>
<br>
<input type="text" name="firstname" placeholder="First Name"><br>
<br>
<input type="text" name="surname" placeholder="Surname"><br>
<br>
<input type="text" name="price" placeholder="Price"><br>
<br>
<input type="text" name="papl" placeholder="Pages/Play Length/PaPl"><br>
<br>
<button type="submit" name="" class="btn btn-success">SAVE</button>

</form>
</div>
       

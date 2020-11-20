@extends('layouts.app')
@section('content')
<div class="container py-5 mt-5">
  <div class="row col-12 border-dark">
  @foreach($products as $product)
  <div class="card border-dark ml-4 mr-4 col-md-5 mt-3 mb-3 shadow backgroundform wow zoomIn">
    
    <h5 class="card-title mt-3">{{$product->name}}</h5>
    <hr class="hr">
    </p>
    <p class="card-text">Nel periodo di: <small>{{$product->brand}}</small>
    </p>
    <p class="card-text">Soggiornerà presso:<small>{{$product->price}}</small>
    </p>
    <p class="card-text">Tutto al prezzo di: <small>{{$product->description}}</small>
    </p>
    @foreach($product->images as $image)
    <img src="{{Storage::url($image->src)}}" width="200" alt="">
    @endforeach
    <div class="col-6">
 <a class="btn btn-primary mt-4 mb-3" href="{{route('edit',compact('product'))}}" type="submit" role="button">Modifica dati</a>
 </div>
  </div>
  @endforeach
    </div>
  </div>
@endsection
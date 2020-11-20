@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prodotto') }}</div>
                @if (session ('message'))
            <div class="alert-success col-4">
                {{session ('message')}}
            </div>
            @endif
                <div class="card-body">
                  <form action="{{route('product.update',compact('product'))}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <h2>Modifica dati:</h2>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" value="{{old($product->name)}}" class="form-control" id="Name" placeholder="name">
                 </div>
                 <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="brand" name="brand" value="{{old($product->brand)}}"  class="form-control" id="brand" placeholder="brand">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{old($product->price)}}"  class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" value="{{old($product->description)}}"  id="description" cols="30" rows="10"></textarea>
                </div>    
                <div class="form-group">
                <button type="submit">Salva Prodotto</button>
                </div>
                </form>
                <form action="{{route('product.images.upload',compact('product'))}}" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
                </form>
                <a href="{{route('show', compact('product'))}}">Mostra prodotto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
            <div id="messages"></div>
                <div class="card-body">
                  <form action="{{route('product.update',compact('product'))}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <h2>Modifica dati:</h2>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" value="{{old('name', $product->name)}}" class="form-control" id="Name" placeholder="name">
                 </div>
                 <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="brand" name="brand" value="{{old('brand', $product->brand)}}"  class="form-control" id="brand" placeholder="brand">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{old('price', $product->price)}}"  class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" value="{{old('description', $product->description)}}"  id="description" cols="30" rows="10"></textarea>
                </div>    
                <div class="form-group">
                <button type="submit">Salva Prodotto</button>
                </div>
                </form>
                <a href="{{route('show', compact('product'))}}">Mostra prodotto</a>
                </div>
                <div class="myDropzone dropzone" action_url = "{{route('product.images.upload',compact('product'))}}" init-url="{{route('product.images.get',compact('product'))}}"
                delete-url="{{route('product.images.delete',['id' => $product->id,
                 'id_image' => 0])}}"></div>
            </div>
        </div>
    </div>
</div>
@endsection
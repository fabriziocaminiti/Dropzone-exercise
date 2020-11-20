@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prodotto') }}</div>
                @if (session ('message'))
            <div class="alert-success mt-5">
                {{session ('message')}}
            </div>
            @endif
                <div class="card-body">
                  <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="name" name="name" class="form-control" id="Name" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="brand" name="brand" class="form-control" id="brand" placeholder="brand">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="price" name="price" class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                <button type="submit">Salva Prodotto</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

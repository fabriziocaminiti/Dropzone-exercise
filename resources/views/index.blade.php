@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prodotto') }}</div>

                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="password" class="form-control" id="Name" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <label for="Surname">Password</label>
                    <input type="password" class="form-control" id="Surname" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="password" class="form-control" id="Phone" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label><br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
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

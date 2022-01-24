@extends('Admin.master')

@section('content')

<div class="container">
     
    <div class="card">
        <div class="card-header" style="text-align: center">
    New Item
        </div>
      <div class="card-body">
       
        <form action="/main" method="post" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" class="form-control" name="name" placeholder="Enter Item">
    
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <br>
  <div class="form-group">
    <label for="price">Price</label><br>
    <input type="text" class="form-control" name="price" placeholder="Enter Price">
    
  </div>
  @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <br>
 
 
 <div class="form-group">
        <label for="">  Image</label><br>
        <input type="file" name="image">
      </div>
 <br>
 @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/main" class="btn btn-success">Back</a><br>
</form>
    
        </div>
    </div>
  </div>
  @endsection
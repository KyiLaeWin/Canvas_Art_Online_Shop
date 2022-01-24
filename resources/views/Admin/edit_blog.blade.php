@extends('Admin.master')

@section('content')

<div class="container">
     
    <div class="card">
        <div class="card-header" style="text-align: center">
    New Blog
        </div>
      <div class="card-body">
       
        <form action="/mainblog/{{$blog->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
  <div class="form-group">
    <label for="title">Title</label><br>
    <input type="text" class="form-control" value="{{old('title',$blog->title)}}" name="title" placeholder="Enter title">
    
  </div>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <br>
  <div class="form-group">
    <label for="body">Body</label><br>
    <textarea rows = "6" cols = "60" class="form-control" name = "body">{{old('body',$blog->body)}}</textarea><br>
    
  </div>
  @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <br>
 
 <div class="form-group">
        <label for="">  Image</label><br>
        <img src="{{url('/images/'.$blog->image)}}" width="500" height="300"><br><br><br>
        <input type="file" name="image">
      </div>
 <br>
 @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/mainblog" class="btn btn-success">Back</a><br>
</form>
    
        </div>
    </div>
  </div>
  @endsection
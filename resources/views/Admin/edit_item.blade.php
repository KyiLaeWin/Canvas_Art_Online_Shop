@extends('Admin.master')

@section('content')

  <div class="container">
    
      
    
    
    <div class="card">
        <div class="card-header" style="text-align: center">
    Edit 
        </div>
      <div class="card-body">
         @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
        @endif
        <form action="/main/{{$item->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" value="{{old('name',$item->name)}}"class="form-control" name="name" placeholder="Enter Item" >
    
  </div><br>

  
  
   <div class="form-group">
    <label for="price">Price</label><br>
    <input type="text" value="{{old('price',$item->price)}}"class="form-control" name="price" placeholder="Enter price" >
    
  </div><br>

  <div class="form-group">
        <label for="">  Image</label><br>
        <img src="{{url('/images/'.$item->image)}}" width="500" height="300"><br><br><br>
        <input type="file" name="image">
      </div>
 <br>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/main" class="btn btn-success">Back</a><br>
</form>
    
        </div>
    </div>
  </div>
@endsection
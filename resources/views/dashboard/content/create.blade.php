@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Content for Class</h1>  
  </div>

  <form action="/content" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
     <input class="form-control  @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Input content title" required autofocus value="{{old('title')}}">
     @error('title')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div>
    <br>

    <div class="form-group">
        <label for="body">Content</label>
        <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Input content here..." id="body" name="body" style="height: 100px" value="{{old('body')}}"></textarea>
       @error('content')
         <div class="is-invalid">
          {{$message}}
         </div>
       @enderror
    </div>
      <br>


    <button type="submit" class="btn btn-primary">Create</button>
    
  </form>
  

@endsection
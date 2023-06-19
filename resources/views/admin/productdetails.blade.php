@extends('layouts.master')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category</th>
      <th scope="col">product</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($pro as $post)
    <tr>  
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->category_name}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->price}}</td>
      <td><img src="{{ asset('uploads/services/'.$post->image) }}" width="70px" height="70px" alt="Image"> </td>
      
      <td><a type="button" href="{{ url('edit/'.$post->id) }}" class="btn btn-success">edit</a>
     <a type="button" href="{{ url('delete/'.$post->id) }}" class="btn btn-danger">delete</a>
    </td>
     
    </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
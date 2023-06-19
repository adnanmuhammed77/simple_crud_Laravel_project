@extends('layouts.master')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created at</th>
      <th scope="col">updated at</th>
      <th scope="col">Role as</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($data as $post)
    <tr>  
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->name}}</td>
      <td>{{$post->email}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td>{{$post->role_as}}</td>
     
    </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
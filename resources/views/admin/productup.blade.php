@extends('layouts.master')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<form action="{{ url('/productup') }}" method="post" enctype="multipart/form-data">
@csrf
                  
     <div class="row mt-4 px-4">
 
             <div class="col-md-12">
                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Add Product:</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="name" class="form-control"/>
                            </div> 
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Category name:</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="cat_name" class="form-control"/>
                            </div> 
                            </div>
                            <br>

                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>price:</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="price" class="form-control"/>
                            </div> 
                            </div>

                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>image Upload</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="file" name="image" class="form-control"/>
                            </div> 
                            </div>
                            
                            <div class="col-md-5 px-4 form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                            </div>
            </div>
    </div>
                  
 </form>


@endsection
@extends('base')

@section('content')
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <div class="dropdown-menu m-0">
                        @foreach($pro as $post)
                        <a href="{{ url('userview') }}" class="dropdown-item">{{$post->category_name}}</a>
                        @endforeach
                    </div>
                </div>
               
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
           
        </div>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-primary" type="submit">Logout</button>
</form>
</nav>
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">product</h5>
                        <h1 class="display-6 mb-4">oru new products</h1>
                        
                    </div>
                </div>
               
                @foreach($pro as $post)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                 
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{ asset('uploads/services/'.$post->image) }}" alt="">
                           
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2"> product name : {{ $post->name}}</h4>
                            <h3 class="text-primary mb-0">category name : {{ $post->category_name}}</h3>
                            <p class="text-primary mb-0">Rs. {{ $post->price}}</p>

                        </div>
                       
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
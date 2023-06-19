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

@endsection
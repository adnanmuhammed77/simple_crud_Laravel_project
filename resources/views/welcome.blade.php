@extends('base')

@section('content')
          
            <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow-sm px-5 py-3 py-lg-0">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" type="button" class="btn btn-primary">Home</a>
                    @else
                        <a href="{{ url('admin/dashboard') }}" type="button" class="btn btn-primary">Log in</a>

                       
                    @endauth
                </div>
            @endif
</nav>


        
 @endsection


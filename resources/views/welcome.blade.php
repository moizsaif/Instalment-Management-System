@if(Auth::guest())
    @include('auth.register')
@else
    @include('home')
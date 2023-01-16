@if (Route::has('login'))
<div>
    @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/funds/create') }}">Create Fund</a>
        <a href="{{ url('/updates/create') }}">Write an update</a>
    @else
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('logout') }}">Log Out</a>
        
        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
</div>
@endif
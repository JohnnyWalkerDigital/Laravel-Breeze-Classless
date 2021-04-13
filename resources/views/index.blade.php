@component('layouts.guest')
    @auth
        <a href="{{ url('/dashboard') }}">Logged Out Dashboard</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
@endcomponent

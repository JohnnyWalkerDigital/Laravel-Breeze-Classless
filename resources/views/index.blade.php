@component('layouts.guest')
    <h1>Welcome</h1>
    @auth
        <a href="{{ url('/dashboard') }}">Dashboard</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
@endcomponent

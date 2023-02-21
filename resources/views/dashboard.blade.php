@component('layouts.app')
    @slot('header')
        <h1>
            {{ __('Logged In Dashboard') }}
        </h1>
    @endslot
    You're logged in!

    <x-auth-card>
        <a href="{{ route('profile.edit') }}">Edit your profile</a>
    </x-auth-card>
@endcomponent

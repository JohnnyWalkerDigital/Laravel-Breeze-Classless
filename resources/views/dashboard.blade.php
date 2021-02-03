@component('layouts.app')
    @slot('header')
        <h2>
            {{ __('Dashboard') }}
        </h2>
    @endslot
    You're logged in!
@endcomponent

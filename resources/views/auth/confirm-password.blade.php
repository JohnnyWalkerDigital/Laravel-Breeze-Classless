@component('layouts.guest')
    @component('components.auth-card')
        <div>
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <h1>{{ __('Confirm password') }}</h1>

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <button>
                {{ __('Confirm') }}
            </button>
        </form>
    @endcomponent
@endcomponent

@component('layouts.guest')
    @component('components.auth-card')
        <h1>{{ __('Forgotten password') }}</h1>

        <p>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>

        <!-- Session Status -->
        @include('includes.auth-session-status')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
            </div>

            <button>
                {{ __('Email Password Reset Link') }}
            </button>
        </form>
    @endcomponent
@endcomponent

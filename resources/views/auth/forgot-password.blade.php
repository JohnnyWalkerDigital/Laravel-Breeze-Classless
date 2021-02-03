@component('layouts.guest')
    @component('components.auth-card')
        <div>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        @include('includes.auth-session-status')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <div>
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    @endcomponent
@endcomponent

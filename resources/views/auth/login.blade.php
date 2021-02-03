@component('layouts.guest')
    @component('components.auth-card')
        <!-- Session Status -->
        @include('includes.auth-session-status')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>

                <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>

                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>

                <button>
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    @endcomponent
@endcomponent

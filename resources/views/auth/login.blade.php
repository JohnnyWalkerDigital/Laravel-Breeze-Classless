@component('layouts.guest')
    @component('components.auth-card')
        <h1>{{ __('Login') }}</h1>
        <!-- Session Status -->
        @include('includes.auth-session-status')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value=" __('Email')"/>
                <x-text-input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                              autocomplete="username" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>
                <button>
                    {{ __('Login') }}
                </button>
            </div>

            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </form>
    @endcomponent
@endcomponent

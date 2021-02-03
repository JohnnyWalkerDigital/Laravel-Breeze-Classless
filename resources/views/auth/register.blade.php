@component('layouts.guest')
    @component('components.auth-card')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="first_name">{{ __('First Name') }}</label>

                <input id="first_name"  type="text" name="first_name" value="{{ old('name') }}" required autofocus />
            </div>
            <div>
                <label for="last_name">{{ __('Last Name') }}</label>

                <input id="last_name"  type="text" name="last_name" value="{{ old('name') }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>

                <input id="email"  type="email" name="email" value="{{ old('email') }}" required />
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>

                <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>

                <input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div>
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button>
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    @endcomponent
@endcomponent

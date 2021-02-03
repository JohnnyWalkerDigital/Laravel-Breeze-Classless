@component('layouts.guest')
    @component('components.auth-card')

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>

                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus>
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>

                <input id="password" type="password" name="password" required>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>

                <input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required>
            </div>

            <div>
                <button>
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    @endcomponent
@endcomponent

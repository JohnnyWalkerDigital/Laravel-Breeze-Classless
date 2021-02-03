@component('layouts.guest')
    @component('components.auth-card')
        <div>
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>

                <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
            </div>

            <div>
                <button>
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    @endcomponent
@endcomponent

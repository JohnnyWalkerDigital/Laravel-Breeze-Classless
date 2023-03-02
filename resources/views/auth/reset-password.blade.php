@component('layouts.guest')
    @component('components.auth-card')

        {{ __('Reset password') }}

        <!-- Validation Errors -->
        @include('includes.auth-validation-errors')

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email"
                              value="{{ old('email', $request->email) }}" required autofocus />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                <x-text-input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <button>
                {{ __('Reset Password') }}
            </button>
        </form>
    @endcomponent
@endcomponent

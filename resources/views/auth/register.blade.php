@extends('layouts.app')

@section('content')

    <div id="login">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">{{ __('Name') }}</label>

                <div>
                    <input type="text" class="@error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email">{{ __('E-Mail Address') }}</label>

                <div>
                    <input type="email" class="@error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password">{{ __('Password') }}</label>

                <div>
                    <input type="password" class="@error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <div>
                    <input type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

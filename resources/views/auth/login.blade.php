@extends('layouts.app')

@section('content')
        <div id="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                               autofocus>

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
                        <input type="password"
                               class="@error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="inline">

                    <div class="inputRemember">
                        <input type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <div>
                        <label for="remember">
                            {{ __('Remember me') }}
                        </label>
                    </div>
                </div>

                <div>
                    <div>
                        <button type="submit" class="subButton">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"><br>
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
@endsection

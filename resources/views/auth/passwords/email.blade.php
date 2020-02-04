@extends('layouts.app')

@section('content')
    <div id="login">

        @if (session('status'))
            <div role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">{{ __('E-Mail Address') }}</label>

            <div>
                <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus>

                @error('email')
                <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <button type="submit">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
    </div>

@endsection

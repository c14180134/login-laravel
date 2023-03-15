@extends('layout/aplikasi')

@section('konten')
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-content">
                        <form method="POST" action="{{ route('password.updates') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="field">
                                <label class="label">{{ __('Email Address') }}</label>

                                <div class="control">
                                    <input class="input is-disabled @error('email')  is-danger @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" disabled autofocus>
                                </div>

                                @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label">{{ __('Password') }}</label>

                                <div class="control">
                                    <input class="input @error('password') is-danger @enderror" type="password" name="password" required>
                                </div>

                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label">{{ __('Confirm Password') }}</label>

                                <div class="control">
                                    <input class="input" type="password" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-primary">{{ __('Reset Password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
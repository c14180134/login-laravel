@extends('layout.aplikasi')

@section('konten')
    <div class="container pt-6">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">{{ __('Change Password') }}</p>
                    </header>

                    <div class="card-content">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <div class="field">
                                <label class="label" for="current_password">{{ __('Current Password') }}</label>
                                <div class="control has-icons-left">
                                    <input id="current_password" type="password" class="input @error('current_password') is-danger @enderror" name="current_password" autocomplete="current-password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                @error('current_password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label" for="password">{{ __('New Password') }}</label>
                                <div class="control has-icons-left">
                                    <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" autocomplete="new-password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>

                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label" for="password-confirm">{{ __('Confirm New Password') }}</label>
                                <div class="control has-icons-left">
                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" autocomplete="new-password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-primary">{{ __('Change Password') }}</button>
                                </div>

                                <div class="control">
                                    <button type="reset" class="button is-link">{{ __('Reset') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
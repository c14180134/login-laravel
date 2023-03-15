@extends('layout/aplikasi')

@section('css-head')
<link rel="stylesheet" href="{{ mix('resources/css/login.css') }}">
@endsection

@section('konten')
<section class="section">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half">
        <div class="box">
          <h1 class="title has-text-centered">{{ __('Reset Password') }}</h1>
          <form method="POST" action="{{ route('sesi.password.email') }}">
            @csrf
            <div class="field">
              <label class="label">{{ __('Email') }}</label>
              <div class="control">
                <input class="input @error('email') is-danger @enderror" type="email" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              @error('email')
              <p class="help is-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="field">
              <button type="submit" class="button is-primary is-fullwidth">
                {{ __('Send Password Reset Link') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
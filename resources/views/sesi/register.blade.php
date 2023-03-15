@extends('layout/aplikasi')
@section('css-head')
<link rel="stylesheet" href="{{ mix('resources/css/login.css') }}">
@endsection
@section('konten')
<section class="hero is-fullheight" style="background: linear-gradient(to bottom, #2980B9, #6DD5FA, #FFFFFF);">
    <div class="hero-body">
        <div class="container" >
            <div class="columns is-3 is-variable ">
                <div class="column is-3">
                    
                </div>
                <div class="column is-6">
                    <div class="box p-0">
                        <div class="columns">
                            <div class="column p-5">
                                <div class="has-text-centered">                       
                                    <form method="post" action="/sesi/create" enctype="multipart/form-data">
                                        @csrf
                                        <div class="field">
                                            <label class="label has-text-left">Nama</label>
                                            <div class="control">
                                                <input class="input @error('name') is-danger @enderror" name="name" value="{{Session::get('name')}}" type="text" placeholder="Your Name" autofocus="">
                                            </div>
                                            @error('name')
                                                <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <label class="label has-text-left">Email</label>
                                            <div class="control">
                                                <input class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') ?: session('email') }}" type="email" placeholder="Your Email" autofocus="">
                                            </div>
                                            @error('email')
                                                <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <label class="label has-text-left">Password</label>
                                            <div class="control">
                                                <input class="input @error('password') is-danger @enderror" name="password" type="password" placeholder="Your Password">
                                            </div>
                                            @error('password')
                                                <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <label class="label has-text-left" for="password_confirmation">Confirm Password</label>
                                            <div class="control">
                                                <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" name="password_confirmation" type="password" placeholder="Your Password">
                                                @if ($errors->has('password_confirmation'))
                                                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <button class="button is-block is-info is-fullwidth" name="submit" type="submit">
                                            <span class="icon is-small">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            <span>Register</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="column p-5" id="register-container" style="display: flex; flex-direction: column; justify-content: center;">
                                <h1 class="title is-3">REGISTER</h1>
                                <p class="is-size-5">Create new account to log in</p>
                                <p class="is-size-6">Already have account?<a href="/sesi">Login</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                <div class="column is-3">
                    <!-- content for fourth column goes here -->
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
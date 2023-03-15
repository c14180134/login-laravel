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
                            <div class="column p-5" id="login-container" style="display: flex; flex-direction: column; justify-content: center;">
                                <h1 class="title is-3">LOGIN</h1>
                                <p class="is-size-5">Welcome To Website</p>
                                <div class="social-media">
                                    <a href="https://facebook.com" target="_blank" class="button is-light is-large"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://instagram.com" target="_blank" class="button is-light is-large"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://twitter.com" target="_blank" class="button is-light is-large"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="column p-5">
                                <div class="has-text-centered">
                            
                                    <div class="columns is-centered">
                                        <figure class="image is-128x128 avatar is-centered">
                                            <img class="is-rounded" src="https://img.freepik.com/free-vector/locker_53876-25496.jpg?w=740&t=st=1678776182~exp=1678776782~hmac=be4a6bce1d27603e648daa5a72d9189d4383c2cca7b556d909f1948580dcdfbf">
                                        </figure>
                                    </div>
                                    
                                    <form method="post" action="/sesi/login" enctype="multipart/form-data">
                                        @csrf
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
                                            <div class="control has-icons-right">
                                              <input class="input @error('password') is-danger @enderror" name="password" type="password" placeholder="Your Password">
                                              <span class="icon is-small is-right" id="showPassword" style="pointer-events: all; cursor: pointer">
                                                <i class="fas fa-eye"></i>
                                              </span>
                                            </div>
                                            @error('password')
                                              <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <label class="checkbox">
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                Remember me
                                            </label>
                                        </div>
                                        <button class="button is-block is-info is-fullwidth" name="submit" type="submit">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="columns">
                                <div class="column is-half pl-6">
                                    
                                </div>
                                <div class="column is-half has-text-right pr-4 mt-4">
                                    <a href="{{ route('password.request') }}">Forgot Password</a>
                                </div>
                                </div>
                                
                            
                        
                    
                        </div>
                        </div>
                    </div>
                    <div class="has-text-centered">
                        <p>Don't have an account? <a href="sesi/register">Sign up</a></p>
                    </div>
                </div>
                </div>
                <div class="column is-3">
                    <!-- content for fourth column goes here -->
                  </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('resources/js/login.js') }}"></script>
</section>
@endsection
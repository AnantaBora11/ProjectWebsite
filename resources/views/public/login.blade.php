@extends('public.layout.index')
@section('template1')

{{-- login container --}}
<section id="loginku">
<div class="login-content">
    <div class="formcontainer">
        <div class="col col-1">
            <div class="image-layer">
                <img src="/img/login-gambar.webp" class="imglogin">
            </div>
            <p class="motivasi">Mulai buat cv mu sendiri, dan bagikan ke orang lain <span>XniorCV</span></p>
        </div>

        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Sign In</button>
                <button class="btn btn-2" id="register">Sign Up</button>
            </div>
            <form class="login-form" action="/sesi/login" method="POST">
                <div class="form-title">
                    <span>Sign In</span>
                </div>
                @csrf
                <div class="form-inputs">
                    <div class="input-box">
                        <input value="{{ Session::get('email') }}" for="email" name="email" type="text" class="input-field" placeholder="email" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input for="password" name="password" type="password" class="input-field" placeholder="password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    {{-- <div class="forgot-pass">
                        <a href="#">Forgot Password</a>
                    </div> --}}
                    <div class="input-box">
                        <button name="submit" type="submit" class="input-submit">
                            <span>Sign In</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
            </form>

             {{-- Register container --}}
             <div class="register-form">
                
                <form class="login-form" action="/sesi/create" method="POST">
                    <div class="form-title">
                        <span>Create Account</span>
                    </div>
                    @csrf
                    <div class="form-inputs">
                        <div class="input-box">
                            <input value="{{ Session::get('name') }}" for="name" name="name" type="text" class="input-field" placeholder="name" required>
                            <i class="bx bx-user icon"></i>
                        </div>
                        <div class="input-box">
                            <input value="{{ Session::get('email') }}" for="email" name="email" type="text" class="input-field" placeholder="email" required>
                            <i class="bx bx-user icon"></i>
                        </div>
                        <div class="input-box">
                            <input for="password" name="password" type="password" class="input-field" placeholder="password" required>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="input-box">
                            <button name="submit" type="submit" class="input-submit">
                                <span>Register</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection
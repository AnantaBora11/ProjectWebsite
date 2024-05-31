@extends('layout.other.template1.index')
@section('template1')
    
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
            
             {{-- login container --}}
            <div class="login-form">
                <div class="form-title">
                    <span>Sign In</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign In</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>

             {{-- Register container --}}
             <div class="register-form">
                <div class="form-title">
                    <span>Create Account</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="email" required>
                        <i class="bx bx-envelope icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign Up</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout.publicview.PublicAcc')
    @section('konten')
<div class="login">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <div  class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
    
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password</a>
            </div>
    
            <button type="submit" class="btn">Login</button>
        
            <div class="register-link">
                <p>Don't have an acount? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
</div>
    @endsection

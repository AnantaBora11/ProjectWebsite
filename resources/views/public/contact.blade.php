@extends('public.layout.index')
@section('template1')
<div class="container">
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <div class="info">
                <div class="information">
                    <img src="img/email.png" class="icon" alt="" />
                    <p>lorem@ipsum.com</p>
                </div>
                <div class="information">
                    <img src="img/phone.png" class="icon" alt="" />
                    <p>123-456-789</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            @include('componen.pesan')

            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                    <input type="text" name="nama" id="nama" class="input" />
                    <label for="nama">Username</label>
                    <span>Username</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" id="email" class="input" />
                    <label for="email">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="nomor" id="nomor" class="input" />
                    <label for="nomor">Phone</label>
                    <span>Phone</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="komen" id="komen" class="input"></textarea>
                    <label for="komen">Message</label>
                    <span>Message</span>
                </div>
                <input type="submit" value="Send" class="btn" />
            </form>

        </div>
    </div>
</div>
@endsection

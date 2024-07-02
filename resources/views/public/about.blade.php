@extends('layout.other.template1.index')
@section('template1')
<div class="container">
    <div class="card__container">
       <article class="card__article">
          <img src="assets/img/landscape-1.png" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Vancouver Mountains, Canada</span>
             <h2 class="card__title">The Great Path</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>

       <article class="card__article">
          <img src="assets/img/landscape-2.png" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Poon Hill, Nepal</span>
             <h2 class="card__title">Starry Night</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>

       <article class="card__article">
          <img src="assets/img/landscape-3.png" alt="image" class="card__img">

          <div class="card__data">
             <span class="card__description">Bojcin Forest, Serbia</span>
             <h2 class="card__title">Path Of Peace</h2>
             <a href="#" class="card__button">Read More</a>
          </div>
       </article>
    </div>
 </div>
@endsection
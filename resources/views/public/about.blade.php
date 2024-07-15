@extends('public.layout.index')
@section('template1')
@foreach ($data as $item)
<div id="about-card-area">
   <div class="about-wrapper">
      <div class="about-box-area">
         <div class="about-box">
            <img src="{{ url('foto'). '/' . $item->foto }}">
            <div class="about-overlay">
               <h3>{{ $item->judul }}</h3>
               <p>{{ $item->deskripsi }}</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endforeach
@endsection
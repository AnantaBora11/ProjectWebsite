@extends('dashboard.layout.index')
@section('template2')
<!-- START FORM -->

<form action="{{ route('dashboard.kontak.update', $data->nama) }}" method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a class="btn btn-secondary" href="{{ url('dashboard/kontak') }}">kembali</a>
        <div class="mb-3 row">
            <label for="nomor" class="col-sm-2 col-form-label">Nomor</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('nomor') }}" type="text" class="form-control" name='nomor' id="nomor">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('youtube') }}" type="text" class="form-control" name='youtube' id="youtube">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('twitter') }}" type="text" class="form-control" name='twitter' id="twitter">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('instagram') }}" type="text" class="form-control" name='instagram' id="instagram">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('facebook') }}" type="text" class="form-control" name='facebook' id="facebook">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input value="{{ Session::get('email') }}" type="text" class="form-control" name='email' id="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi2" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection

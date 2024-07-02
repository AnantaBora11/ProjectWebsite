@extends('layout.privateview.private')
@section('template')

	<div class="upload-form-container">
		<input type="file" id="file" accept="image/*" hidden>
		<div class="upload-img-area" data-img="">
			<i class='bx bxs-cloud-upload icon'></i>
			<h3>Upload Image</h3>
			<p>Image size must be less than <span>2MB</span></p>
		</div>
		<button class="select-image">Select Image</button>
		<button class="select-image">upload</button>
	</div>

</html>
@endsection
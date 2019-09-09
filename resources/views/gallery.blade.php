@extends('layout')

@section('title', 'Domov')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
@endsection

@section('content')

<section id="gallery">
	<div class="container">
		<div class="row">
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/01.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/01.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/02.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/02.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/03.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/03.jpg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/04.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/04.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/05.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/05.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/06.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/06.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/07.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/07.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/08.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/08.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/09.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/09.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/10.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/10.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/11.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/11.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/12.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/12.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/13.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/13.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/14.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/14.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/15.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/15.jpg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/16.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/16.jpg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/17.png') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/17.jpg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/18.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/18.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/19.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/19.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/20.jpg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/20.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/21.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/21.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/22.png') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/22.JPG') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/23.png') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/23.JPG') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/24.png') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/24.JPG') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/25.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/25.jpeg') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/26.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/26.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/27.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/27.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/28.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/28.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/29.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/29.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/30.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/30.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/31.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/31.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/32.JPG') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/32.png') }}">
				</a>
			</div>
			<div class="col col-3">
				<a class="img" href="{{ asset('img/gallery/33.jpeg') }}" data-lightbox="gallery" data-title="Obrázok 1">
					<img src="{{ asset('img/gallery/33.jpeg') }}">
				</a>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
@endsection
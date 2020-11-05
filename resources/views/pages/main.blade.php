<?
@extends('layouts.app')
@section('judul_halaman', 'Selamat Datang')
@section('title', 'WebBelajar | Home')


@section('konten')
<p>Di</p>
WebBelajar
@endsection


@section('konten2')
<section class="ftco-section ftco-section-2 bg-light" id="cards">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-section mb-4 pb-md-3">
							Materi yang ada di WB
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="heading-section mb-4 pb-md-3">
							<small>Cards Default</small>
						</h2>
						<div class="card">
						  <h5 class="card-header py-4">Featured</h5>
						  <div class="card-body">
						    <h5 class="card-title">Special title treatment</h5>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="heading-section mb-4 pb-md-3">
							<small>Cards with image</small>
						</h2>
						<div class="card">
						  <img src="tools/images/5514.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						  	<h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content. A small river named Duden flows by their place.</p>
						  </div>
						</div>
					</div>

					<div class="col-md-4">
						<h2 class="heading-section mb-4 pb-md-3">
							<small>Cards w/ Header &amp; Footer</small>
						</h2>
						<div class="card text-center">
						  <h5 class="card-header py-4">
						    Featured
						  </h5>
						  <div class="card-body">
						    <h5 class="card-title">Special title treatment</h5>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						  <div class="card-footer text-muted">
						    2 days ago
						  </div>
						</div>
					</div>
				</div>
			</div>
	  </section>


@endsection

?>
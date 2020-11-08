<?
@extends('layouts.app')
@section('judul_halaman', 'Selamat Datang')
@section('title', 'WebBelajar | Home')


@section('konten')
<p>Di</p>
WebBelajar
@endsection


@section('konten2')

<section class="ftco-section ftco-section-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						
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
							<div class="card">
				  				<img src="tools/images/5514.jpg" class="card-img-top" alt="...">
				  				<div class="card-body">
						  <center>
						  <h5 class="card-title">Kelas 10</h5>
						  <a href="{{asset('10')}}" class="btn btn-primary">Buka</a>
						  </center>
					   </div>
							</div>
						</div>
					<div class="col-md-4">
						<div class="card">
						  <img src="tools/images/4b4bc8f0e26e86fcbdfb5b7a898ee910.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						  <center>
						  <h5 class="card-title">Kelas 11</h5>
						  <a href="{{asset('11')}}" class="btn btn-primary">Buka</a>
						  </center>
					   </div>
						</div>
					</div>
					<div class="col-md-4">
					<div class="card">
					  <img src="tools/images/5836.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
						  <center>
						  <h5 class="card-title">Kelas 12</h5>
						  <a href="{{asset('12')}}" class="btn btn-primary">Buka</a>
						  </center>
					   </div>
					</div>
				</div>
				</div>
	  			</section>
					
					</div>
				</div>
			</div>
	  </section>
	  



@endsection

?>
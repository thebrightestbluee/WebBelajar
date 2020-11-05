<?
@extends('layouts.app')
@section('judul_halaman', 'Halaman Utama')
@section('title', 'WebBelajar | Home')


@section('konten')
<section class="ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(images/bg_2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login py-4">
                    <form class="form-login" method="" action="">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                            <div class="social-line">
                                <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                    <i class="ion-logo-facebook"></i>
                                </a>
                                <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                    <i class="ion-logo-twitter"></i>
                                </a>
                                <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                                    <i class="ion-logo-googleplus"></i>
                                </a>
                            </div>
                        </div>
                        <!-- <p class="description text-center">Or Be Classical</p> -->
                        <div class="card-body p-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-contact"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="First Name...">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-paper-plane"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email...">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password...">
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
?>
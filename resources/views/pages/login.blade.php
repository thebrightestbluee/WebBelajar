<?
@extends('layouts.app')

@section('title', 'WebBelajar | Login')


@section('uwu')
<section class="ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(images/bg_2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 ml-auto mr-auto">
                <div class="card card-login py-4">
                    <form class="form-login" method="" action="">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <!-- <p class="description text-center">Or Be Classical</p> -->
                        <div class="card-body p-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ion-ios-contact"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Username...">
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
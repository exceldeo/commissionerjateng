@extends('layouts.app')

@section('title', 'Galery')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-lg-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-3 font-weight-bold mb-5">
                            Galery
                        </h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-2 border-bottom border-dark"></div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 my-3 text-center">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-lg-4 my-3 text-center">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-lg-4 my-3 text-center">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

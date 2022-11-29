@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 my-3">
                                <img src="{{ asset('images/YUDHA_SAPUTRA1.jpg') }}" style="object-fit: none; object-position: center;" height="100%" width="100%" alt="Responsive image">
                            </div>

                            <div class="col-md-1 my-3"></div>

                            <div class="col-md-6 my-3">
                                <h1 class="display-4 font-weight-bold mb-5">
                                    GET IN TOUCH
                                </h1>
                                <p class="my-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                                </p>
                                <div class="row">
                                    <div class="col-md-2">
                                        Test :
                                    </div>
                                    <div class="col-md-10">
                                        Test
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

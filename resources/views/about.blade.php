@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-md-6 my-3">
                        <h1 class="display-3 font-weight-bold mb-5">
                            Virtual Webinar Event on Digital Marketing
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                        </p>
                        <button type="button" class="btn btn-warning rounded-0 font-weight-bold px-4 py-3">GET YOUR TICKETS</button>
                    </div>

                    <div class="col-md-1 my-3"></div>

                    <div class="col-md-5 my-3">
                        <img src="{{ asset('images/YUDHA_SAPUTRA1.jpg') }}" style="object-fit: none; object-position: center;" height="100%" width="100%" alt="Responsive image">
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 my-3">
                                <img src="{{ asset('images/YUDHA_SAPUTRA1.jpg') }}" style="object-fit: none; object-position: center;" height="100%" width="100%" alt="Responsive image">
                            </div>

                            <div class="col-md-1 my-3"></div>

                            <div class="col-md-6 my-3">
                                <h1 class="display-4 font-weight-bold mb-5">
                                    Virtual Webinar Event on Digital Marketing
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12 bg-warning">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
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

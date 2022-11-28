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
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="exampleInputName" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0" id="exampleInputEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control border-top-0 border-right-0 border-left-0" id="exampleInputMessage" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning px-4 py-2 rounded-0 font-weight-bold">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

@extends('layouts.app')

@section('title', 'Galery')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="font-weight-bold">
                           REGISTER
                        </p>
                        <h1 class="display-3 font-weight-bold mb-5">
                            Event Pricing & Registration
                        </h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-md-2 border-bottom border-dark"></div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                        </p>
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
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3">
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
                            <div class="col-md-4">
                                <p class="font-weight-bold">
                                    FAQ
                                </p>
                                <h1 class="display-3 font-weight-bold border-top border-dark mb-5">
                                    Frequently Asked Questions
                                </h1>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div id="accordion">
                                            <div class="card border-0">
                                                <div class="card-header bg-white" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0">
                                                <div class="card-header bg-white" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0">
                                                <div class="card-header bg-white" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12 text-center">
                        <p class="font-weight-bold">
                           PARTNERS
                        </p>
                        <h1 class="display-3 font-weight-bold mb-5">
                            Thanks to Our Sponsors!
                        </h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-md-2 border-bottom border-dark"></div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-md-3 text-center my-3">
                                <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning rounded-0 font-weight-bold px-4 py-3">BECOME A SPONSOR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                                <h1 class="display-4 font-weight-bold">
                                    Kontak Kami
                                </h1>
                                <p class="my-4">
                                    Apabila ada keperluan, Anda dapat menghubungi kami melalui:
                                </p>
                                <p>
                                    <b>Alamat</b> <br>
                                    Komplek Puri Niaga Center Blok DD 5/12 <br>
                                    Jl. Puri Anjasmoro Semarang <br><br>

                                    <b>Telp</b> <br>
                                    (024) 7617187 <br><br>

                                    <b>Fax</b> <br>
                                    (024) 7626796 <br><br>

                                    <b>Email</b> <br>
                                    jatengperbasi@gmail.com <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

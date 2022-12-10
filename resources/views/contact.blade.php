@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-lg-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-5 my-3">
                                <img src="{{ asset('images/contact.jpeg') }}" style="width: 100%" alt="Responsive image">
                            </div>

                            <div class="col-lg-1 my-3"></div>

                            <div class="col-lg-6 my-3">
                                <h1 class="display-4 font-weight-bold">
                                    Kontak Kami
                                </h1>
                                <p class="my-4">
                                    Apabila ada keperluan, Anda dapat menghubungi kami melalui:
                                </p>
                                <p>
                                    <b>Alamat</b> <br>
                                    @if (!empty($contact->alamat))
                                    {{ $contact->alamat }}
                                    @endif
                                    <br><br>

                                    <b>Telp</b> <br>
                                    @if (!empty($contact->telepon))
                                    {{ $contact->telepon }}
                                    @endif
                                    <br><br>

                                    <b>Fax</b> <br>
                                    @if (!empty($contact->fax))
                                    {{ $contact->fax }}
                                    @endif
                                    <br><br>

                                    <b>Email</b> <br>
                                    @if (!empty($contact->email))
                                    {{ $contact->email }}
                                    @endif
                                    <br><br>
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

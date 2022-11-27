@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid" style="background-image: url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw 100%;">
    <div class="row d-flex align-items-center justify-content-center vh-100">
        <div class="col-md-12">
            <div class="container h-50 bg-white p-5 shadow">
                <div class="row">
                    <div class="col-md-6 p-3 border-right border-dark d-flex align-items-center">
                        <div>
                            <h1 style="font-size: 2rem;">
                                Selamat Datang di Website Pengawas Pertandingan Pengprov Perbasi Jawa Tengah
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-6 p-3 border-left border-dark d-flex align-items-center justify-content-center">
                        <div>
                            <img src="{{ asset('images/logo_01-dark.png') }}" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$pengumuman->content}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@if($pengumuman->is_active == 1)
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#exampleModalCenter").modal('show');
        }
    </script>
@endif
@endsection
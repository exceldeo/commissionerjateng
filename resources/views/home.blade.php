@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #BD1B2A">
        <div class="col-lg-12 p-2">
            <marquee behavior="" direction="">
                <span class="h4 text-white">
                    Selamat Datang di Website Pengawas Pertandingan Pengprov Perbasi Jawa Tengah
                </span>
            </marquee>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-image: url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw 100%;">
    <div class="row vh-100"></div>
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

<script>
    function contentStyle(x) {
        if (x.matches) {
            document.getElementById("left-text").classList.remove("border-right");
            document.getElementById("right-text").classList.remove("border-left");
            document.getElementById("left-text").classList.add("border-bottom");
            document.getElementById("right-text").classList.add("border-top");

            document.getElementById("text").classList.add("text-center");
        } else {
            document.getElementById("left-text").classList.remove("border-bottom");
            document.getElementById("right-text").classList.remove("border-top");
            document.getElementById("left-text").classList.add("border-right");
            document.getElementById("right-text").classList.add("border-left");

            document.getElementById("text").classList.remove("text-center");
        }
    }

    var x = window.matchMedia("(max-width: 765px)")
    contentStyle(x)
    x.addListener(contentStyle)
</script>
@endsection

@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="container py-5">
    <div class="panel panel-headline py-5 px-3 rounded bg-white">
        <div class="panel-heading">
            <div class="row">
                <div class="col-1" style="margin-bottom:10px">
                    <a href="{{route('admin.pengawas.show', ['id' => $idPengawas])}}" id="arrow-back">
                        <button type="button" class="btn btn-sm btn-circle btn-secondary">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                    </a>
                </div>
                <div class="col-11">
                    <h3 class="panel-title">Edit Kegiatan Pengawas</h3>
                </div>
            </div>
        </div>
        <div class="panel-body py-3">
            <form action="{{route('admin.pengawas.kegiatan.update',['idPengawas' => $idPengawas, 'id' => $kegiatan->id])}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input value="{{$kegiatan->nama_kegiatan}}" required type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="link_kegiatan">Link Laporan</label>
                    <input value="{{$kegiatan->link_kegiatan}}" type="text" class="form-control" id="link_kegiatan" name="link_kegiatan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_masuk_laporan">Tanggal Masuk Laporan</label>
                    <input
                    {{ $kegiatan->tanggal_masuk_lapor ? '' : 'disabled' }}}
                    @if($kegiatan->tanggal_masuk_laporan)
                        value="{{$kegiatan->tanggal_masuk_laporan}}"
                    @else     
                        disabled
                    @endif
                    type="date" class="form-control" id="tanggal_masuk_laporan" name="tanggal_masuk_laporan" autocomplete="off">
                    <input type="checkbox" id="masuk_laporan" name="masuk_laporan" 
                    @if(!$kegiatan->tanggal_masuk_laporan)
                        checked
                        value="1"
                    @else 
                        unchecked
                        value="0"
                    @endif
                    onclick="diabledTanggalMasukLaporan()">
                    <label for="masuk_laporan">Check untuk tidak memakai tanggal masuk laporan</label>  
                </div>
                <div class="form-group">
                    <label for="tingkat_daerah">Tingkat Daerah</label>
                    <input value="{{$kegiatan->tingkat_daerah}}" required type="text" class="form-control" id="tingkat_daerah" name="tingkat_daerah" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input value="{{$kegiatan->tanggal_mulai}}" required type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input value="{{$kegiatan->tanggal_selesai}}" required type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="link_keterangan">Link Surat Keterangan</label>
                    <input value="{{$kegiatan->link_keterangan}}" required type="text" class="form-control" id="link_keterangan" name="link_keterangan" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        function diabledTanggalMasukLaporan(){
            if($("#tanggal_masuk_laporan").prop('disabled')){
                $('#tanggal_masuk_laporan').prop('disabled', false);
                $("#masuk_laporan").val() = 1;
            }else{
                $('#tanggal_masuk_laporan').prop('disabled', true);
                $("#masuk_laporan").val() = 0;
            }
        }
    </script>
@endsection


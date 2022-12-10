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
                    <a href="{{route('admin.pengawas.index')}}" id="arrow-back">
                        <button type="button" class="btn btn-sm btn-circle btn-secondary">
                            <i class="fa fa-arrow-left"></i>
                        </button>
                    </a>
                </div>
                <div class="col-11">
                    <h3 class="panel-title">Tambah Kegiatan Pengawas</h3>
                </div>
            </div>
        </div>
        <div class="panel-body py-3">
            <form action="{{route('admin.pengawas.kegiatan.store',['idPengawas' => $idPengawas])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input required type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="link_kegiatan">Link Laporan</label>
                    <input type="text" class="form-control" id="link_kegiatan" name="link_kegiatan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_masuk_laporan">Tanggal Masuk Laporan</label>
                    <input type="date" class="form-control" id="tanggal_masuk_laporan" name="tanggal_masuk_laporan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tingkat_daerah">Tingkat Daerah</label>
                    <input required type="text" class="form-control" id="tingkat_daerah" name="tingkat_daerah" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input required type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input required type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="link_keterangan">Link Surat Keterangan</label>
                    <input required type="text" class="form-control" id="link_keterangan" name="link_keterangan" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

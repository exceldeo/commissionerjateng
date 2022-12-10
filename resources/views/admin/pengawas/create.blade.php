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
                    <h3 class="panel-title">Tambah Pengawas</h3>
                </div>
            </div>
        </div>
        <div class="panel-body py-3">
            <form action="{{route('admin.pengawas.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="image">Foto</label>
                    <input type="file" class="form-control-file" id="image" name="img" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input required type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="no_lisensi">Nomor Lisensi</label>
                    <input required type="text" class="form-control" id="no_lisensi" name="no_lisensi" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="link_lisensi">Link Lisensi</label>
                    <input required type="text" class="form-control" id="link_lisensi" name="link_lisensi" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telepon</label>
                    <input required type="text" class="form-control" id="no_telp" name="no_telp" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pengkab_pengkot">Pengkab/Pengkot</label>
                    <input required type="text" class="form-control" id="pengkab_pengkot" name="pengkab_pengkot" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lisensi_pengawas">Lisensi Pengawas</label>
                    <input required type="text" class="form-control" id="lisensi_pengawas" name="lisensi_pengawas" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="masa_berlaku_lisensi">Masa Berlaku Lisensi</label>
                    <input required type="date" class="form-control" id="masa_berlaku_lisensi" name="masa_berlaku_lisensi" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.1.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="my-3">
                        <a href="{{route('admin.pengawas.index')}}" id="arrow-back">
                            <button type="button" class="btn btn-sm btn-circle btn-secondary">
                                <i class="fa fa-arrow-left"></i>
                            </button>
                        </a>
                    </div>

                    <div class="my-3 ">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{$pengawas->nama}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>TTL</label>
                            <input type="text" class="form-control" value="{{$pengawas->tempat_lahir}}, {{date('d-m-Y', strtotime($pengawas->tanggal_lahir))}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>No Lisensi (<a href="{{$pengawas->link_lisensi}}" target="_blank">link</a>)</label>
                            <input type="text" class="form-control" value="{{$pengawas->nomor_lisensi}}" disabled>
                            
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" value="{{$pengawas->no_telp}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Pengkab/Pengkot</label>
                            <input type="text" class="form-control" value="{{$pengawas->pengkab_pengkot}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Lisensi Pengawas</label>
                            <input type="text" class="form-control" value="{{$pengawas->lisensi_pengawas}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Masa Berlaku Lisensi</label>
                            <input type="text" class="form-control" value="{{date('d-M-Y', strtotime($pengawas->masa_berlaku_lisensi))}}" disabled>
                        </div>
                    </div>

                    <div class="my-5">
                        <div class="my-2">
                            <a href="{{route('admin.pengawas.kegiatan.create', ['idPengawas' => $pengawas->id])}}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Kegiatan</a>
                        </div>
                        <table id="example" class="table table-striped nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Nas/Daerah/Kab</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatans as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td><a href="{{$item->link_kegiatan}}" target="_blank">{{$item->nama_kegiatan}}</a></td>
                                        <td>{{$item->tingkat_daerah}}</td>
                                        <td>{{date('d-m-Y', strtotime($item->tanggal_mulai))}}</td>
                                        <td>{{date('d-m-Y', strtotime($item->tanggal_selesai))}}</td>
                                        <td><a href="{{$item->link_keterangan}}" target="_blank">Surat Tugas</a></td>
                                        <td>
                                            <a href="{{route('admin.pengawas.kegiatan.destroy', ['id' => $item->id])}}"
                                                onclick="return confirm('Apakah anda yakin?')">
                                                <button class="btn btn-sm btn-danger pull-right mr-3"><i
                                                        class="fa fa-trash mr-1"></i> Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Plfrtip'
            });
        });
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchpanes/2.1.0/js/dataTables.searchPanes.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>

@endsection
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
                        <a href="{{route('admin.pengawas.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                    </div>
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>No Lisensi</th>
                                <th>No Telepon</th>
                                <th>Pengkab/Pengkot</th>
                                <th>Lisensi Pengawas</th>
                                <th>Masa Berlaku Lisensi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengawas as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->tempat_lahir}},{{$item->tanggal_lahir}}</td>
                                    <td>{{$item->nomor_lisensi}}</td>
                                    <td>{{$item->no_telp}}</td>
                                    <td>{{$item->pengkab_pengkot}}</td>
                                    <td>{{$item->lisensi_pengawas}}</td>
                                    <td>{{$item->masa_berlaku_lisensi}}</td>
                                    <td>
                                        <a href="{{route('admin.pengawas.destroy', ['id' => $item->id])}}"
                                            onclick="return confirm('Apakah anda yakin?')">
                                            <button class="btn btn-sm btn-danger pull-right mr-3"><i
                                                    class="fa fa-trash mr-1"></i> Hapus</button>
                                        </a>
                                        <a href="{{route('admin.pengawas.edit', ['id' => $item->id])}}">
                                            <button class="btn btn-sm btn-warning pull-right mr-3"><i
                                            class="fa fa-pencil mr-1"></i> Edit</button>
                                        </a>
                                        <a href="{{route('admin.pengawas.show', ['id' => $item->id])}}">
                                            <button class="btn btn-sm btn-primary pull-right mr-3"><i
                                                    class="fa fa-eye mr-1"></i> Lihat</button>
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
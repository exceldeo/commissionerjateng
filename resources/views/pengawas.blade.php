@extends('layouts.app')

@section('title', 'Pengawas')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="display-3 font-weight-bold mb-5">
                                    Data Pengawas
                                </h1>
                            </div>
                        </div>

                        <div class="row my-5">
                            @foreach ($pengawas as $item)
                                <div class="col-md-4 my-3">
                                    <a role="button" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}">
                                        <div class="card">
                                            <img style="width: 100%; height: 15vw; object-fit: cover;" src="{{asset('storage/'.$item->foto)}}" alt="Card image cap" height="300px">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$item->nama}}</h5>
                                                <p class="card-text">
                                                    Nomor Lisensi : <a href="{{$item->link_lisensi}}" target="_blank">{{$item->nomor_lisensi}}</a>
                                                    <br>
                                                    Pengkab/Pengkot : {{$item->pengkab_pengkot}}
                                                    <br>
                                                    Lisensi : {{$item->lisensi_pengawas}}
                                                    <br>
                                                    Masa Berlaku : {{date('d-M-Y', strtotime($item->masa_berlaku_lisensi))}}
                                                </p>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Data Pengawas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('storage/'.$item->foto)}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5 class="font-weight-bold">{{$item->nama}}</h5>
                                                            <p>
                                                                Nomor Lisensi : <a href="{{$item->link_lisensi}}" target="_blank">{{$item->nomor_lisensi}}</a>
                                                                <br>
                                                                Nomor Telepon : {{$item->no_telp}}
                                                                <br>
                                                                Pengkab/Pengkot : {{$item->pengkab_pengkot}}
                                                                <br>
                                                                Lisensi : {{$item->lisensi_pengawas}}
                                                                <br>
                                                                Masa Berlaku : {{date('d-M-Y', strtotime($item->masa_berlaku_lisensi))}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <h5 class="font-weight-bold">Kegiatan</h5>
                                                            <table id="example" class="table table-striped nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Kegiatan</th>
                                                                        <th>Nas/Daerah/Kab</th>
                                                                        <th>Tanggal Mulai</th>
                                                                        <th>Tanggal Selesai</th>
                                                                        <th>Keterangan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($item->kegiatan as $itemK)
                                                                        <tr>
                                                                            <td>{{$loop->index+1}}</td>
                                                                            <td><a href="{{$itemK->link_kegiatan}}" target="_blank">{{$itemK->nama_kegiatan}}</a></td>
                                                                            <td>{{$itemK->tingkat_daerah}}</td>
                                                                            <td>{{date('d-m-Y', strtotime($itemK->tanggal_mulai))}}</td>
                                                                            <td>{{date('d-m-Y', strtotime($itemK->tanggal_selesai))}}</td>
                                                                            <td><a href="{{$itemK->link_keterangan}}" target="_blank">Surat Tugas</a></td>
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
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

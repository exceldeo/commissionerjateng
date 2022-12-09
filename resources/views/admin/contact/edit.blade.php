@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-headline py-5 px-3 rounded bg-white">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="panel-title">Edit Contact</h3>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body py-3">
                        <form action="{{route('admin.contact.update')}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea value="{{$contact->alamat}}" type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">{{$contact->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telp</label>
                                    <textarea value="{{$contact->telepon}}" type="text" class="form-control" id="telepon" name="telepon" autocomplete="off">{{$contact->telepon}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fax">Fax</label>
                                    <textarea value="{{$contact->fax}}" type="text" class="form-control" id="fax" name="fax" autocomplete="off">{{$contact->fax}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <textarea value="{{$contact->email}}" type="text" class="form-control" id="email" name="email" autocomplete="off">{{$contact->email}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

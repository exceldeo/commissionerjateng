@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="container py-5">
    <div class="panel panel-headline py-5 px-3 rounded bg-white">
        <div class="panel-heading">
            <div class="row">
                <div class="col-12">
                    <h3 class="panel-title">Edit Pengumuman</h3>
                </div>
            </div>
        </div>
        <div class="panel-body py-3">
            <form action="{{route('admin.pengumuman.update')}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                
                <div class="form-group">
                    <label for="content">Isi Pengumuman</label>
                    <textarea value="{{$pengumuman->content}}" type="text" class="form-control" id="content" name="content" autocomplete="off">{{$pengumuman->content}}</textarea>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio1" value="1"
                            @if($pengumuman->is_active == 1)
                                checked
                            @endif  
                        >
                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio2" value="0"
                            @if($pengumuman->is_active == 0)
                                checked
                            @endif
                        >
                        <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:10px">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
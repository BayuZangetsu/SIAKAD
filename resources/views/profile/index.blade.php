@extends('adminlte::page')
@section('title','Profil Pengguna')
@section('content_header')
<h1>Manajemen Profil</h1>
@stop
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <img class="p-1 border img-fluid" src={{asset("image/userImage/$photo")}} alt="" srcset="">
            </div>
            <div class="text-center card-footer">
                <button class="btn btn-success"><i class="fas fa-pen border-left-primary"></i>&nbsp;Ubah Foto</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Kelola Biodata</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{$name}}">
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
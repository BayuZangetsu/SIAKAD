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
                <img src="{{ asset("image/userImage/$photo") }}" class="img-fluid img-responsive">
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success"><i class="fas fa-pen"></i> Ubah Foto</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            {{-- <div class="card-header">Biodata User</div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="{{ $username }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $phone }}">
                        </div>
                        <div class="form-group">
                            <label for="role">Status</label>
                            {{-- <div class="badge badge-default form-control">{{  }}</div> --}}
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $roles['desc'] }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="birthday">Tanggal Lahir</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $birthday }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Lengkap</label>
                        <textarea name="address" id="address" cols="5" rows="3"
                            class="form-control">{{ $address }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success"><i class="fas fa-pen"></i>Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
@extends('adminlte::page')
@section('title','Profil Pengguna')
@section('content_header')
<h1>Manajemen Profil</h1>
@stop

@section('content')
<table class="table table-dark">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Role</th>
            <th>DESC</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $u)
        <tr>
        <td>{{$u->name}}</td>
        <td>{{$u->role}}</td>
        <td>{{$u->roles->desc}}</td>
        </tr>
            
        @endforeach
    </tbody>
</table>

@stop
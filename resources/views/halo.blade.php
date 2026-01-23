@extends('layouts.app')
@section('halo')

@foreach ($namaUser as $P)
<h1>Halo {{ $P->nama_lengkap }}</h1>
<p>selamat datang!</p>
@endforeach
@endsection
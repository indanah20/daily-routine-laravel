@extends('layouts.app')
@section('content')

@if($semuaPost->count() > 0)
<div class="content">
    <div class="respon">
        <table>
            <tr>
                <th>Nomor</th>
                <th>Jam</th>
                <th>Kegiatan</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach($semuaPost as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->konten }}</td>
                <td><strong><a href="/post/hapus/{{ $p->id }}" onclick="return confirm('Yakin Mau Dihapus?')" style="color: #af259dff; text-decoration: none; font-size: 15px;">Hapus</a></strong></td>

                <td><strong><a href="/post/edit/{{ $p->id }}" style="color: #5f1555ff; text-decoration: none; font-size: 15px;">Edit</a></strong></td>
            </tr>
            @endforeach
        </table>
    </div>

</div>
@endif

@endsection
@section('judul')

<h1>My Daily Routine</h1>
@endsection
@section('form')
<form action="/post/simpan" method="POST">
    @csrf
    <label for="judul">Jam</label>
    <input type="text" name="judul" id="judul">
    <br>
    <label for="konten">Kegiatan</label>
    <textarea name="konten" id="konten"></textarea>
    <br>
    <button type="submit">Simpan</button>
</form>
@endsection
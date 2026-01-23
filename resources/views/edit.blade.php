@extends('layouts.app')
@section('judul')

<h1>Edit Kegiatan</h1>
@endsection
@section('form')
<div class="edit">
    <form action="/post/update/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Jam</label>
        <input type="text" name="judul" id="judul" value="{{ $post->judul }}">
        <br>
        <label for="konten">Kegiatan</label>
        <textarea name="konten" id="konten" value="{{ $post->konten }}"></textarea>
        <br>
        <div class="group">
            <button type="submit">Update</button>
            <a class="batal" href="/about">Batal</a>
        </div>
    </form>
</div>
@endsection
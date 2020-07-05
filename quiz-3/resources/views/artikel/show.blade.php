@extends('master')

@section ('content')

<div class = "ml-3 mt-3">
    <h3> Detail Artikel</h3>
    <p> Judul : {{ $artikel->judul}} </p>
    <p> Isi : {{ $artikel->isi}} </p>
    <p> Slug : {{ $artikel->slug}} </p>
    <p> Tag : {{ $artikel->tag}} </p>
    <a href = "/artikel" class="btn btn-primary">Kembali</a>
</div>

@endsection



@extends('master')


@section('content')
<div class= "ml-3 mt-3">
<form action="/artikel/{{$artikel->id}}"  method = "POST">
@csrf
@method('PUT')

<div class="form-group">
  <label for="judul">Judul :</label>
  <input type="text" class="form-control" id="judul" value="{{$artikel->judul}}" placeholder="Masukan Judul" name="judul" >
</div>

<div class="form-group">
  <label for="isi">Isi :</label>
  <input type="text" class="form-control" id="isi" value="{{$artikel->isi}}" placeholder="Masukan Isi" name="isi" >
</div>

<div class="form-group">
  <label for="slug">Slug :</label>
  <input type="text" class="form-control" id="slug" value="{{$artikel->slug}}"  name="slug">
</div>

<div class="form-group">
  <label for="tag">Tag :</label>
  <input type="text" class="form-control" id="tag"  value="{{$artikel->tag}}"  name="tag" >
</div>


 
<button type="submit" class="btn btn-primary">Update</button>
<a href = "/artikel" class="btn btn-primary">Kembali</a>
</form>

</div>



@endsection
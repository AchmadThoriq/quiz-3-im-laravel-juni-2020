@extends('master')

@section('content')

<div class ="ml-3 mt-3">
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Slug</th>
        <th>Tag</th>
      </tr>
    </thead>
<tbody>
@foreach($artikel as $key => $artikel)
      <tr>
          <td> {{$key + 1}}</td>
          <td> {{$artikel->judul}}</td>
          <td> {{$artikel->isi}}</td>
          <td> {{$artikel->slug}}</td>
          <td> {{$artikel->tag}}</td>
          <td> 
          <a href = "/artikel/{{$artikel->id}}" class= "btn btn-sm btn-primary">show</a>
          <a href = "/artikel/{{$artikel->id}}/edit" class= "btn btn-sm btn-info">edit</a>
          <form action ="/artikel/{{$artikel->id}}" method = "post" style="display: inline">
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
          </form>
         </td>
      </tr>

@endforeach
</tbody> </table>
<a href = "/artikel/create" class = "btn btn-primary mb-2"> Buat Artikel </a>
</div>

@endsection

@push('scripts')
<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush

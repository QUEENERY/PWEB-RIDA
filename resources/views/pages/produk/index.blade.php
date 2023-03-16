@extends('pages.main')

@section('content')

<h3 class="mb-5">░ℍ𝕒𝕝𝕒𝕞𝕒𝕟 𝕂𝕖𝕝𝕠𝕝𝕒 𝔻𝕒𝕥𝕒 ℙ𝕣𝕠𝕕𝕦𝕜░</h3>

<a href="/products/create" class="btn btn-md btn-primary mb-3">ᴛᴀᴍʙᴀʜ ᴘʀᴏᴅᴜᴋ</a>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id Produk</th>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $show)
        <tr>
          <td>{{ $show->id }}</td>
          <td>{{ $show->judulproduk }}</td>
          <td>{{ $show->deskripsi }}</td>
          <td>Rp. {{ number_format($show->harga, '0', '.', '.') }}</td>
          <td><img src="{{ Storage::url($show->gambar) }}" alt="{{ $show->judulproduk }}" width="100" class="img-thumbnail"></td>
          <td>
            <a href="/products/{{ $show->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
            <form action="/products/{{ $show->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
@extends('layout.home')

@section('title', 'Daftar Semua Produk')

@section('content')

<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">Gambar</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

    @foreach($produk as $prod)
<table class="table table-striped">
  <tbody>
    <tr>
      <td><img src="{{ asset('image/' . $prod->gambar) }}" width="200" height="200"></img></td>
      <td>{{ $prod['nama_pro'] }}</td>
      <td>{{ $prod['kategori'] }}</td>
      <td>{{ $prod['deskripsi'] }}</td>
      <td>{{ $prod['jumlah'] }} buku </td>
      <td><a href="/tokobuku/{{ $prod['id_produk'] }}show" class="card-link btn-primary">Beli Buku</a></td>
    </tr>
  </tbody>
</table>

@endforeach
    {{ $produk->links() }}
@endsection
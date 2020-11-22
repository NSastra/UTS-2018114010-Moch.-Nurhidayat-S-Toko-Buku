@extends('layout.home')

@section('title', 'Daftar Kategori Produk')

@section('content')

<a href="/tokobuku/allprod/" class="card-link btn-primary">Lihat Semua Produk </a>
<hr>

@foreach($kategoris as $kategoris)
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <p> <img src="{{ asset('image/' . $kategoris->gambar) }}" width="200" height="200"> </p>
    <p>{{ $kategoris['nama_ktg'] }}</p>
    <p>{{ $kategoris['keterangan'] }}</p>

    <hr>

    @foreach($kategoris->produks as $produk)
      <li> {{$produk->nama_pro}} </li>
      @endforeach
    
    <?php //btn pada class di atas berfungsi untuk memberi warna sesuai kebutuhan, primary-warning-danger ?>
    <form action="/tokobuku/{{ $kategoris['id'] }}" method="post">
    
    </form>
    
  </div>
</div>

@endforeach
@endsection
    
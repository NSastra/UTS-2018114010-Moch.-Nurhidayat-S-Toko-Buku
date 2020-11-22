@extends('layout.home')

@section('title', 'Keranjang Belanja')

@section('content')

@foreach($chart as $chart)
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <p> <img src="{{ asset('image/chart.png') }}"> </p>
    <p>Nama Pembeli : {{ $chart['pembeli'] }}</p>
    <p>Buku Yang Dibeli :</p>

    <hr>
    @foreach($chart->pembelian as $beli)
      <li> {{$beli->produk}} </li>
      @endforeach

    <form action="/transaksi/{{ $chart['id'] }}" method="post">
    
    </form>
    
  </div>
</div>

@endforeach
@endsection
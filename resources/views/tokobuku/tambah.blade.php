@extends('layout.home')

@section('title', 'Tambah Produk')

@section('content')
  <form action="/tokobuku" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Gambar</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="gambar" aria-describedby="emailHelp" placeholder="Masukkan Nama Produk" value="{{ old('gambar') }}">
  </div>
  @error('gambar')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pro" aria-describedby="emailHelp" placeholder="Masukkan Nama Produk" value="{{ old('nama_pro') }}">
  </div>
  @error('nama_pro')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror
  <div class="form-group">
    <label for="exampleInputPassword1">Kategori</label>
    <input type="text" class="form-control" name="kategori" id="exampleInputPassword1" placeholder="Masukkan Kategori" value="{{ old('kategori') }}">
  </div>
  @error('kategori')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror
  <div class="form-group">
    <label for="exampleInputPassword1">Kategori ID</label>
    <input type="text" class="form-control" name="kategori_id" id="exampleInputPassword1" placeholder="Masukkan Kategori ID" value="{{ old('kategori_id') }}">
  </div>
  @error('kategori_id')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah</label>
    <input type="text" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Masukkan jumlah" value="{{ old('jumlah') }}">
  </div>
  @error('jumlah')
    <div class="alert alert-danger"> {{ $message }}
    </div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    @endsection
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
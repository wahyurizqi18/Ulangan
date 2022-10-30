@extends('admin.master')
@section('barang')
<div class="container-fluid">
<div class="container">
<div class="card mb-3">
  <center>
  <img src="{{ asset('img/'.$detail->gambar) }}" style="width: 240px;" class="card-img-top" alt="...">
  </center>
  
  <div class="card-body">
    <h5 class="card-title"> Nama Barang : {{ $detail->nama_barang }}</h5>
    <p class="card-text">Nama Perusahaan : {{ $detail->nama_perusahaan }}</p>
    <p class="card-text">Netto : {{ $detail->netto }}</p>
    <p class="card-text">Stok : {{ $detail->stok }}</p>
    <p class="card-text">Deskripsi : {{ $detail->deskripsi }}</p>
    <p class="card-text"><small class="text-muted">{{ $detail->waktu_penambahan }}</small></p>
    <a href="{{route('barang.view')}}" class="btn btn-danger">back</a>
  </div>
</div>
</div>

</div>

@endsection
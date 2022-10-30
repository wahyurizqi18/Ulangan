@extends('admin.master')
@section('barang')


<div class="container-fluid">
<div class="container">
  <h1>Daftar Barang</h1>
  @foreach($barang as $brg=>$barangs)
<div class="card">
  <div class="card-header">
    Barang
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $barangs->nama_barang }}</h5>
    <p class="card-text">Rp {{ $barangs->harga }} </p>
    <a href="{{route('detail.view', $barangs->id)}}" class="btn btn-primary">Lihat Detail</a>
  </div>
</div>
@endforeach
</div>
</div>


@endsection
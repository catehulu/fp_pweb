@extends('layouts.app')

@section('content')
    @foreach ($transaksi as $transaksi)
    <h3>ID Transaksi : {{$transaksi->id_transaksi}}</h3>
    <br>
    <h3>ID Tayang : {{$transaksi->id_tayang}}</h3>
    <br>
    <h3>ID Pelanggan : {{$transaksi->id_pelanggan}}</h3>
    <br>
    <h3>Jumlah Tiket : {{$transaksi->jumlah_tiket}}</h3>
    <br>
    <h3>Tanggal Transaksi : {{$transaksi->tgl_transaksi}}</h3>
    <br>
    <h3>Studio : {{$transaksi->studio}}</h3>
    <br>
    <h3>Total harga : Rp {{$totalharga}}</h3>
    @endforeach
@endsection
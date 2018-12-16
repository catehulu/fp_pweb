@extends('layouts.app')

@section('content')
<div style="border-style:outset;margin:25px 50px;" class="back">
    <div style="text-align:center;border-bottom:solid gray;margin:25px;">
        <h1 class="mt-3"><b>Data Transaksi</b></h1>
    </div>

    <table class="table" style="margin: 10px 0px 10px 50px; width:93%;">

        <thead class="kepalatabel">
            <tr style="text-align:center;">
            <th scope="col">ID_Transaksi</th>
            <th scope="col">ID_tayang</th>
            <th scope="col">ID_Pelanggan</th>
            <th scope="col">jumlah tiket</th>
            <th scope="col">tanggal transaksi</th>
            <th scope="col">studio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $transaksi)
            <tr style="text-align:center;">
                <td>{{$transaksi->id_transaksi}}</td>
                <td>{{$transaksi->id_tayang}}</td>
                <td>{{$transaksi->id_pelanggan}}</td>
                <td>{{$transaksi->jumlah_tiket}}</td>
                <td>{{$transaksi->tgl_transaksi}}</td>
                <td>{{$transaksi->studio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
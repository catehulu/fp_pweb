@extends('layouts.app')

@section('content')
<div style="border-style:outset;" class="back container">
    <div style="text-align:center;border-bottom:solid gray;margin:25px;">
        <h1 class="mt-3"><b>Data Transaksi</b></h1>
    </div>

    <table class="table container" style="width:93%;">

        <thead class="kepalatabel">
            <tr style="text-align:center;">
            <th scope="col">ID_Tayang</th>
            <th scope="col">ID_Film</th>
            <th scope="col">waktu mulai</th>
            <th scope="col">waktu selesai</th>
            <th scope="col">harga tiket</th>
            <th scope="col">studio</th>
            <th scope="col">jumlah kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $transaksi)
            <tr style="text-align:center;">
                <td>1</td>
                <td>3</td>
                <td>jam 1</td>
                <td>jam 2</td>
                <td>mahal</td>
                <td>tengah</td>
                <td>banyak</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
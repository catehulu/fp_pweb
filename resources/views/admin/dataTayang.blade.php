@extends('layouts.app')

@section('content')
<div style="border-style:outset;" class="back container">
    <div style="text-align:center;border-bottom:solid gray;margin:25px;">
        <h1 class="mt-3"><b>Data Tayang</b></h1>
    </div>

    <table class="table container" style="width:93%;">

        <thead class="kepalatabel">
            <tr style="text-align:center;">
            <th scope="col">ID Tayang</th>
            <th scope="col">ID Film</th>
            <th scope="col">Waktu Mulai</th>
            <th scope="col">Waktu Selesai</th>
            <th scope="col">Harga Tiket</th>
            <th scope="col">Studio</th>
            <th scope="col">Jumlah Kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tayang as $tayang)
            <tr style="text-align:center;">
                <td>{{$tayang->id_tayang}}</td>
                <td>{{$tayang->id_film}}</td>
                <td>{{$tayang->waktu_mulai}}</td>
                <td>{{$tayang->waktu_selesai}}</td>
                <td>{{$tayang->harga_tiket}}</td>
                <td>{{$tayang->studio}}</td>
                <td>{{$tayang->jumlah_kursi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
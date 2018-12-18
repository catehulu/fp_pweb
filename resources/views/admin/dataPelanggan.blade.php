@extends('layouts.app')

@section('content')
<div style="border-style:outset;" class="back container">
    <div style="text-align:center;border-bottom:solid gray;margin:25px;">
        <h1 class="mt-3"><b>Data Pelanggan</b></h1>
    </div>

    <table class="table container" style="width:93%;">

        <thead class="kepalatabel">
            <tr style="text-align:center;">
            <th scope="col">ID_Pelanggan</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">email</th>
            <th scope="col">no_telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $pelanggan)
            <tr style="text-align:center;">
                <td>{{$pelanggan->id_pelanggan}}</td>
                <td>{{$pelanggan->nama_pelanggan}}</td>
                <td>{{$pelanggan->email}}</td>
                <td>{{$pelanggan->no_telp}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
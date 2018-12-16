@extends('layouts.app')

@section('content')
<div style="border-style:outset;" class="back container">
    <div style="text-align:center;border-bottom:solid gray;margin:25px;">
        <h1 class="mt-3"><b>Data Transaksi</b></h1>
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
            @foreach ($transaksi as $transaksi)
            <tr style="text-align:center;">
                <td>1</td>
                <td>3</td>
                <td>jam 1</td>
                <td>jam 2</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
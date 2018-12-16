@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Data Transaksi</b></h1>
        </div>

        <table class="table" style="margin: 10px 0px 10px 50px; width:93%;">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">ID_Transaksi</th>
                <th scope="col">ID_tayang</th>
                <th scope="col">ID_Pelanggan</th>
                <th scope="col">jumlah tiket</th>
                <th scope="col">tanggal transaksi</th>
                <th scope="col">studio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Tran1</td>
                <td>Tay1</td>
                <td>Pel1</td>
                <td>3</td>
                <td>35 desember 1732</td>
                <td>30</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Tran2</td>
                <td>Tay2</td>
                <td>Pel2</td>
                <td>2</td>
                <td>31 februari 2032</td>
                <td>30</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
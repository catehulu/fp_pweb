@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Detil Penayangan</b></h1>
        </div>

        <div class="row">
            <div class="column columndetilPenayangan" style="border-style: groove;">
                <h4 style="border-bottom:solid;border-color:white">Nama Film &nbsp;&nbsp;&nbsp; :</h4>
                <h4 style="border-bottom:solid;border-color:white">Jam Mulai &nbsp;&nbsp;&nbsp;&nbsp; :</h4>
                <h4 style="border-bottom:solid;border-color:white">Jam Selesai &nbsp;&nbsp; :</h4>
                <h4 style="border-bottom:solid;border-color:white">Studio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</h4>
            </div>
        </div>
    </div>
@endsection
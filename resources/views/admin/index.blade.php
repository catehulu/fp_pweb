@extends('layouts.app')

@section('content')
    <div style="border-style:outset" class="back container" align="center">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Sedang Tayang</b></h1>
        </div>
        <div class="card-columns">
        @foreach ($film as $films)
            <div class="card shadow-lg" style="width:300px;">
                <img class="card-img-top" src="{{asset('storage/cover_image/'.$films->cover_image.'')}}" alt="gambar film" style="width: 100%; height:300px;">
                <div class="card-body" style="text-align:left">
                    <label for="nama_film">Nama Film</label>
                    <h3 name="nama_film">{{$films->nama_film}}</h3>
                    <label for="durasi">Durasi</label>
                    <h3 name="durasi">{{$films->durasi}} menit</h3>
                    <a href="{{route('admin.readone',$films->id_film)}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
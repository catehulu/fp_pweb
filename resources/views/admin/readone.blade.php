@extends('layouts.app')

@section('content')
    <div style="border-style:outset" class="back container">
        <!-- tampilan judul Film -->
        <div id="readfilmjud">
            <h1 class="mt-3"><b>{{$films->nama_film}}</b></h1>
        </div>

        <!-- foto dan sinopsis-->
        <div class="row">
            <div class="column columnfoto" style="border-style: groove;">
                <img src="{{asset('storage/cover_image/'.$films->cover_image)}}" alt="" style="width:100%;height:100%">
            </div>
            <div class="column columnsinopsis" style="border-style: groove;">
                <h2>Sinopsis :</h2>
                <p> {{$films->deskripsi_film}}</p>
            </div>
        </div>
        <div class="row">
            <div class="column columnumuradmin" style="border-style: groove;">
                @if ($films->age_rating == 1)
                    <h2>Semua Umur</h2>
                @elseif ($films->age_rating == 2)
                    <h2>13+</h2>
                @elseif ($films->age_rating == 3)
                    <h2>17+</h2>
                @elseif ($films->age_rating == 4)
                    <h2>21+</h2>
                @endif
            </div>
            <div class="column columngenre" style="border-style: groove;">
                <h2 id="genre">Genre : {{$films->genre}}</h2>
            </div>
        </div>

        <div class="row">
            <div class="column columnjam" style="border-style: groove;">
                @if ($tayang->count() > 0)
                <span><h2 style="margin: 10px 0px 0px 10px; font-family: fantasy;">Jadwal Penayangan :</h2></span>
                @foreach ($tayang as $tayangs)
                    <a class="btn btn-secondary" style="margin: 10px 10px 10px 10px; font-family:'Times New Roman', Times, serif">
                        {{$tayangs->waktu_mulai}}
                    </a>
                @endforeach
                @else
                    <span><h2 style="margin: 10px 0px 0px 10px; font-family: fantasy;">Penayangan untuk film ini tidak ada</h2></span>
                @endif
                <div class="d-flex justify-content-end">
                    <a href="{{route('admin.cPenayangan',$films->id_film)}}" class="btn btn-secondary rounded-circle" style="margin-right: 3vh;margin-bottom: 3vh;">
                        +
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column columndurasi" style="border-style: groove;">
                <h2>Durasi : {{$films->durasi}} menit</h2>
            </div>
        </div>

        <div class="row">
            <div class="column columndata" style="border-style: groove;">
                <div><h2>Produces : {{$films->produser}}</h2></div>
                <div><h2>Direktor : {{$films->director}}</h2></div>
            </div>
        </div>

        <div>
            <span><a href="{{route('admin.index')}}" id="tombolkembali" class="btn btn-outline-secondary">Kembali</a></span>
            <span><a href="{{route('admin.edit',$films->id_film)}}" id="tombolkembali" class="btn btn-outline-secondary">Edit</a></span>
            <span><button type="submit" id="tomboldelete" class="btn btn-outline-secondary" form="delete">Delete</button></span>
            <form id="delete" action="{{route('admin.delete')}}" method="post" hidden>
                    @csrf
                    <input name="id_film" type="text" value="{{$films->id_film}}" hidden>
            </form>
        </div>
        
    </div>
@endsection
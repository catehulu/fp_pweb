@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;" class="back">
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
                <h2>sinopsis :</h2>
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
                <h2 id="genre">genre : {{$films->genre}}</h2>
            </div>
        </div>

        <div class="row">
            <div class="column columnjam" style="border-style: groove;">
                <span><h2 style="margin: 10px 0px 0px 10px; font-family: fantasy;">jam penayangan :</h2></span>
                @if ($tayang != NULL)
                    @foreach ($tayang as $tayangs)
                        <a href="">
                            <button type="button" class="btn btn-secondary" style="margin: 10px 10px 10px 10px">
                                {{$tayangs->waktu_mulai}}
                            </button>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="row">
            <div class="column columndurasi" style="border-style: groove;">
                <h2>durasi : {{$films->durasi}} menit</h2>
            </div>
        </div>

        <div class="row">
            <div class="column columndata" style="border-style: groove;">
                <div><h2>produser : {{$films->produser}}</h2></div>
                <div><h2>director : {{$films->director}}</h2></div>
            </div>
        </div>

        <div>
            <span><a href="{{route('admin.index')}}" id="tombolkembali" class="btn btn-outline-secondary">Kembali</a></span>
            <span><button type="button" id="tomboledit" class="btn btn-outline-secondary">edit</button></span>
            <span><button form="delete" type="submit" id="tomboldelete" class="btn btn-outline-secondary">Delete</button></span>
            <form id='delete'action="{{route('admin.delete')}}" action="post" hidden>
                    @csrf
                    <input name="id_film" type="text" value="{{$films->id_film}}" hidden>
            </form>
        </div>
        
    </div>
@endsection
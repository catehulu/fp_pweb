@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;" class="back">
        <!-- tampilan judul Film -->
        <div id="readfilmjud">
            <h1 class="mt-3"><b>{{$films->nama_film}}</b></h1>
        </div>

        <!-- foto-->
        <div class="row">
            <div class="column columnfoto" style="border-style: groove;">
                <img src="{{asset('storage/cover_image/'.$films->cover_image)}}" alt="" style="width:100%;height:90%">
                <script>
                    function uploadFile(target) {
                        document.getElementById("file-name").innerHTML = target.files[0].name;
                    }
                </script>
                <div class="custom-file">
                    <input name="cover_image" type="file" class="custom-file-input" id="cover_image" onchange='uploadFile(this)'>
                    <label style="text-align:left;padding:0px 0px 10px 0px;" class="custom-file-label" for="cover_image">
                        <span id="file-name" class="file-box">Pilih File</span>
                    </label>
                </div>
            </div>
            <div class="column columnsinopsis" style="border-style: groove;">
                <label for="director"><b>Sinopsis</b></label>
                <textarea name="director" rows="11" type="text-area" class="form-control" id="director" placeholder="Director Film"></textarea>
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
                    <form class="form-inline">
                        <label for="genre" class="mr-sm-2">Genre : </label>
                        <input type="text" class="form-control" id="genre" placeholder="genre">
                    </form>
            </div>
        </div>

        <div class="row">
            <div class="column columnjam" style="border-style: groove;">
                <h2>jam penayangan</h2>
                @if ($tayang != NULL)
                    @foreach ($tayang as $tayangs)
                        <a href="" class="btn btn-primary">{{$tayangs->waktu_mulai}}</a>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="row">
            <div class="column columndurasi" style="border-style: groove;">
                <label for="durasi"><b>Durasi dalam menit</b></label>
                <input name="durasi" class="form-control" type="number" value="0" id="Durasi">
            </div>
        </div>

        <div class="row">
            <div class="column columndata" style="border-style: groove;">
                    <label for="produser"><b>Produser</b></label>
                    <input name="produser" type="text" class="form-control" id="produser" placeholder="Produser Film">
                    <label for="director"><b>Director Film</b></label>
                    <input name="director" type="text" class="form-control" id="director" placeholder="Director Film">
            </div>
        </div>

        <div>
            <span><a href="{{route('admin.index')}}" id="tombolkembali" class="btn btn-outline-secondary">Kembali</a></span>
            <span><button type="button" id="tomboledit" class="btn btn-outline-secondary">edit</button></span>
            <form action="{{route('admin.delete')}}" action="post">
                    @csrf
                    <input name="id_film" type="text" value="{{$films->id_film}}" hidden>
                    <span><button type="submit" id="tomboldelete" class="btn btn-outline-secondary">Delete</button></span>
            </form>
        </div>
        
    </div>
@endsection
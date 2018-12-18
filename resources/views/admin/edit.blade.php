@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;" class="back">
        <form action="{{route('admin.update',$films->id_film)}}" method="post" id="update" enctype="multipart/form-data">
            @csrf
            <!-- tampilan judul Film -->
            <div id="readfilmjud" class="mt-3 column" >
                <input name="nama_film" type="text" value="{{$films->nama_film}}" class="form-control" style="text-align:center;">
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
                    <label for="deskripsi_film"><b>Sinopsis</b></label>
                    <textarea name="deskripsi_film" rows="11" type="text-area" class="form-control" id="deskripsi_film" placeholder="Sinopsis FIlm">{{$films->deskripsi_film}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="column columnumuradmin" style="border-style: groove;">
                    <select name="age_rating" id="age_rating" value="{{$films->age_rating}}">
                        <option value="1">Semua Umur</option>
                        <option value="2">13+</option>
                        <option value="3">17+</option>
                        <option value="4">21+</option>
                    </select>
                </div>
                <div class="column columngenre" style="border-style: groove;">
                        <form class="form-inline">
                            <label for="genre" class="mr-sm-2">Genre : </label>
                            <input name="genre" type="text" class="form-control" id="genre" placeholder="genre" value="{{$films->genre}}">
                        </form>
                </div>
            </div>
    
            <div class="row">
                <div class="column columndurasi" style="border-style: groove;">
                    <label for="durasi"><b>Durasi dalam menit</b></label>
                    <input name="durasi" class="form-control" type="number" value="{{$films->durasi}}" id="Durasi">
                </div>
            </div>
    
            <div class="row">
                <div class="column columndata" style="border-style: groove;">
                        <label for="produser"><b>Produser</b></label>
                        <input name="produser" type="text" class="form-control" id="produser" value="{{$films->produser}}" placeholder="Produser Film">
                        <label for="director"><b>Director Film</b></label>
                        <input name="director" type="text" class="form-control" id="director" value="{{$films->director}}" placeholder="Director Film">
                </div>
            </div>
        </form>

        <div>
            <span><a href="{{route('admin.index')}}" id="tombolkembali" class="btn btn-outline-secondary">Kembali</a></span>
            <span><button type="submit" id="tomboledit" class="btn btn-outline-secondary" form="update">Update</button></span>
        </div>
        
    </div>
@endsection
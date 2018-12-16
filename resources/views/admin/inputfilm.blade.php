@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;" class="back">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <div class="mt-3"><b>Form</b></div>
        </div>
        <div style="margin:50px">
            <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Judul -->
                <div class="form-group">
                    <label for="nama_film"><b>Judul Film</b></label>
                    <input name="nama_film" type="text" class="form-control" id="nama_film" placeholder="Judul Film">
                </div>

                <!-- Sinopsis -->
                <div class="form-group">
                    <label for="deskripsi_film"><b>Sinopsis</b></label>
                    <textarea name="deskripsi_film" class="form-control" id="deskripsi_film" placeholder="Sinopsis Film" rows="5"></textarea>
                </div>

                <!-- Durasi -->
                <div class="form-group">
                    <label for="durasi"><b>Durasi dalam menit</b></label>
                    <input name="durasi" class="form-control" type="number" value="0" id="Durasi">
                </div>

                <!-- Produser -->
                <div class="form-group">
                    <label for="produser"><b>Produser</b></label>
                    <input name="produser" type="text" class="form-control" id="produser" placeholder="Produser Film">
                </div>

                <!-- Director -->
                <div class="form-group">
                    <label for="director"><b>Director Film</b></label>
                    <input name="director" type="text" class="form-control" id="director" placeholder="Director Film">
                </div>

                <!-- Batasan Umur -->
                <div class="form-group">
                    <label><b>Batasan Umur</b></label>
                    <select id='age_rating' name="age_rating" class="form-control">
                            <option value="1">Semua Umur</option>
                            <option value="2">13+</option>
                            <option value="3">17+</option>
                            <option value="4">21+</option>
                    </select>
                </div>

                <!-- Genre -->
                <div class="form-group">
                    <label for="genre"><b>Genre Film</b></label>
                    <input name="genre" typ-e="text" class="form-control" id="formGenre" placeholder="Genre Film">
                </div>

                <!-- foto -->
                <script>
                    function uploadFile(target) {
                        document.getElementById("file-name").innerHTML = target.files[0].name;
                    }
                </script>
                <label for="cover_image"><b>Input foto Film</b></label>
                <div class="custom-file">
                    <input name="cover_image" type="file" class="custom-file-input" id="cover_image" onchange='uploadFile(this)'>
                    <label class="custom-file-label" for="cover_image">
                        <span id="file-name" class="file-box">Pilih File</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-secondary btn-lg mt-4" id="tombol">Submit</button>
            </form>
        </div>
    </div>
@endsection
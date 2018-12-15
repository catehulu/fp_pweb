@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Form</b></h1>
        </div>
        <div style="margin:50px">
            <form>
                <!-- Judul -->
                <div class="form-group">
                    <label for="formJudul"><b>Judul Film</b></label>
                    <input type="text" class="form-control" id="formJudul" placeholder="Judul Film">
                </div>

                <!-- Sinopsis -->
                <div class="form-group">
                    <label for="formSinopsis"><b>Sinopsis</b></label>
                    <textarea class="form-control" id="fromSinopsis" placeholder="Sinopsis Film" rows="5"></textarea>
                </div>

                <!-- Durasi -->
                <div class="form-group">
                    <label for="durasi"><b>Durasi dalam menit</b></label>
                    <input class="form-control" type="number" value="0" id="Durasi">
                </div>

                <!-- Produser -->
                <div class="form-group">
                    <label for="formProduser"><b>Produser</b></label>
                    <input type="text" class="form-control" id="formProduser" placeholder="Produser Film">
                </div>

                <!-- Director -->
                <div class="form-group">
                    <label for="formDirector"><b>Director Film</b></label>
                    <input type="text" class="form-control" id="formDirector" placeholder="Director Film">
                </div>

                <!-- Penulis -->
                <div class="form-group">
                    <label for="formPenulis"><b>Penulis Film</b></label>
                    <input type="text" class="form-control" id="formPenulis" placeholder="Penulis Film">
                </div>

                <!-- Batasan Umur -->
                <div class="form-group">
                    <label><b>Batasan Umur</b></label>
                    <select class="form-control">
                            <option value="1">Semua Umur</option>
                            <option value="2">13+</option>
                            <option value="3">17+</option>
                            <option value="4">21+</option>
                    </select>
                </div>

                <!-- Genre -->
                <div class="form-group">
                    <label for="formGenre"><b>Genre Film</b></label>
                    <input type="text" class="form-control" id="formGenre" placeholder="Genre Film">
                </div>

                <!-- foto -->
                <label for="formFoto"><b>Input foto Film</b></label>
                <script>
                    function uploadFile(target) {
                        document.getElementById("file-name").innerHTML = target.files[0].name;
                    }
                </script>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fotoFilm" onchange='uploadFile(this)'>
                    <label class="custom-file-label">
                        <span id="file-name" class="file-box"></span>
                    </label>    
                </div>
                <button type="button" class="btn btn-secondary btn-lg mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
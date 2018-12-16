@extends('layouts.app')

@section('content')
    <div style="border-style:outset;margin:25px 50px;">
        <!-- tampilan judul Film -->
        <div id="readfilmjud">
            <h1 class="mt-3"><b>Judul Film</b></h1>
        </div>

        <!-- foto-->
        <div class="row">
            <div class="column columnfoto" style="border-style: groove;">
                <img src="{{asset('storage/postingan.jpg')}}" alt="coba" id="stGambar">
            </div>
            <div class="column columnsinopsis" style="border-style: groove;">
                <h2 style="font-family: fantasy;">sinopsis : </h2>
                <div id="isiSinopsis">
                    sebuah film yang di perankan seorang aktor ganteng bernama rama dan seterusnya. ini sebuah contoh sinopsis yang real
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column columnumuruser" style="border-style: groove;">
                <h2  style="margin:15px 0px 15px 0px;">17+</h2>
            </div>
            <div class="column columnbuy" style="border-style: groove;">
                    <button type="button" class="btn btn-success btn-lg" id="tombol">Buy Ticket</button>  
            </div>
            <div class="column columngenre" style="border-style: groove;">
                <h2 id="genre">genre : </h2>
            </div>
        </div>

        <div class="row">
            <div class="column columnjam" style="border-style: groove;">
                <span><h2 style="margin: 10px 0px 0px 10px; font-family: fantasy;">jam penayangan :</h2></span>
                <button type="button" class="btn btn-secondary" style="margin: 10px 10px 10px 10px">
                    tanggal penayangan jasnajskjdsasjdlj
                </button>
            </div>
        </div>

        <div class="row">
            <div class="column columndurasi" style="border-style: groove; font-family: fantasy;">
                <h2 style="margin: 10px 0px 10px 10px;">durasi : </h2>
            </div>
        </div>

        <div class="row">
            <div class="column columndata" style="border-style: groove;">
                <div><h2 style="margin: 10px 0px 0px 10px; font-family: fantasy;">produser : </h2></div>
                <div><h2 style="margin: 10px 0px 10px 10px; font-family: fantasy;">director : </h2></div>
            </div>
        </div>

        <div>
        <span><button type="button" id="tombolkembali" class="btn btn-outline-secondary">kembali</button></span>
        </div>        
        
    </div>
@endsection
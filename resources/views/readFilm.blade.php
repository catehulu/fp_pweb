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
                <h2>foto</h2>
                <img src="" alt="" style="width:100%;height:100%">
            </div>
            <div class="column columnsinopsis" style="border-style: groove;">
                <h2>sinopsis : </h2>
            </div>
        </div>
        <div class="row">
            <div class="column columnumur" style="border-style: groove;">
                <h2>umr</h2>
            </div>
            <div class="column columnbuy" style="border-style: groove;">
                <h2>button Buy</h2>  
            </div>
            <div class="column columngenre" style="border-style: groove;">
                <h2 id="genre">genre : </h2>
            </div>
        </div>

        <div class="row">
            <div class="column columnjam" style="border-style: groove;">
                <h2>jam penayangan</h2>
            </div>
        </div>

        <div class="row">
            <div class="column columndurasi" style="border-style: groove;">
                <h2>durasi : </h2>
            </div>
        </div>

        <div class="row">
            <div class="column columndata" style="border-style: groove;">
                <div><h2>produser : </h2></div>
                <div><h2>director : </h2></div>
            </div>
        </div>

        <div>
        <span><button type="button" id="tombolkembali" class="btn btn-outline-secondary">kembali</button></span>
        <span><button type="button" id="tomboledit" class="btn btn-outline-secondary">edit</button></span>
        <span><button type="button" id="tomboldelete" class="btn btn-outline-secondary">delete</button></span>
        </div>
        
    </div>
@endsection
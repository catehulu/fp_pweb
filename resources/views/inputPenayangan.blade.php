@extends('layouts.app')

@section('content')
<div style="border-style:outset;margin:25px 50px;">
        <div style="text-align:center;border-bottom:solid gray;margin:25px;">
            <h1 class="mt-3"><b>Input Penayangan</b></h1>
        </div>
        <div style="margin:50px">
            <form>
                <!-- date picker -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="jamPenayangan"><b>Tanggal Penayangan</b></label>
                    <br>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input type="date" class="form-control" id="inputDate" name="inputDate" placeholder="Enter date">
                    </div>
                    <script>
                    </script>
                    {{-- <script>
                    
                    </script>
                    <div class="ui calendar" id="example2">
                        
                    </div>
                    <br/> --}}
                </div>

                <!--jam penayangan -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="jamPenayangan"><b>Jam Penayangan</b></label>
                    <br>
                    <label>
                        <input type="radio" class="option-input radio" name="example"/>
                        08:00
                    </label>
                    <br>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        12:00
                    </label>
                    <br>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        16:00
                    </label>
                    <br>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        20:00
                    </label>
                    <br>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        00:00
                    </label>
                    <br>
                </div>

                <!--studio -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="studio"><b>Studio</b></label>
                    <br>
                    <input class="form-control" type="number" value="0" id="Durasi" style="margin:0px 50px 0px 0px">
                </div>

                <!-- harga -->
                <div class="form-group" style="border-style:solid;border-color:gray;padding:10px">
                    <label for="harga"><b>Harga (Rp.)</b></label>
                    <br>
                    <input class="form-control" type="number" value="0" id="Durasi" style="margin:0px 50px 0px 0px">
                </div>


                <button type="button" class="btn btn-secondary btn-lg mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
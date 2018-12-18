<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\tayang;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\transaksi;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::all();
        return view('admin.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputfilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = pathinfo($request->file('cover_image')->getClientOriginalName(), PATHINFO_FILENAME);
        $uniqueFilename = $filename.'_'.time().'.'.$request->file('cover_image')->getClientOriginalExtension();

        film::create([
            'nama_film' => request('nama_film'),
            'deskripsi_film' => request('deskripsi_film'),
            'durasi' => request('durasi'),
            'cover_image' => $uniqueFilename,
            'produser' => request('produser'),
            'director' => request('director'),
            'age_rating' => request('age_rating'),
            'genre' => request('genre')
        ]);
        $path = $request->file('cover_image')->storeAs('public/cover_image',$uniqueFilename);
        
        return redirect()->route('admin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = film::where('id_film',$id)->first();;
        $tayang = tayang::all()->where('id_film',$id);
        return view('admin.readone',compact('films','tayang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $films = film::where('id_film',$id)->first();
        return view('admin.editfilm',compact('films'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename = pathinfo($request->file('cover_image')->getClientOriginalName(), PATHINFO_FILENAME);
        $uniqueFilename = $filename.'_'.time().'.'.$request->file('cover_image')->getClientOriginalExtension();
        
        $edit = film::where('id_film',$id)->first();
        $file_path = app_path($edit->cover_image);
        $edit->update([
            'nama_film' => request('nama_film'),
            'deskripsi_film' => request('deskripsi_film'),
            'durasi' => request('durasi'),
            'age_rating' => request('age_rating'),
            'genre' => request('genre'),
            'produser' => request('produser'),
            'director' => request('director'),
            'cover_image' => $uniqueFilename,
        ]);
        if(File::exists($file_path)) File::delete($file_path);
        $path = $request->file('cover_image')->storeAs('public/cover_image',$uniqueFilename);

        return redirect()->route('admin.index')->with('success','Film berhasil diupdate!');
    }
    
    public function transaksi(){
        $transaksi = transaksi::all();
        return view('admin.transaksi',compact('transaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $film = film::where('id_film',request('id_film'));
        $file_path = app_path($film->cover_image);
        if(File::exists($file_path)) File::delete($file_path);
        return redirect()->route('admin.index')->with('success','Film berhasil dihapus');
    }

    public function createPenayangan($id){
        $film = film::where('id_film',$id)->first();
        return view('admin.penayangan',compact('film'));
    }

    public function storePenayangan(Request $request){
        $film = film::where('id_film',request('id_film'))->first();
        $waktumulai = Carbon::createFromFormat('Y-m-d',request('tanggal_film'));
        $waktumulai->setTime(request('jam-penayangan'),0,0);
        $cektayang = tayang::where('waktu_mulai',$waktumulai)->where('studio',request('studio'))->first();
        if($cektayang == NULL){
            $akhir_tayang = new Carbon($waktumulai);
            $akhir_tayang->addMinutes($film->durasi);
            $validateData = $request->validate([
                'id_film' => 'required',
                'tanggal_film' => 'required|after:yesterday',
                'harga_tiket' => 'required',
                'studio' => 'required',
            ]);

            tayang::create([
                'id_film' => request('id_film'),
                'waktu_mulai' => $waktumulai,
                'waktu_selesai' => $akhir_tayang,
                'harga_tiket' => request('harga_tiket'),
                'studio' => request('studio'),
                'jumlah_kursi' => 50,
            ]);
        }
        else {
            return redirect()->route('admin.cPenayangan',request('id_film'))->with('error','Penayangan sudah ada');
        }

        return redirect()->route('admin.index')->with('success','Penayangan Berhasil Dibuat');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;

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
        $film = film::find($id)->first();
        return view('admin.readone',compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

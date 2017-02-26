<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Mahasiswa;
class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
		$data=Mahasiswa::all();
        return view ('home')->with('d', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('tambah-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$mahasiswa = new Mahasiswa;
		$mahasiswa -> nim = $request->nim;
		$mahasiswa -> nama = $request->nama;
		$mahasiswa -> alamat = $request->alamat;
		$this->validate($request,[
		'nim'=>'required',
		'nama'=>'required'
		]);
		$mahasiswa ->save();
		return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
		$mahasiswa = Mahasiswa::find($id);
		return view('edit-mahasiswa')->with('d',$mahasiswa);
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
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa -> nim = $request->nim;
		$mahasiswa -> nama = $request->nama;
		$mahasiswa -> alamat = $request->alamat;
		$mahasiswa ->save();
		return redirect('/');
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
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa ->delete();
		return redirect('/');
    }
}

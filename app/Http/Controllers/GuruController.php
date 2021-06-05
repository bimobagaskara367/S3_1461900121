<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $guru = DB::table('guru')
        ->where("guru.nama", "LIKE", "%".$request->search."%")
        ->orwhere("guru.mengajar", "LIKE", "%".$request->search."%")
        ->get();
       
        


        return view('guru0121', [
            'guru' => $guru
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create0121');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = guru::create([
            'guru.nama' => $request->nama,
            'guru.mengajar' => $request->mengajar,
            
        ]);

        return redirect('guru0121')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(guru $guru)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::findorfail($id);
        return view('edit0121', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $guru = [
            'nama' => $request->nama,
            'mengajar' => $request->mengajar,
        ];

        guru::whereId($id)->update($guru);
        return redirect('guru0121')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = guru::findorfail($id);
        $data->delete();
        return redirect('guru0121')->with('success', 'Data berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user1;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class userController_ extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user1::orderBy('nama', 'desc')->paginate(5);
        return view('user/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Session::flash('nama',$request->nama);
        Session::flash('email',$request->email);
        Session::flash('alamat',$request->alamat);

        $request->validate([
            'nama' => 'required',
            'email'=> 'required',
            'alamat'=> 'required',
            'foto'=>'required|mimes:jpeg,jpg,png,gif'
        ],[
            'nama.required'=>'Nama wajib diisi',
            'email.required'=>'email wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
            'foto.mimes'=>'tolong upload file yang berekstensi jpg/jpeg/gif/png'
        ]);
        $fotofile = $request->file('foto');
        $fotoekstension = $fotofile->extension();
        $foto_nama = date('ymdis').".".$fotoekstension;
        $fotofile->move(public_path('foto'),$foto_nama);

        $data = [
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'foto'=>$foto_nama,
            ];
        
        user1::create($data);
        return redirect('user');

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
        $data = user1::where('id',$id)->first();
        return view('user/edit')->with('data',$data);
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
        $request->validate([
            'nama' => 'required',
            'email'=> 'required',
            'alamat'=> 'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'email.required'=>'email wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
        ]);
        $data = [
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            ];
        
        if($request->hasFile('foto')){
            $request->validate([
                'foto'=>'required|mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes'=>'tolong upload file yang berekstensi jpg/jpeg/gif/png'
            ]);
            $fotofile = $request->file('foto');
            $fotoekstension = $fotofile->extension();
            $foto_nama = date('ymdis').".".$fotoekstension;
            $fotofile->move(public_path('foto'),$foto_nama);
            //sudah terupload
            $datafoto = user1::where('id',$id)->first();
            File::delete(public_path('foto').'/'.$datafoto->foto);
            
            $data['foto']=$foto_nama;
        }

        
        user1::where('id',$id)->update($data);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = user1::where('id',$id)->first();
        File::delete(public_path('foto').'/'.$data->foto);
        user1::where('id',$id)->delete();
        return redirect('/user');
    }
}

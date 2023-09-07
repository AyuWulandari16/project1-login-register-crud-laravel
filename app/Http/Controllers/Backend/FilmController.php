<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    //
    public function FilmView(){
        $data['allDataFilm']=Film::all();
        return view('backend.film.view_film', $data);
    
    }

    public function FilmAdd(){
        return view('backend.film.add_film');
    
    }

    public function FilmStore(Request $request){
        
        $validatedData = $request->validate([
            'judul' => 'required',
        ]);
         
        $data = new Film();
        $data->judul=$request->judul;
        $data->tahun=$request->tahun;
        $data->sutradara=$request->sutradara;
        $data->save();

        return redirect()->route('film.view')->with('info','Tambah Film Berhasil');
    
    }

    public function FilmEdit($id){
        $editData = Film::find($id);
        return view('backend.Film.edit_Film', compact('editData'));
    }

    public function FilmUpdate(Request $request,$id){
        $data=Film::find($id);
        $data->judul=$request->judul;
        $data->tahun=$request->tahun;
        $data->sutradara=$request->sutradara;
        $data->save();

        return redirect()->route('film.view')->with('info','Edit Film Berhasil');
    
    }
    
    public function FilmDelete($id){
        $deleteData = Film::find($id); 
        $deleteData->delete();
        return redirect()->route('film.view')->with('info','DeleteFilm Berhasil');
    }
}

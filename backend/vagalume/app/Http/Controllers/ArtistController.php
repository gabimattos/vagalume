<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function create (Request $request){
        $artist = new Artist;
        $artist -> name = $request->name;
        $artist -> save();
        return response()->json(['artist' => $artist], 200);
    }

    public function index(){
        $artists = Artist::all();
        return response()->json(['artists'=>$artists], 200);
    }

    public function show ($id){
        $artist = Artist::find($id);
        return response()->json(['artist' => $artist], 200);
    }

    public function update (Request $request, $id){

        $artist = Artist::find($id);
        if($request->name){
            $artist->name = $request->name;
        }
        $artist->save();
        return response()->json(['artist' => $artist], 200);
    }

    public function delete($id){
        Artist::destroy($id);

        return response()->json(['artista deletado'], 200);
    }

    /*
    Relacionamento 1-N entre artista e albuns.
    1 Artista tem N albuns, mas 1 álbum pertence a apenas 1 artista.

    public function createAlbum($id, $album_id){
        $artist = Artist::findOrFail($id);
        $album = Album::findOrFail($album_id);
        $artist->album_id = $album_id;
        $artist->save();
        return response()->json($artist);
    }

    public function deleteAlbum(%id, $album_id){
        $artist = Artist::findOrFail($id);
        $album = Album::findOrFail($album_id);
        $artist->album_id = NULL;
        $artist->save();
        return response()->json($artist);
    }
    */


}

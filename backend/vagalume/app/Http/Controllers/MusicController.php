<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function create (Request $request){
        $music = new Music;
        $music -> title = $request->title;
        $music -> url = $request->url;
        $music -> save();
        return response()->json(['music' => $music], 200);
    }

    public function index(){
        $musics = Music::all();
        return response()->json(['musics'=>$musics], 200);
    }

    public function show ($id){
        $music = Music::find($id);
        return response()->json(['music' => $music], 200);
    }

    public function update (Request $request, $id){

        $music = Music::find($id);
        if($request->title){
            $music->title = $request->title;
        }
        if($request->url){
            $music->url = $request->url;
        }
        $music->save();
        return response()->json(['music' => $music], 200);
    }

    public function delete($id){
        Music::destroy($id);

        return response()->json(['musica deletada'], 200);
    }

}

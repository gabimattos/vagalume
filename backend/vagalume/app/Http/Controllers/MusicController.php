<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

use GuzzleHttp\Client;

class MusicController extends Controller
{
    public function create (Request $request){
        $music = new Music;
        $music -> title = $request->title;
        $music -> url = $request->url;
        $music -> band = $request->band;
        $music -> album_id = $request->album_id;
        $music -> save();
        return response()->json(['music' => $music], 200);
    }

    public function index(){
        $musics = Music::all();
        return response()->json(['musics'=>$musics], 200);
    }

    public function show ($title){
        $music = Music::find($title);

        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.artmus?apikey={$api_key}&q={$title}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);

       
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

    public function searchMusic($title){
        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.artmus?apikey={$api_key}&q={$title}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);
    }

}

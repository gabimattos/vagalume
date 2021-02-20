<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

use GuzzleHttp\Client;

class ArtistController extends Controller
{
    public function create (Request $request){
        $artist = new Artist;
        $artist -> name = $request->name;
        $artist -> url = $request->url;
        $artist -> genre = $request->genre;
        $artist -> save();


        return response()->json(['artist' => $artist], 200);
    }

    public function index(){
        $artists = Artist::all();
        return response()->json(['artists'=>$artists], 200);
    }

    public function show ($name){
        $artist = Artist::find($name);

        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.art?apikey={$api_key}&q={$name}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);
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

    public function writeMusic($id, $music_id){
        $artist = Artist::find($id);
        $artist->musics()->attach($music_id);

        return response()->json('A música foi escrita.');

    }

    public function sellMusic($id, $music_id){
        $artist = Artist::find($id);
        $artist->musics()->dettach($music_id);

        return response()->json('A música foi vendida.');

    }



}

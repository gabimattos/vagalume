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

    public function searchArtist($name){
        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.art?apikey={$api_key}&q={$name}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

use GuzzleHttp\Client;

class AlbumController extends Controller
{
    public function create (Request $request){
        $album = new Album;
        $album -> title = $request->title;
        $album -> url = $request->url;
        $album -> year = $request->year;
        $album -> label = $request->label;
        $album -> artist_id = $request->artist_id;
        $album -> save();
        return response()->json(['album' => $album], 200);
    }

    public function index(){
        $albums = Album::all();
        return response()->json(['albums'=>$albums], 200);
    }

    public function show ($title){
        $album = Album::find($title);

        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.alb?apikey={$api_key}&q={$title}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);
    }

    public function update (Request $request, $id){

        $album = Album::find($id);
        if($request->title){
            $album->title = $request->title;
        }
        if($request->url){
            $album->url = $request->url;
        }
        if($request->year){
            $album->year = $request->year;
        }
        if($request->label){
            $album->label = $request->label;
        }
        $album->save();
        return response()->json(['album' => $album], 200);
    }

    public function delete($id){
        Album::destroy($id);

        return response()->json(['album deletado'], 200);
    }

    public function searchAlbum($title){
        $client = new Client([
            'base_uri' => 'https://api.vagalume.com.br'
        ]);

            $api_key=  env ('KEY');

        $response = $client->request('GET', "search.alb?apikey={$api_key}&q={$title}");
        
        $results = json_decode($response->getBody()->getContents());

        return response()->json($results);
    }
}

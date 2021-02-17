<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Music extends Model
{
    use HasFactory;

    protected $table = "musics";

    public function saveMusic (Request $request){
        $this->title = $request->title;
        $this->url = $request->url;
        $this->band = $request->band;
        $this->album_id = $request->album_id;
        $this->save();
    }

    public function updateMusic(Request $request, $id){
        if($request->title){
            $this->title = $request->title;
        }
        $this->save();
    }

    public function album(){
        return $this->belongsTo('App\Models\Album');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Album extends Model
{
    use HasFactory;

    public function saveAlbum (Request $request){
        $this->title = $request->title;
        $this->url = $request->url;
        $this->year = $request->year;
        $this->label = $request->label;
        $this->artist_id = $request->artist_id;
        
        $this->save();
    }

    public function updateAlbum(Request $request, $id){
        if($request->title){
            $this->title = $request->title;
        }
        $this->save();
    }

    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
}

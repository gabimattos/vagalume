<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Artist extends Model
{
    use HasFactory;

    public function saveArtist (Request $request){
        $this->name = $request->name;
        $this->save();
    }

    public function updateArtist(Request $request, $id){
        if($request->name){
            $this->name = $request->name;
        }
        $this->save();
    }

    public function albums(){
        return $this->hasMany('App\Models\Album');
    }
}

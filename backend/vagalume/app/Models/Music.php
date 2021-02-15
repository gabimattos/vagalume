<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Music extends Model
{
    use HasFactory;

    public function saveMusic (Request $request){
        $this->title = $request->title;
        $this->url = $request->url;
        $this->save();
    }

    public function updateMusic(Request $request, $id){
        if($request->title){
            $this->title = $request->title;
        }
        $this->save();
    }
}

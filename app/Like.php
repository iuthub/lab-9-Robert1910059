<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    use HasFactory;
    public function likes(){
        return $this->belongsTo('App\Post','post_id');

    }

}

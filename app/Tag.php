<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =['name'];
    use HasFactory;

    public function posts ()
    {
        return $this -> belongsToMany ('App\Post', 'post_tag', 'tag_id', 'post_id')
            -> withTimestamps();
    }
}

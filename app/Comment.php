<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\tweets;

class Comment extends Model
{
    //


    public function tweet()
    {
        return $this->belongsTo('App\tweets');
    }

    public function user()
    {
        return $this->belongsTo('App\Users');
    }
}

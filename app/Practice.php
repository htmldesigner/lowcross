<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsToMany('App\User', 'practice_user', 'practice_id ', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePractice extends Model
{
    protected $table = 'type_practices';

    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\User', 'type_practice_user', 'practice_id ', 'user_id');
    }
}

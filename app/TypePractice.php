<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePractice extends Model
{
    protected $table = 'type_practices';

    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsToMany('App\User', 'type_practice_user', 'practice_id ', 'user_id');
    }
}

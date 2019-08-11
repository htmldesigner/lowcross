<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admitted extends Model
{
    protected $table = 'admitted_practice';

    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

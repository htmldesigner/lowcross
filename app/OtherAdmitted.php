<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherAdmitted extends Model
{
    protected $table = 'other_admitted';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

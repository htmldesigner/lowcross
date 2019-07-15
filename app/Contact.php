<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'contact_id', 'id');
    }
}
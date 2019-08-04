<?php

namespace App;
use App\Contact;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'hint', 'security_question', 'secret_answer', 'find_us',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contact()
    {
        return $this->hasOne('App\Contact', 'user_id', 'id');
    }

    public function organization()
    {
        return $this->hasOne('App\Organization', 'user_id', 'id');
    }

    public function practice()
    {
        return $this->belongsToMany('App\Practice', 'practice_user', 'user_id', 'practice_id');
    }

    public function typePractice()
    {
        return $this->belongsToMany('App\TypePractice', 'type_practice_user', 'user_id', 'practice_id');
    }

    public function school()
    {
        return $this->hasOne('App\School', 'user_id', 'id');
    }

    public function admitted()
    {
        return $this->hasOne('App\Admitted', 'user_id', 'id');
    }

    public function otherAdmitted()
    {
        return $this->hasOne('App\OtherAdmitted', 'user_id', 'id');
    }

    public function language()
    {
        return $this->belongsToMany('App\Language', 'language_user', 'user_id', 'language_id');
    }
}

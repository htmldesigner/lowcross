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
        return $this->hasOne('App\Contact', 'contact_id', 'id');
    }

    public function organization()
    {
        return $this->hasOne('App\Organization', 'org_id', 'id');
    }

    public function practice()
    {
        return $this->hasOne('App\Practice', 'practice_id', 'id');
    }

    public function school()
    {
        return $this->hasOne('App\School', 'school_id', 'id');
    }

    public function admitted()
    {
        return $this->hasOne('App\Admitted', 'admitted_id', 'id');
    }

    public function otherAdmitted()
    {
        return $this->hasOne('App\Admitted', 'other_id', 'id');
    }

}

<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

// authentications
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    //

    Use Notifiable;

    protected $guard = 'administrator';

    protected $fillable = [
        'tag_id',
        'title_id',
        'surname',
        'first_name',
        'last_name',
        'gender_id',
        'date_of_birth',
        'staff_role_id',
        'class_id',
        'country_id',
        'state_id',
        'lga_id',
        'religion_id',
        'address',
        'phone_number',
        'next_of_kin_title_id',
        'next_of_kin_name',
        'next_of_kin_address',
        'next_of_kin_relationship_id',
        'next_of_kin_phone_number',
        'next_of_kin_email',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    public function title(){
        return $this->belongsTo('SSS\Title');
    }
    public function gender(){
        return $this->belongsTo('SSS\Gender');
    }
    public function staff_role(){
        return $this->belongsTo('SSS\Staff_role');
    }
    public function classe(){
        return $this->belongsTo('SSS\Classe');
    }
    public function country(){
        return $this->belongsTo('SSS\Country');
    }
    public function state(){
        return $this->belongsTo('SSS\State');
    }
    public function lga(){
        return $this->belongsTo('SSS\Lga');
    }
    public function religion(){
        return $this->belongsTo('SSS\Religion');
    }
    public function schools(){
        return $this->hasMany('SSS\School');
    }
  
}

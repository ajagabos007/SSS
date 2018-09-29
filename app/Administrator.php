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
 
    public function gender(){
        return $this->belongsTo('app\Gender');
    }
    public function staff_role(){
        return $this->belongsTo('app\Staff_role');
    }
    public function classe(){
        return $this->belongsTo('app\Classe');
    }
    public function country(){
        return $this->belongsTo('app\Country');
    }
    public function state(){
        return $this->belongsTo('app\State');
    }
    public function lga(){
        return $this->belongsTo('app\Lga');
    }
    public function religion(){
        return $this->belongsTo('app\Religion');
    }
  
}

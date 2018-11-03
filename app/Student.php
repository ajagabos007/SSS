<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'school_id',
        'tag_id',
        'surname',
        'first_name',
        'last_name',
        'gender_id',
        'date_of_birth',
        'class_id',
        'country_id',
        'state_id',
        'lga_id',
        'religion_id',
        'address',
        'guidance_id',
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
        'name',
        'remember_token',
    ];
    public function schools(){
        return $this->belongsTo('app\School');
    }
    public function genders(){
        return $this->belongsTo('app\Gender');
    }
    public function classes(){
        return $this->belongsTo('app\Classe');
    }
    public function countries(){
        return $this->belongsTo('app\Country');
    }
    public function states(){
        return $this->belongsTo('app\State');
    }
    public function lgas(){
        return $this->belongsTo('app\Lga');
    }
    public function religions(){
        return $this->belongsTo('app\Religion');
    }
    public function guidances(){
        return $this->belongstToMany('app\Guidance');
    }
}

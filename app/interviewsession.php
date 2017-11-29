<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interviewsession extends Model
{
    protected $fillable = [
        'id', 'Description', 'date', 'vacancy', 'location_id'
    ];
    
    public function invitations(){
        return $this->hasMany('App\invite');
    }
    
    public function participants(){
        return $this->hasManyThrough('User', 'invite')
                ->where(array('response' => 'coming'));
    }
}

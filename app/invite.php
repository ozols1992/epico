<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invite extends Model
{
    protected $fillable = [
        'response', 'interviewsession_id', 'user_id', 'id'
    ];
    
    public function session(){
        return $this->belongsTo('App\interviewsession');
    }
    
    public function user(){
        return $this->hasOne('User');
    }
    
    
}

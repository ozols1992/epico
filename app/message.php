<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class message extends Model
{   
    protected $fillable = [
        'message', 'vacancy', 'type', 'consultant_id', 'author_id'
    ];
    
    
    public function author(){
        return $this->belongsTo('App\User', 'author_id');
    }
    
    public function consultant(){
        return $this->belongsTo('App\User', 'consultant_id');
    }
    
    public function invitation(){
        return $this->type == 'invite' ? $this->hasOne('App\invites') : null;
    }

    public static function getmessages($consultantId, $vacancyId, $columns = ['*'])
    {
        //consultant === User OR User === Admin
        return self::with('author')
                ->where(array('consultant_id' => $consultantId, 'vacancy' => $vacancyId))
                ->get(is_array($columns) ? $columns : func_get_args());
    }
}
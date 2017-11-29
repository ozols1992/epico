<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class message extends Model
{   
    protected $fillable = [
        'message', 'vacancy', 'type', 'consultant_id', 'author_id'
    ];
    
    
    public function author(){
        return $this->belongsTo('App\User', 'author_id')
                ->withDefault(['name' => 'Deleted User']);
    }
    
    public function consultant(){
        //return $this->belongsTo(User::class, 'consultantId');
    }
    
    public function vacancy(){
        return new vacancie(array('id' => $this['id'], 'jobTitle' => 'Job Title'));
    }
    
    public static function getmessages($consultantId, $vacancyId, $columns = ['*'])
    {
        //consultant === User OR User === Admin
        
        return self::with('author')
                ->where(array('consultant_id' => $consultantId, 'vacancy' => $vacancyId))
                ->get(is_array($columns) ? $columns : func_get_args());
    }
}
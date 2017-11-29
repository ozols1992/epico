<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'title', 'description', 'type', 'picture', 'country', 'city', 'phone_nr', 'available_or_not'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vacancies() {
        return $this->hasMany(Vacancies::class);
    }
    
    public function messages(){
        return $this->hasMany('App\message', 'id', 'author_id');
    }

    protected function applications(){
        return $this->hasMany('App\message', 'author_id', 'id')
                ->where('messages.type', '=', 'Application');
    }
    
    public function hasApplied($vacancy){
        return count($this->applications()
                ->where('vacancy', '=', $vacancy->Id)->get()) > 0;
    }
}

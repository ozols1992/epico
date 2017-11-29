<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\epicoApiController;

class vacancy extends Model
{
    protected $fillable = [
        'Id', 'Description', 'type', 'HeadLine', 'Location', 'JobBeginDate', 
        'Applicationdeadline', 'Duration', 'Country', 'ExternalAdIsPublished',
        'AdvertisingType', 'SearchEmail', 'Footer'
    ];
    
    protected static $url = "http://epico.dk/umbraco/surface/home/AllAdvertising";
    
    //protected static $API = new epicoApiController();?

    private static function getAll_Json(){
        return json_decode(file_get_contents(self::$url), true);
    }

    public static function get($id){
        $all = self::getAll_Json();
        $num = count($all);
        $count = 0;
        do{
            $v = $all[$count];
            $count++;
        }
        while($count < $num && $v['Id'] != $id);
        
        return $v['Id'] == $id ? new vacancy($v) : null;
    }
    
    public static function getAll(){
        $json = self::getAll_Json();
        $res = array();
        foreach ($json as $v){
            $res[] = new vacancy($v);
        }
        
        return $res;
    }
    
    public function applications(){
         return $this->hasMany('App\messages', 'Id', 'vacancy')
                 ->where('messages.type', '=', 'Application');
    } 
}

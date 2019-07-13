<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notification extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'company', 'message', 'sort'];

//    public static function getEnumValues(){
//        $type = DB::select(DB::raw('SHOW COLUMNS FROM notifications WHERE Field = "purpose"'))[0]->Type;
//        preg_match('/^enum\((.*)\)$/', $type, $matches);
//        $values = [];
//        foreach(explode(',', $matches[1]) as $value){
//            $values[] = trim($value, "'");
//        }
//        return $values;
//    }
}

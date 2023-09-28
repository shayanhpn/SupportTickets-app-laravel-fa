<?php
namespace App\Traits;

use Illuminate\Support\Str;
trait GenerateUUIDv4{
    public static function bootUUIDv4(){
        static::creating(function($model){
            do{
                $uuid = $model->id = Str::uuid();
            }while(self::where('id',$uuid)->exists());
            return $uuid;
        });
    }
}

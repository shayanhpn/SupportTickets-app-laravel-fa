<?php
namespace App\Traits;
trait AuthenticateUserId{
    public static function userIdBoot(){
        static::creating(function($model){
            $model->user_id = auth()->user()->id;
        });
    }
}

<?php

namespace App\Models;

use App\Traits\AuthenticateUserId;
use App\Traits\GenerateUUIDv4;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Ticket extends Model
{
    use HasFactory,GenerateUUIDv4,AuthenticateUserId;
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the key type to string
    protected $fillable = [
        'title',
        'priority',
        'section',
        'message'
    ];
    public static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->user_id = auth()->user()->id;
        });
        static::bootUUIDv4();
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }
}

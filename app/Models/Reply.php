<?php

namespace App\Models;

use App\Traits\GenerateUUIDv4;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory,GenerateUUIDv4;
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the key type to string
    protected $fillable = [
        'message'
    ];
    public static function boot(){
        parent::boot();
        static::bootUUIDv4();
    }

    public function ticket(){
        return $this->belongsTo(Ticket::class,'ticket_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

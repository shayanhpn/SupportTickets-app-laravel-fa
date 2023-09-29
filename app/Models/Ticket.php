<?php

namespace App\Models;

use App\Traits\GenerateUUIDv4;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory,GenerateUUIDv4;

    protected $fillable = [
        'firstname',
        'email',
        'title',
        'priority',
        'section',
        'message'
    ];
    public static function boot(){
        parent::boot();
        static::bootUUIDv4();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

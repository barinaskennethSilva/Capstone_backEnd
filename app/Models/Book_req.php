<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_req extends Model
{
    use HasFactory;
    protected $table = 'book_req';
    protected $fillable = ['Client_name','contactNum','Type_service','Agent_therapist','time_interval','Date_schedule','price'];
        public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist_req extends Model
{
    use HasFactory;

    protected $table = 'therapist'; // Specify the table name

    protected $fillable = ['emp_id', 'emp_profile', 'emp_fname', 'emp_lname', 'email_add', 'Permanent_address','contactNum', 'skills', 'status'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
        protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            
        });
    }

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class); // Assuming 'Booking' is your related model
    }
}

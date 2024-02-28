<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_req extends Model
{
    use HasFactory;
    protected $table = 'book_req';
    protected $fillable = ['Client_name','contactNum','Type_package','Type_service','Agent_therapist','time_interval','Date_schedule','price'];
}

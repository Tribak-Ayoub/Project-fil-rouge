<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsenceSession extends Model
{
    protected $table = 'absence_sessions'; // Explicitly define the table name

    protected $fillable = ['date', 'timeSlot']; // Define the fillable fields for mass assignment

}

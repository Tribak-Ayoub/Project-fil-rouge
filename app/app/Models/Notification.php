<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['message', 'apprenant_id', 'responsable_id'];

    public function apprenant() {
        return $this->belongsTo(User::class, 'apprenant_id');
    }

    public function responsable() {
        return $this->belongsTo(User::class, 'responsable_id');
    }
}

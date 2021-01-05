<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * Get the visits for the patient.
     */
    public function visits()
    {
        return $this->hasMany('App\Models\Visit');
    }

    /**
     * Get the user for the patient.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

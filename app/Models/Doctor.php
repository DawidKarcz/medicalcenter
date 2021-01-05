<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * Get the visits for the doctor.
     */
    public function visits()
    {
        return $this->hasMany('App\Models\Visit');
    }

    /**
     * Get the user for the doctor.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

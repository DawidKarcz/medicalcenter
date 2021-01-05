<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    /**
     * Get the doctor that owns the visit.
     */
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }

    /**
     * Get the patient that owns the visit.
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}

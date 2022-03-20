<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'organization_id',
        'email',
        'phone',
        'adress',
        'city',
        'state',
        'country_id',
        'postal_code',
    ];

    // Relaciones
    // Un contacto tiene una ciudad
    public function country() {
        return $this->belongsTo(Country::class);
    }

    // Un contacto tiene una organizacion
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}

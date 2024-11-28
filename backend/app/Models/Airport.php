<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /** @use HasFactory<\Database\Factories\AirportFactory> */
    use HasFactory;

    function flights() {
        return $this->hasMany(Flight::class);
    }

    function departureFlights() {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    function arrivalFlights() {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }
}

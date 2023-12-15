<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emission extends Model
{
    protected $fillable = ['emission_id', 'nox_emission', 'co2_emission', 'ship_id'];
    use HasFactory;
}

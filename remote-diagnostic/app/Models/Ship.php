<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $fillable = ['ship_id', 'ship_name', 'user_name', 'emission_id'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['ship_id', 'user_name', 'first_name', 'last_name','ship_name', 'owner_name', 'company', 'icon', 'roles', 'password'];
    use HasFactory;
}

<?php

namespace Dirushan\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';

    // Allow mass assignment on the following fields
    protected $fillable = [
        'name', 'email', 'password',
    ];
}

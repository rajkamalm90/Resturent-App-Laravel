<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admininfo extends Model
{
    use HasFactory;

    protected $table = 'admininfo';

    protected $fillable = [
        'name',
        'password',
        // Add other fillable fields as needed
    ];
}

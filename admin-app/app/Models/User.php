<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    

    // Define the fillable properties for mass assignment
    protected $fillable = ['name', 'phone', 'address', 'payment', 'description', 'subscribe'];

    // Add any additional model configurations, relationships, etc.

    // Example: One-to-Many relationship with another model
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'service', 'preferred_date', 'message', 'status', 'admin_reply', 'replied_at'
    ];

    protected $casts = [
        'preferred_date' => 'datetime',
        'replied_at' => 'datetime',
    ];
}

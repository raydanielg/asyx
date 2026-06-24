<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'type',
        'full_name',
        'email',
        'phone',
        'company',
        'subject',
        'budget',
        'service_interest',
        'message',
        'status',
    ];

    protected $casts = [
        'type' => 'string',
        'status' => 'string',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'career_id',
        'full_name',
        'email',
        'phone',
        'cover_letter',
        'cv_path',
        'portfolio_url',
        'status',
    ];

    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ApplyJob extends Pivot
{
    use HasFactory;

    protected $table = 'apply_jobs';

    protected $fillable = [
        'user_id',
        'job_id',
        'status',
        'applied_at'
    ];
}

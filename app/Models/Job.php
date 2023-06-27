<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_id',
        'company_name',
        'content',
        'description_url',
        'salary',
        'company_logo',
        'category',
        'location',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'apply_jobs')
        ->using(ApplyJob::class)
            ->withPivot(['applied_at', 'status'])
            ->withTimestamps();
    }

    public function userCount()
    {
        return $this->belongsToMany(User::class, 'apply_jobs')
        ->using(ApplyJob::class)->count();
    }

    public function isApplied($id)
    {
        if(Auth::check())
        {
            $checkAlreadyApplied = ApplyJob::whereJobId($id)->whereUserId(Auth::user()->id)->first();

            if(! $checkAlreadyApplied)
            {
                return true;
            }
            else{
                return false;
            }
        }

        return true;
    }

}

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    protected $fillable = [
        'job_title',
        'job_id',
        'user_id',
        'company_name',
        'created_by',
        'content',
        'description_url',
        'job_type',
        'salary',
        'start_ex',
        'end_ex',
        'status',
        'company_logo',
        'expired_at',
        'company_logo',
        'category',
        'location',
    ];

    protected $casts = [
        'id' => 'string',
        'user_id' => 'string',
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }
    

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function richContent()
    {
        return $this->hasOne(RichContent::class);
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

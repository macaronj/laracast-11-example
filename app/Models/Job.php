<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}

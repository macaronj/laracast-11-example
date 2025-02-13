<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    use HasFactory;
    use Notifiable;
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}

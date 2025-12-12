<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Ако табелата не се вика "jobs", тука ја дефинираме
    protected $table = 'job_listings';

    // Дозволени за масовно внесување
    protected $fillable = ['title', 'salary'];

    // Ако табелата нема created_at и updated_at
    public $timestamps = false;
}


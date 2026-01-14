<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employer;

class JobListing extends Model
{
    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}



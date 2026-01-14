<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\JobListing;

class Employer extends Model
{
protected $fillable = ['name', 'user_id'];

public function user()
{
    return $this->belongsTo(User::class);
}

public function jobs()
{
    return $this->hasMany(JobListing::class);
}
}


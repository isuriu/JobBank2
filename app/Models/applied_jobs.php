<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applied_jobs extends Model
{
    protected $table = 'applied_jobs';
    public $timestamps = true;

    protected $fillable = [
        'job_id', 
        'email',
        'name',
        'job_title',
        'cv_file',
        'company_name',
        'closing_date'
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_details extends Model
{
    protected $table = 'company_details';
    public $timestamps = true;

    protected $fillable = [
        'company_id', 
        'company_name',
        'description',
        'address',
        'registration_number',
        'contact',
        'email'
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_details extends Model
{
    protected $table = 'user_details';
    public $timestamps = true;

    protected $fillable = [
		'name', 
        'full_name',
        'name_in_katakana',
        'email',
        'address',
        'gender',
        'dob',
        'nationality',
        'country_status',
        'contact',
        'organization_type_jp',
        'organization_jp',
        'degree_jp',
        'grad_year_jp',
        'grad_month_jp',
        'organization_type_foreign',
        'organization_foreign',
        'degree_foreign',
        'grad_year_foreign',
        'grad_month_foreign',
        'is_experience',
        'experience',
        'jap_ability',
        'jap_level',
        'english_ability',
        'english_level',
        'other_languages',
        'other_qualifications',
        'desired_industry',
        'desired_ocupation',
        'dev_languages',
        'os',
        'db',
        'other_softwares',
        'categories',
        'create_user',
        'status',
        'cv_file',
        'profile_picture'

	];

    use HasFactory;
}

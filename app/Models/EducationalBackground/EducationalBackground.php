<?php

namespace App\Models\EducationalBackground;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'school_name',
        'basic_education_degree_course',
        'start_date',
        'end_date',
        'highest_level',
        'year_graduated',
        'honor_received',
        'scholarship',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}

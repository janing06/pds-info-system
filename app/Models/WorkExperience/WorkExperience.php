<?php

namespace App\Models\WorkExperience;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'position_title',
        'company',
        'monthly_salary',
        'salary_grade',
        'salary_step',
        'status_of_appointment',
        'govt_service',
    ];

    public function personalInformartion()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}

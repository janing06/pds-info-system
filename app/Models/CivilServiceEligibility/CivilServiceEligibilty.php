<?php

namespace App\Models\CivilServiceEligibility;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilServiceEligibilty extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_service',
        'rating',
        'examination_date',
        'examination_place',
        'license_number',
        'license_validity_date',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}

<?php

namespace App\Models\FamilyBackground;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_surname',
        'spouse_suffix',
        'occupation',
        'employeer',
        'business_name',
        'business_address',
        'telephone_no',
        'father_first_name',
        'father_middle_name',
        'father_surname',
        'father_suffix',
        'mother_maiden_name',
        'mother_first_name',
        'mother_middle_name',
        'mother_surname',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}

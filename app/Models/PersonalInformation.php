<?php

namespace App\Models;

use App\Models\Address\PermanentAddress;
use App\Models\Address\ResidentialAddress;
use App\Models\CivilServiceEligibility\CivilServiceEligibilty;
use App\Models\EducationalBackground\EducationalBackground;
use App\Models\FamilyBackground\FamilyBackground;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'place_of_birth',
        'sex',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id',
        'pag_ibig_id',
        'philhealth_id',
        'sss_id',
        'tin_id',
        'agency_employee_no',
        'citizenship',
        'country',
        'telephone_no',
        'mobile_no',
        'email',
    ];

    public function residentialAddress()
    {
        return $this->hasOne(ResidentialAddress::class);
    }

    public function permanentAddress()
    {
        return $this->hasOne(PermanentAddress::class);
    }

    public function familyBackground()
    {
        return $this->hasOne(FamilyBackground::class);
    }

    public function educationalBackground()
    {
        return $this->hasMany(EducationalBackground::class);
    }

    public function civilServiceEligibility()
    {
        return $this->hasMany(CivilServiceEligibilty::class);
    }
}

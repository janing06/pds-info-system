<?php

namespace App\Models\VoluntaryWork;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoluntaryWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        'organization_address',
        'start_date',
        'end_date',
        'number_of_hours',
        'position',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}

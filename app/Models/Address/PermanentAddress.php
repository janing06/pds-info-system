<?php

namespace App\Models\Address;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanentAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'city',
        'barangay',
        'street',
        'house_no',
        'subdivision',
        'zipcode',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}

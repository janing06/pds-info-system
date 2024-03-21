<?php

namespace App\Models\FamilyBackground;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_name',
        'child_date_of_birth'
    ];

    public function familyBackground()
    {
        return $this->belongsTo(FamilyBackground::class);
    }
}

<?php

namespace App\Http\Controllers\Web\PDS;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDS\UpdateFamilyBackgroundRequest;
use App\Models\FamilyBackground\FamilyBackground;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FamilyBackgroundController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateFamilyBackgroundRequest $request, FamilyBackground $familybg)
    {
        $data = $request->validated();

        $familybg->spouse_first_name = $data['spouse_first_name'];
        $familybg->spouse_middle_name = $data['spouse_middle_name'];
        $familybg->spouse_surname = $data['spouse_surname'];
        $familybg->spouse_suffix = $data['spouse_suffix'];
        $familybg->spouse_occupation = $data['spouse_occupation'];
        $familybg->spouse_employeer = $data['spouse_employeer'];
        $familybg->spouse_business_name = $data['spouse_business_name'];
        $familybg->spouse_business_address = $data['spouse_business_address'];
        $familybg->spouse_telephone_no = $data['spouse_telephone_no'];
        $familybg->father_first_name = $data['father_first_name'];
        $familybg->father_middle_name = $data['father_middle_name'];
        $familybg->father_surname = $data['father_surname'];
        $familybg->father_suffix = $data['father_suffix'];
        $familybg->mother_first_name = $data['mother_first_name'];
        $familybg->mother_middle_name = $data['mother_middle_name'];
        $familybg->mother_surname = $data['mother_surname'];
        $familybg->mother_maiden_name = $data['mother_maiden_name'];

        $familybg->update();

        Alert::toast('Family Background Successfully Updated', 'success')->timerProgressbar(true)->autoClose(2000);
        return back();
    }
}

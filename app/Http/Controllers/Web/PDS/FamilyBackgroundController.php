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
    public function __invoke(UpdateFamilyBackgroundRequest $request, FamilyBackground $pd)
    {
        $data = $request->validated();

        $pd->spouse_first_name = $data['spouse_first_name'];
        $pd->spouse_middle_name = $data['spouse_middle_name'];
        $pd->spouse_surname = $data['spouse_surname'];
        $pd->spouse_suffix = $data['spouse_suffix'];
        $pd->spouse_occupation = $data['spouse_occupation'];
        $pd->spouse_employeer = $data['spouse_employeer'];
        $pd->spouse_business_name = $data['spouse_business_name'];
        $pd->spouse_business_address = $data['spouse_business_address'];
        $pd->spouse_telephone_no = $data['spouse_telephone_no'];
        $pd->father_first_name = $data['father_first_name'];
        $pd->father_middle_name = $data['father_middle_name'];
        $pd->father_surname = $data['father_surname'];
        $pd->father_suffix = $data['father_suffix'];
        $pd->mother_first_name = $data['mother_first_name'];
        $pd->mother_middle_name = $data['mother_middle_name'];
        $pd->mother_surname = $data['mother_surname'];
        $pd->mother_maiden_name = $data['mother_maiden_name'];

        $pd->update();

        Alert::toast('Family Background Successfully Updated', 'success')->timerProgressbar(true)->autoClose(2000);
        return back();
    }
}

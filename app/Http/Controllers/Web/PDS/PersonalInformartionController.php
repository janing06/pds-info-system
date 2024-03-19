<?php

namespace App\Http\Controllers\Web\PDS;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDS\StorePDSRequest;
use App\Models\Address\PermanentAddress;
use App\Models\Address\ResidentialAddress;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformartionController extends Controller
{
    public function index()
    {
        $pds = PersonalInformation::select('id', 'first_name', 'middle_name', 'last_name')->get();
        return view('pds.index', compact('pds'));
    }

    public function create()
    {
        return view('pds.create');
    }

    public function store(StorePDSRequest $request)
    {

        $data = $request->validated();

        // dd($data);

        $pds = new PersonalInformation();
        $pds->first_name = $data['first_name'];
        $pds->middle_name = $data['middle_name'];
        $pds->last_name = $data['last_name'];
        $pds->suffix = $data['suffix'];
        $pds->date_of_birth = $data['date_of_birth'];
        $pds->place_of_birth = $data['place_of_birth'];
        $pds->sex = $data['sex'];
        $pds->civil_status = $data['civil_status'];
        $pds->height = $data['height'];
        $pds->weight = $data['weight'];
        $pds->blood_type = $data['blood_type'];
        $pds->gsis_id = $data['gsis_id'];
        $pds->pag_ibig_id = $data['pag_ibig_id'];
        $pds->philhealth_id = $data['philhealth_id'];
        $pds->sss_id = $data['sss_id'];
        $pds->tin_id = $data['tin_id'];
        $pds->agency_employee_no = $data['agency_employee_no'];
        $pds->citizenship = $data['citizenship'];
        $pds->country = $data['country'];
        $pds->telephone_no = $data['telephone_no'];
        $pds->mobile_no = $data['mobile_no'];
        $pds->email = $data['email'];
        $pds->save();

        $residentialAddress = new ResidentialAddress();
        $residentialAddress->personal_information_id = $pds->id;
        $residentialAddress->fill([
            'province' => $data['residential_province'],
            'city' => $data['residential_city'],
            'barangay' => $data['residential_barangay'],
            'street' => $data['residential_street'],
            'house_no' => $data['residential_house_no'],
            'subdivision' => $data['residential_subdivision'],
            'zipcode' => $data['residential_zipcode'],
        ]);
        $residentialAddress->save();

        $permanentAddress = new PermanentAddress();
        $permanentAddress->personal_information_id = $pds->id;
        $permanentAddress->fill([
            'province' => $data['permanent_province'],
            'city' => $data['permanent_city'],
            'barangay' => $data['permanent_barangay'],
            'street' => $data['permanent_street'],
            'house_no' => $data['permanent_house_no'],
            'subdivision' => $data['permanent_subdivision'],
            'zipcode' => $data['permanent_zipcode'],
        ]);
        $permanentAddress->save();


        return redirect()->route('pds.index');
    }

    public function show(string $id)
    {
        $pds = PersonalInformation::findOrFail($id);

        return view('pds.show', compact('pds'));
    }
}

<?php

namespace App\Http\Controllers\Web\PDS;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDS\StorePDSRequest;
use App\Http\Requests\PDS\UpdatePDSRequest;
use App\Models\Address\PermanentAddress;
use App\Models\Address\ResidentialAddress;
use App\Models\EducationalBackground\EducationalBackground;
use App\Models\FamilyBackground\FamilyBackground;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class PersonalInformartionController extends Controller
{
    public function index()
    {
        $pds = PersonalInformation::select('id', 'first_name', 'middle_name', 'surname')->get();
        return view('pds.index', compact('pds'));
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            $pds = PersonalInformation::select('id', 'first_name', 'surname', 'sex', 'email', 'created_at');
            return DataTables::of($pds)
                ->addColumn('action', 'pds.table-buttons')
                ->editColumn('created_at', function ($pd) {
                    return $pd->created_at->format('F jS \of Y');
                })
                ->editColumn('sex', function ($pd) {
                    return ucwords($pd->sex);
                })
                ->toJson();
        }
    }

    public function create()
    {
        return view('pds.create');
    }

    public function store(StorePDSRequest $request)
    {

        $data = $request->validated();

        $pds = new PersonalInformation();
        $pds->first_name = $data['first_name'];
        $pds->middle_name = $data['middle_name'];
        $pds->surname = $data['surname'];
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


        $familyBackground = new FamilyBackground();
        $familyBackground->personal_information_id = $pds->id;
        $familyBackground->save();

        Alert::toast('PDS Successfully Added', 'success')->autoClose(2000)->timerProgressBar(true);
        return redirect()->route('pds.index');
    }

    public function show(string $id)
    {
        $pds = PersonalInformation::findOrFail($id);

        $familyBackground = FamilyBackground::findOrFail($pds->id);
        $children = $familyBackground->children;
        // dd($children);

        return view('pds.show', compact('pds', 'children'));
    }

    public function update(UpdatePDSRequest $request, PersonalInformation $pd)
    {
        $data = $request->validated();

        //Update Personal Information
        $pd->first_name = $data['first_name'];
        $pd->middle_name = $data['middle_name'];
        $pd->surname = $data['surname'];
        $pd->suffix = $data['suffix'];
        $pd->date_of_birth = $data['date_of_birth'];
        $pd->place_of_birth = $data['place_of_birth'];
        $pd->sex = $data['sex'];
        $pd->civil_status = $data['civil_status'];
        $pd->height = $data['height'];
        $pd->weight = $data['weight'];
        $pd->blood_type = $data['blood_type'];
        $pd->gsis_id = $data['gsis_id'];
        $pd->pag_ibig_id = $data['pag_ibig_id'];
        $pd->philhealth_id = $data['philhealth_id'];
        $pd->sss_id = $data['sss_id'];
        $pd->tin_id = $data['tin_id'];
        $pd->agency_employee_no = $data['agency_employee_no'];
        $pd->citizenship = $data['citizenship'];
        $pd->country = $data['country'];
        $pd->telephone_no = $data['telephone_no'];
        $pd->mobile_no = $data['mobile_no'];
        $pd->email = $data['email'];
        $pd->update();

        //Update Personal Residential Address
        $residentialAddress = $pd->residentialAddress;
        $residentialAddress->fill([
            'province' => $data['residential_province'],
            'city' => $data['residential_city'],
            'barangay' => $data['residential_barangay'],
            'street' => $data['residential_street'],
            'house_no' => $data['residential_house_no'],
            'subdivision' => $data['residential_subdivision'],
            'zipcode' => $data['residential_zipcode'],
        ]);
        $residentialAddress->update();

        //Update Personal Permanent Address
        $permanentAddress = $pd->permanentAddress;
        $permanentAddress->fill([
            'province' => $data['permanent_province'],
            'city' => $data['permanent_city'],
            'barangay' => $data['permanent_barangay'],
            'street' => $data['permanent_street'],
            'house_no' => $data['permanent_house_no'],
            'subdivision' => $data['permanent_subdivision'],
            'zipcode' => $data['permanent_zipcode'],
        ]);
        $permanentAddress->update();


        Alert::toast('PDS Successfully Updated', 'success')->autoClose(2000)->timerProgressBar(true);
        return back();
    }

    public function destroy(Request $request, PersonalInformation $pd)
    {

        if ($request->ajax()) {
            $pd->delete();
            return response()->json([
                'success' => true,
                'message' => 'PDS Successfully deleted'
            ], Response::HTTP_OK);
        }
    }
}

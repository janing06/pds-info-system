<x-app-layout>

    <x-heading>
        <x-slot:title>
            {{-- Add PDS --}}
        </x-slot:title>
    </x-heading>

    <div class="row mb-4">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h4 mb-4">Personal Data Sheet</h2>


                <div class="row">
                    <div class="nav-wrapper position-relative">
                        <ul class="nav nav-tabs nav-fill flex-column flex-sm-row">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" data-bs-toggle="tab"
                                    href="#personal_information"><i class="bi bi-person-circle me-2"></i> Personal
                                    Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#family_background"><i
                                        class="bi bi-person-bounding-box me-2"></i> Family Background</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#settings">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content p-3">
                        <div id="personal_information" class="tab-pane fade show active">
                            <h3 class="text-center">Profile Information</h3>
                            <p class="text-center">Here you can view and edit your profile.</p>
                            <form class="mt-5" method="POST" action="{{ route('pds.update', $pds) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="first_name">First Name
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="first_name" name="first_name"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                placeholder="First Name"
                                                value="{{ old('first_name', $pds->first_name) }}">
                                            @error('first_name')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="middle_name">Middle Name
                                            </label>
                                            <input type="text" id="middle_name" name="middle_name"
                                                class="form-control @error('middle_name') is-invalid @enderror"
                                                placeholder="Middle Name"
                                                value="{{ old('middle_name', $pds->middle_name) }}">
                                            @error('middle_name')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="surname">Surname
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="surname" name="surname"
                                                class="form-control @error('surname') is-invalid @enderror"
                                                placeholder="Surname" value="{{ old('surname', $pds->surname) }}">
                                            @error('surname')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="suffix">Suffix
                                                <x-asterisks />
                                            </label>
                                            <select name="suffix" id="suffix"
                                                class="form-select @error('suffix') is-invalid @enderror">
                                                <option value="N/A" {{ $pds->suffix == 'N/A' ? 'selected' : '' }}>
                                                    N/A</option>
                                                <option value="JR" {{ $pds->suffix == 'JR' ? 'selected' : '' }}>JR
                                                </option>
                                                <option value="SR" {{ $pds->suffix == 'SR' ? 'selected' : '' }}>SR
                                                </option>
                                                <option value="II" {{ $pds->suffix == 'II' ? 'selected' : '' }}>II
                                                </option>
                                                <option value="III" {{ $pds->suffix == 'III' ? 'selected' : '' }}>
                                                    III</option>
                                                <option value="IV" {{ $pds->suffix == 'IV' ? 'selected' : '' }}>IV
                                                </option>
                                            </select>
                                            @error('suffix')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="date_of_birth">Birth Date
                                                <x-asterisks />
                                            </label>
                                            <input type="date" id="date_of_birth" name="date_of_birth"
                                                class="form-control @error('date_of_birth') is-invalid @enderror"
                                                value="{{ old('date_of_birth', date('Y-m-d', strtotime($pds->date_of_birth))) }}">
                                            @error('date_of_birth')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="place_of_birth">Place of birth
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="place_of_birth" name="place_of_birth"
                                                class="form-control @error('place_of_birth') is-invalid @enderror"
                                                value="{{ old('place_of_birth', $pds->place_of_birth) }}"
                                                placeholder="Place of birth">
                                            @error('place_of_birth')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="sex">Sex
                                                <x-asterisks />
                                            </label>
                                            <select name="sex" id="sex"
                                                class="form-select @error('sex') is-invalid @enderror">
                                                <option value="">Select Option</option>
                                                <option value="male" {{ $pds->sex == 'male' ? 'selected' : '' }}>
                                                    Male</option>
                                                <option value="female" {{ $pds->sex == 'female' ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                            </select>
                                            @error('sex')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="civil_status">Civil Status
                                                <x-asterisks />
                                            </label>
                                            <select name="civil_status" id="civil_status"
                                                class="form-select @error('civil_status') is-invalid @enderror">
                                                <option value="">Select Option</option>
                                                <option value="single"
                                                    {{ $pds->civil_status == 'single' ? 'selected' : '' }}>
                                                    Single</option>
                                                <option value="married"
                                                    {{ $pds->civil_status == 'married' ? 'selected' : '' }}>
                                                    Married</option>
                                                <option value="widowed"
                                                    {{ $pds->civil_status == 'widowed' ? 'selected' : '' }}>
                                                    Widowed</option>
                                                <option value="separated"
                                                    {{ $pds->civil_status == 'separated' ? 'selected' : '' }}>Separated
                                                </option>
                                            </select>
                                            @error('civil_status')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="height">Height(m)
                                                <x-asterisks />
                                            </label>
                                            <input type="number" id="height" name="height"
                                                class="form-control @error('height') is-invalid @enderror"
                                                value="{{ old('height', $pds->height) }}"
                                                placeholder="Height in meters" step="0.01">
                                            @error('height')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="weight">Weight(kg)
                                                <x-asterisks />
                                            </label>
                                            <input type="number" id="weight" name="weight"
                                                class="form-control @error('weight') is-invalid @enderror"
                                                value="{{ old('weight', $pds->weight) }}"
                                                placeholder="Weight in meters" step="0.01">
                                            @error('weight')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="blood_type">Blood Type
                                            </label>
                                            <input type="text" id="blood_type" name="blood_type"
                                                class="form-control @error('blood_type') is-invalid @enderror"
                                                value="{{ old('blood_type', $pds->blood_type) }}"
                                                placeholder="Blood Type">
                                            @error('blood_type')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="citizenship">Citizenship
                                                <x-asterisks />
                                            </label>
                                            <select name="citizenship" id="citizenship"
                                                class="form-select @error('citizenship') is-invalid @enderror">
                                                <option value="">Select Option</option>
                                                <option value="filipino"
                                                    {{ $pds->citizenship == 'filipino' ? 'selected' : '' }}>
                                                    Filipino</option>
                                                <option value="dual_citizen_by_birth"
                                                    {{ $pds->citizenship == 'dual_citizen_by_birth' ? 'selected' : '' }}>
                                                    Dual
                                                    Citizen by birth</option>
                                                <option value="dual_citizen_by_naturalization"
                                                    {{ $pds->citizenship == 'dual_citizen_by_naturalization' ? 'selected' : '' }}>
                                                    Dual Citizen by naturalization
                                                </option>
                                            </select>
                                            @error('citizenship')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="country">Country
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="country" name="country"
                                                class="form-control @error('country') is-invalid @enderror"
                                                value="{{ old('country', $pds->country) }}" placeholder="Country">
                                            @error('country')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="telephone_no">Telephone Number
                                            </label>
                                            <input type="number" id="telephone_no" name="telephone_no"
                                                class="form-control @error('telephone_no') is-invalid @enderror"
                                                value="{{ old('telephone_no', $pds->telephone_no) }}"
                                                placeholder="Telephone no">
                                            @error('country')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="country">Mobile Number
                                                <x-asterisks />
                                            </label>
                                            <input type="number" id="mobile_no" name="mobile_no"
                                                class="form-control @error('mobile_no') is-invalid @enderror"
                                                value="{{ old('mobile_no', $pds->mobile_no) }}"
                                                placeholder="Mobile No">
                                            @error('mobile_no')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="country">Email Address
                                                <x-asterisks />
                                            </label>
                                            <input type="email" id="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', $pds->email) }}" placeholder="Email Address">
                                            @error('email')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-5">
                                    <div class="col-lg-5">
                                        <h3 class="h5 py-3">Residential Address</h3>
                                        <div class="form-group mb-3">
                                            <label for="residential_province">Province
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_province"
                                                name="residential_province"
                                                class="form-control @error('residential_province') is-invalid @enderror"
                                                value="{{ old('residential_province', $pds->residentialAddress->province) }}"
                                                placeholder="Province">
                                            @error('residential_province')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_city">City
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_city" name="residential_city"
                                                class="form-control @error('residential_city') is-invalid @enderror"
                                                value="{{ old('residential_city', $pds->residentialAddress->city) }}"
                                                placeholder="City">
                                            @error('residential_city')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_barangay">Barangay
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_barangay"
                                                name="residential_barangay"
                                                class="form-control @error('residential_barangay') is-invalid @enderror"
                                                value="{{ old('residential_barangay', $pds->residentialAddress->barangay) }}"
                                                placeholder="Barangay">
                                            @error('residential_barangay')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_street">Street
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_street" name="residential_street"
                                                class="form-control @error('residential_street') is-invalid @enderror"
                                                value="{{ old('residential_street', $pds->residentialAddress->street) }}"
                                                placeholder="Street">
                                            @error('residential_street')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_house_no">House no.
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_house_no"
                                                name="residential_house_no"
                                                class="form-control @error('residential_house_no') is-invalid @enderror"
                                                value="{{ old('residential_house_no', $pds->residentialAddress->house_no) }}"
                                                placeholder="House no.">
                                            @error('residential_house_no')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_subdivision">Subdivision
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_subdivision"
                                                name="residential_subdivision"
                                                class="form-control @error('residential_subdivision') is-invalid @enderror"
                                                value="{{ old('residential_subdivision', $pds->residentialAddress->subdivision) }}"
                                                placeholder="Subdivision">
                                            @error('residential_subdivision')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="residential_zipcode">Zipcode
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="residential_zipcode" name="residential_zipcode"
                                                class="form-control @error('residential_zipcode') is-invalid @enderror"
                                                value="{{ old('residential_zipcode', $pds->residentialAddress->zipcode) }}"
                                                placeholder="Zipcode">
                                            @error('residential_zipcode')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <h3 class="h5 py-3">Permanent Address</h3>
                                        <div class="form-group mb-3">
                                            <label for="permanent_province">Province
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_province" name="permanent_province"
                                                class="form-control @error('permanent_province') is-invalid @enderror"
                                                value="{{ old('permanent_province', $pds->permanentAddress->province) }}"
                                                placeholder="Province">
                                            @error('permanent_province')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_city">City
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_city" name="permanent_city"
                                                class="form-control @error('permanent_city') is-invalid @enderror"
                                                value="{{ old('permanent_city', $pds->permanentAddress->city) }}"
                                                placeholder="City">
                                            @error('permanent_city')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_barangay">Barangay
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_barangay" name="permanent_barangay"
                                                class="form-control @error('permanent_barangay') is-invalid @enderror"
                                                value="{{ old('permanent_barangay', $pds->permanentAddress->barangay) }}"
                                                placeholder="Barangay">
                                            @error('permanent_barangay')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_street">Street
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_street" name="permanent_street"
                                                class="form-control @error('permanent_street') is-invalid @enderror"
                                                value="{{ old('permanent_street', $pds->permanentAddress->street) }}"
                                                placeholder="Street">
                                            @error('permanent_street')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_house_no">House no.
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_house_no" name="permanent_house_no"
                                                class="form-control @error('permanent_house_no') is-invalid @enderror"
                                                value="{{ old('permanent_house_no', $pds->permanentAddress->house_no) }}"
                                                placeholder="House no.">
                                            @error('permanent_house_no')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_subdivision">Subdivision
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_subdivision"
                                                name="permanent_subdivision"
                                                class="form-control @error('permanent_subdivision') is-invalid @enderror"
                                                value="{{ old('permanent_subdivision', $pds->permanentAddress->subdivision) }}"
                                                placeholder="Subdivision">
                                            @error('permanent_subdivision')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="permanent_zipcode">Zipcode
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="permanent_zipcode" name="permanent_zipcode"
                                                class="form-control @error('permanent_zipcode') is-invalid @enderror"
                                                value="{{ old('permanent_zipcode', $pds->permanentAddress->zipcode) }}"
                                                placeholder="Zipcode">
                                            @error('permanent_zipcode')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="gsis_id">GSIS ID Number
                                                <x-asterisks />
                                            </label>
                                            <input type="text" id="gsis_id" name="gsis_id"
                                                class="form-control @error('gsis_no') is-invalid @enderror"
                                                value="{{ old('gsis_id', $pds->gsis_id) }}" placeholder="GSIS No">
                                            @error('gsis_id')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="pag_ibig_id">Pag-ibig ID Number
                                            </label>
                                            <input type="text" id="pag_ibig_id" name="pag_ibig_id"
                                                class="form-control @error('pag_ibig_id') is-invalid @enderror"
                                                value="{{ old('pag_ibig_id', $pds->pag_ibig_id) }}"
                                                placeholder="Pag-ibig No">
                                            @error('pag_ibig_id')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="philhealth_id">PhilHealth ID Number
                                            </label>
                                            <input type="text" id="philhealth_id" name="philhealth_id"
                                                class="form-control @error('philhealth_id') is-invalid @enderror"
                                                value="{{ old('philhealth_id', $pds->philhealth_id) }}"
                                                placeholder="PhilHealth No">
                                            @error('philhealth_id')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="sss_id">SSS ID Number
                                            </label>
                                            <input type="text" id="sss_id" name="sss_id"
                                                class="form-control @error('sss_id') is-invalid @enderror"
                                                value="{{ old('sss_id', $pds->sss_id) }}" placeholder="SSS No">
                                            @error('sss_id')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="tin_id">Tin ID Number
                                            </label>
                                            <input type="text" id="tin_id" name="tin_id"
                                                class="form-control @error('tin_id') is-invalid @enderror"
                                                value="{{ old('tin_id', $pds->tin_id) }}" placeholder="Tin No">
                                            @error('tin_id')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="agency_employee_no">Agency Employee Number
                                            </label>
                                            <input type="text" id="agency_employee_no" name="agency_employee_no"
                                                class="form-control @error('agency_employee_no') is-invalid @enderror"
                                                value="{{ old('agency_employee_no', $pds->agency_employee_no) }}"
                                                placeholder="Agency Employee No">
                                            @error('agency_employee_no')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                            class="me-2 bi bi-save"></i> Update</button>
                                    <a href="{{ route('pds.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                            class="me-2 bi bi-back"></i>
                                        Back</a>
                                </div>

                            </form>
                        </div>
                        <div id="family_background" class="tab-pane fade">
                            <h3 class="text-center">Family Background</h3>
                            <p class="text-center">Here you can view and edit your profile.</p>
                            <form class="mt-5" method="POST"
                                action="{{ route('pds.updateFamilyBackground', $pds) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <h4 class="mb-4">Spouse</h4>
                                    <div class="col-md-3">
                                        <label for="spouse_first_name">Spouse First Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_first_name" name="spouse_first_name"
                                            class="form-control @error('spouse_first_name') is-invalid @enderror"
                                            placeholder="Spouse First Name"
                                            value="{{ old('spouse_first_name', $pds->familyBackground->spouse_first_name) }}">
                                        @error('spouse_first_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="spouse_middle_name">Spouse Middle Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_middle_name" name="spouse_middle_name"
                                            class="form-control @error('spouse_middle_name') is-invalid @enderror"
                                            placeholder="Spouse Middle Name"
                                            value="{{ old('spouse_middle_name', $pds->familyBackground->spouse_middle_name) }}">
                                        @error('spouse_middle_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="spouse_surname">Spouse Last Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_surname" name="spouse_surname"
                                            class="form-control @error('spouse_surname') is-invalid @enderror"
                                            placeholder="Spouse Last Name"
                                            value="{{ old('spouse_surname', $pds->familyBackground->spouse_surname) }}">
                                        @error('spouse_surname')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="suffix">Spouse Suffix
                                                <x-asterisks />
                                            </label>
                                            <select name="spouse_suffix" id="spouse_suffix"
                                                class="form-select @error('spouse_suffix') is-invalid @enderror">
                                                <option value="N/A"
                                                    {{ $pds->familyBackground->spouse_suffix == 'N/A' ? 'selected' : '' }}>
                                                    N/A</option>
                                                <option value="JR"
                                                    {{ $pds->familyBackground->spouse_suffix == 'JR' ? 'selected' : '' }}>
                                                    JR
                                                </option>
                                                <option value="SR"
                                                    {{ $pds->familyBackground->spouse_suffix == 'SR' ? 'selected' : '' }}>
                                                    SR
                                                </option>
                                                <option value="II"
                                                    {{ $pds->familyBackground->spouse_suffix == 'II' ? 'selected' : '' }}>
                                                    II
                                                </option>
                                                <option value="III"
                                                    {{ $pds->familyBackground->spouse_suffix == 'III' ? 'selected' : '' }}>
                                                    III</option>
                                                <option value="IV"
                                                    {{ $pds->familyBackground->spouse_suffix == 'IV' ? 'selected' : '' }}>
                                                    IV
                                                </option>
                                            </select>
                                            @error('spouse_suffix')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="spouse_occupation">Spouse Occupation
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_occupation" name="spouse_occupation"
                                            class="form-control @error('spouse_occupation') is-invalid @enderror"
                                            placeholder="Spouse Occupation"
                                            value="{{ old('spouse_occupation', $pds->familyBackground->spouse_occupation) }}">
                                        @error('spouse_occupation')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="spouse_employeer">Spouse Employeer
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_employeer" name="spouse_employeer"
                                            class="form-control @error('spouse_employeer') is-invalid @enderror"
                                            placeholder="Spouse Employeer"
                                            value="{{ old('spouse_employeer', $pds->familyBackground->spouse_employeer) }}">
                                        @error('spouse_employeer')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="spouse_business_name">Spouse Business Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_business_name" name="spouse_business_name"
                                            class="form-control @error('spouse_business_name') is-invalid @enderror"
                                            placeholder="Spouse Business Name"
                                            value="{{ old('spouse_business_name', $pds->familyBackground->spouse_business_name) }}">
                                        @error('spouse_business_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="spouse_business_address">Spouse Business Address
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_business_address"
                                            name="spouse_business_address"
                                            class="form-control @error('spouse_business_address') is-invalid @enderror"
                                            placeholder="Spouse Business Address"
                                            value="{{ old('spouse_business_address', $pds->familyBackground->spouse_business_address) }}">
                                        @error('spouse_business_address')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        <label for="spouse_telephone_no">Spouse Telephone No
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="spouse_telephone_no" name="spouse_telephone_no"
                                            class="form-control @error('spouse_telephone_no') is-invalid @enderror"
                                            placeholder="Spouse Telephone No"
                                            value="{{ old('spouse_telephone_no', $pds->familyBackground->spouse_telephone_no) }}">
                                        @error('spouse_telephone_no')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <h4 class="mb-4">Father</h4>

                                    <div class="col-md-3">
                                        <label for="father_first_name">Father First Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="father_first_name" name="father_first_name"
                                            class="form-control @error('father_first_name') is-invalid @enderror"
                                            placeholder="Father First Name"
                                            value="{{ old('father_first_name', $pds->familyBackground->father_first_name) }}">
                                        @error('father_first_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="father_middle_name">Father Middle Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="father_middle_name" name="father_middle_name"
                                            class="form-control @error('father_middle_name') is-invalid @enderror"
                                            placeholder="Father Middle Name"
                                            value="{{ old('father_middle_name', $pds->familyBackground->father_middle_name) }}">
                                        @error('father_middle_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="father_surname">Father Surname
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="father_surname" name="father_surname"
                                            class="form-control @error('father_surname') is-invalid @enderror"
                                            placeholder="Father Surname"
                                            value="{{ old('father_surname', $pds->familyBackground->father_surname) }}">
                                        @error('father_surname')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="father_suffix">Father Suffix
                                                <x-asterisks />
                                            </label>
                                            <select name="father_suffix" id="father_suffix"
                                                class="form-select @error('father_suffix') is-invalid @enderror">
                                                <option value="N/A"
                                                    {{ $pds->familyBackground->father_suffix == 'N/A' ? 'selected' : '' }}>
                                                    N/A</option>
                                                <option value="JR"
                                                    {{ $pds->familyBackground->father_suffix == 'JR' ? 'selected' : '' }}>
                                                    JR
                                                </option>
                                                <option value="SR"
                                                    {{ $pds->familyBackground->father_suffix == 'SR' ? 'selected' : '' }}>
                                                    SR
                                                </option>
                                                <option value="II"
                                                    {{ $pds->familyBackground->father_suffix == 'II' ? 'selected' : '' }}>
                                                    II
                                                </option>
                                                <option value="III"
                                                    {{ $pds->familyBackground->father_suffix == 'III' ? 'selected' : '' }}>
                                                    III</option>
                                                <option value="IV"
                                                    {{ $pds->familyBackground->father_suffix == 'IV' ? 'selected' : '' }}>
                                                    IV
                                                </option>
                                            </select>
                                            @error('father_suffix')
                                                <x-input-error message="{{ $message }}" />
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <h4 class="mb-4">Mother</h4>
                                    <div class="col-md-3">
                                        <label for="mother_first_name">Mother First Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="mother_first_name" name="mother_first_name"
                                            class="form-control @error('mother_first_name') is-invalid @enderror"
                                            placeholder="Mother First Name"
                                            value="{{ old('mother_first_name', $pds->familyBackground->mother_first_name) }}">
                                        @error('mother_first_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="mother_middle_name">Mother Middle Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="mother_middle_name" name="mother_middle_name"
                                            class="form-control @error('mother_middle_name') is-invalid @enderror"
                                            placeholder="Mother Middle Name"
                                            value="{{ old('mother_middle_name', $pds->familyBackground->mother_middle_name) }}">
                                        @error('mother_middle_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="mother_surname">Mother Surname
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="mother_surname" name="mother_surname"
                                            class="form-control @error('mother_surname') is-invalid @enderror"
                                            placeholder="Mother Surname"
                                            value="{{ old('mother_surname', $pds->familyBackground->mother_surname) }}">
                                        @error('mother_surname')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="mother_maiden_name">Mother Maiden Name
                                            <x-asterisks />
                                        </label>
                                        <input type="text" id="mother_maiden_name" name="mother_maiden_name"
                                            class="form-control @error('mother_maiden_name') is-invalid @enderror"
                                            placeholder="Mother Maiden Name"
                                            value="{{ old('mother_maiden_name', $pds->familyBackground->mother_maiden_name) }}">
                                        @error('mother_maiden_name')
                                            <x-input-error message="{{ $message }}" />
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                            class="me-2 bi bi-save"></i> Update</button>
                                    <a href="{{ route('pds.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                            class="me-2 bi bi-back"></i>
                                        Back</a>
                                </div>

                            </form>


                            @livewire('children', ['familyBackgroundID' => $pds->familyBackground->id])

                        </div>
                        <div id="settings" class="text-center tab-pane fade">
                            <h3>Settings Content</h3>
                            <p>Adjust your account settings here.</p>
                        </div>
                        <div id="messages" class="text-center tab-pane fade">
                            <h3>Messages Content</h3>
                            <p>View and manage your messages in this section.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- 
    <script>
        document.getElementById('add_child_btn').addEventListener('click', function() {
            var childrenDiv = document.getElementById('children');
            var childCount = childrenDiv.querySelectorAll('.row.mb-3').length;
            console.log(childCount);

            var childDiv = document.createElement('div');
            childDiv.classList.add('row', 'mb-3');
            childDiv.innerHTML = `
                <div class="col-md-6">
                    <label for="children_name">Child's Name <x-asterisks /></label>
                    <input type="text" name="children[${childCount}][name]" class="form-control" placeholder="Child Name">
                </div>
                <div class="col-md-6">
                    <label for="children_date_of_birth">Child's Birth Date <x-asterisks /></label>
                    <input type="date" name="children[${childCount}][date_of_birth]" class="form-control" placeholder="Child's Birth Date">
                </div>`;
            childrenDiv.appendChild(childDiv);
        });
    </script> --}}

</x-app-layout>

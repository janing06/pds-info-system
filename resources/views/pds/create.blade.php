<x-app-layout>
    @section('title', '| PDS | Create')
    <x-heading>
        <x-slot:title>
            Add PDS
        </x-slot:title>
    </x-heading>

    <div class="row mb-4">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h4 mb-4">Personal Data Sheet</h2>

                <form method="POST" action="{{ route('pds.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('first_name') }}" required>
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
                                    placeholder="Middle Name" value="{{ old('middle_name') }}">
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
                                    class="form-control @error('surname') is-invalid @enderror" placeholder="Surname"
                                    value="{{ old('surname') }}" required>
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
                                    <option value="N/A" selected>N/A</option>
                                    <option value="JR">JR</option>
                                    <option value="SR">SR</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
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
                                    value="{{ old('date_of_birth') }}" required>
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
                                    value="{{ old('place_of_birth') }}" placeholder="Place of birth" required>
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
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
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
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
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
                                    value="{{ old('height') }}" placeholder="Height in meters" step="0.01"
                                    required>
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
                                    value="{{ old('weight') }}" placeholder="Weight in meters" step="0.01"
                                    required>
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
                                    value="{{ old('blood_type') }}" placeholder="Blood Type">
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
                                    <option value="filipino">Filipino</option>
                                    <option value="dual_citizen_by_birth">Dual Citizen by birth</option>
                                    <option value="dual_citizen_by_naturalization">Dual Citizen by naturalization
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
                                    value="{{ old('country') }}" placeholder="Country" required>
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
                                    value="{{ old('telephone_no') }}" placeholder="Telephone no">
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
                                    value="{{ old('mobile_no') }}" placeholder="Mobile No" required>
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
                                    value="{{ old('email') }}" placeholder="Email Address" required>
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
                                <input type="text" id="residential_province" name="residential_province"
                                    class="form-control @error('residential_province') is-invalid @enderror"
                                    value="{{ old('residential_province') }}" placeholder="Province">
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
                                    value="{{ old('residential_city') }}" placeholder="City" required>
                                @error('residential_city')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="residential_barangay">Barangay
                                    <x-asterisks />
                                </label>
                                <input type="text" id="residential_barangay" name="residential_barangay"
                                    class="form-control @error('residential_barangay') is-invalid @enderror"
                                    value="{{ old('residential_barangay') }}" placeholder="Barangay" required>
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
                                    value="{{ old('residential_street') }}" placeholder="Street" required>
                                @error('residential_street')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="residential_house_no">House no.
                                    <x-asterisks />
                                </label>
                                <input type="text" id="residential_house_no" name="residential_house_no"
                                    class="form-control @error('residential_house_no') is-invalid @enderror"
                                    value="{{ old('residential_house_no') }}" placeholder="House no." required>
                                @error('residential_house_no')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="residential_subdivision">Subdivision
                                    <x-asterisks />
                                </label>
                                <input type="text" id="residential_subdivision" name="residential_subdivision"
                                    class="form-control @error('residential_subdivision') is-invalid @enderror"
                                    value="{{ old('residential_subdivision') }}" placeholder="Subdivision" required>
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
                                    value="{{ old('residential_zipcode') }}" placeholder="Zipcode" required>
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
                                    value="{{ old('permanent_province') }}" placeholder="Province" required>
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
                                    value="{{ old('permanent_city') }}" placeholder="City" required>
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
                                    value="{{ old('permanent_barangay') }}" placeholder="Barangay" required>
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
                                    value="{{ old('permanent_street') }}" placeholder="Street" required>
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
                                    value="{{ old('permanent_house_no') }}" placeholder="House no." required>
                                @error('permanent_house_no')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="permanent_subdivision">Subdivision
                                    <x-asterisks />
                                </label>
                                <input type="text" id="permanent_subdivision" name="permanent_subdivision"
                                    class="form-control @error('permanent_subdivision') is-invalid @enderror"
                                    value="{{ old('permanent_subdivision') }}" placeholder="Subdivision" required>
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
                                    value="{{ old('permanent_zipcode') }}" placeholder="Zipcode" required>
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
                                    value="{{ old('gsis_id') }}" placeholder="GSIS No">
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
                                    value="{{ old('pag_ibig_id') }}" placeholder="Pag-ibig No">
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
                                    value="{{ old('philhealth_id') }}" placeholder="PhilHealth No">
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
                                    value="{{ old('sss_id') }}" placeholder="SSS No">
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
                                    value="{{ old('tin_id') }}" placeholder="Tin No">
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
                                    value="{{ old('agency_employee_no') }}" placeholder="Agency Employee No">
                                @error('agency_employee_no')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                class="me-2 bi bi-save"></i> Save</button>
                        <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                class="me-2 bi bi-back"></i> Back</a>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>

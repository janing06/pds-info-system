<div id="family_background" class="tab-pane fade">
    <h3 class="text-center">Family Background</h3>
    <p class="text-center">Here you can view and edit family background.</p>
    <form class="mt-5" method="POST" action="{{ route('pds.updateFamilyBackground', $pds) }}">
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
                    class="form-control @error('spouse_surname') is-invalid @enderror" placeholder="Spouse Last Name"
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
                        <option value="N/A" {{ $pds->familyBackground->spouse_suffix == 'N/A' ? 'selected' : '' }}>
                            N/A</option>
                        <option value="JR" {{ $pds->familyBackground->spouse_suffix == 'JR' ? 'selected' : '' }}>
                            JR
                        </option>
                        <option value="SR" {{ $pds->familyBackground->spouse_suffix == 'SR' ? 'selected' : '' }}>
                            SR
                        </option>
                        <option value="II" {{ $pds->familyBackground->spouse_suffix == 'II' ? 'selected' : '' }}>
                            II
                        </option>
                        <option value="III" {{ $pds->familyBackground->spouse_suffix == 'III' ? 'selected' : '' }}>
                            III</option>
                        <option value="IV" {{ $pds->familyBackground->spouse_suffix == 'IV' ? 'selected' : '' }}>
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
                    class="form-control @error('spouse_employeer') is-invalid @enderror" placeholder="Spouse Employeer"
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
                <input type="text" id="spouse_business_address" name="spouse_business_address"
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
                    class="form-control @error('father_surname') is-invalid @enderror" placeholder="Father Surname"
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
                        <option value="N/A" {{ $pds->familyBackground->father_suffix == 'N/A' ? 'selected' : '' }}>
                            N/A</option>
                        <option value="JR" {{ $pds->familyBackground->father_suffix == 'JR' ? 'selected' : '' }}>
                            JR
                        </option>
                        <option value="SR" {{ $pds->familyBackground->father_suffix == 'SR' ? 'selected' : '' }}>
                            SR
                        </option>
                        <option value="II" {{ $pds->familyBackground->father_suffix == 'II' ? 'selected' : '' }}>
                            II
                        </option>
                        <option value="III" {{ $pds->familyBackground->father_suffix == 'III' ? 'selected' : '' }}>
                            III</option>
                        <option value="IV" {{ $pds->familyBackground->father_suffix == 'IV' ? 'selected' : '' }}>
                            IV
                        </option>
                    </select>
                    @error('father_suffix')
                        <x-input-error message="{{ $message }}" />
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-4">
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
                    class="form-control @error('mother_surname') is-invalid @enderror" placeholder="Mother Surname"
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

        <div class="text-end">
            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i class="me-2 bi bi-save"></i>
                Update</button>
            <a href="{{ route('pds.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                    class="me-2 bi bi-back"></i>
                Back</a>
        </div>

    </form>

    <livewire:child.child-list :familyBackgroundId="$pds->familyBackground->id" />

</div>

<x-app-layout>
    @section('title', '| PDS | Update')
    <x-heading>
        <x-slot:title>
            Update Personal Data Sheet
        </x-slot:title>
    </x-heading>

    <div class="row mb-4">
        <div class="col-12 col-xl-12">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-2 mb-3">
                        <div class="nav-wrapper position-relative py-0 border-0">
                            <ul class="nav nav-tabs nav-fill flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link mb-sm-3 mb-md-0 active d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#personal_information"><i
                                            class="bi bi-person-circle ms-3 me-4 fs-5"></i>
                                        Personal
                                        Info</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#family_background"><i
                                            class="bi bi-person-bounding-box ms-3 me-4 fs-5"></i>
                                        Background</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#educational_background"><i
                                            class="bi bi-book-half ms-3 me-4 fs-5"></i>
                                        Education</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#civil_service_eligibility"><i
                                            class="bi bi-list-check ms-3 me-4 fs-5"></i>
                                        Eligibility</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-xxl-10">
                        <div class="card px-2 py-3">
                            <div class="tab-content p-3">
                                @include('pds.sections.personal-information')
                                @include('pds.sections.family-background')
                                @include('pds.sections.educational-background')
                                @include('pds.sections.civil-service-eligibility')
                            </div>
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

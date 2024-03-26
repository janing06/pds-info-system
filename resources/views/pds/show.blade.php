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
                            <ul class="nav nav-tabs nav-fill flex-column border-0">
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0 active d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#personal_information"><i
                                            class="bi bi-person-circle ms-3 me-4 fs-5"></i>
                                        Profile</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#family_background"><i
                                            class="bi bi-person-bounding-box ms-3 me-4 fs-5"></i>
                                        Background</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#educational_background"><i
                                            class="bi bi-book-half ms-3 me-4 fs-5"></i>
                                        Education</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#civil_service_eligibility"><i
                                            class="bi bi-list-check ms-3 me-4 fs-5"></i>
                                        Eligibility</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#work_experience"><i
                                            class="bi bi-briefcase-fill ms-3 me-4 fs-5"></i>
                                        Experience</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#voluntary_work">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-3 me-4 fs-5" width="20"
                                            height="20" fill="currentColor" class="bi bi-person-raised-hand"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                        </svg>
                                        Voluntary</a>
                                </li>
                                <li class="nav-item mb-2 shadow-sm">
                                    <a class="nav-link mb-sm-3 mb-md-0  d-flex align-items-center justify-content-start"
                                        data-bs-toggle="tab" href="#learning_and_development">
                                        <i class="bi bi-rocket-takeoff ms-3 me-4 fs-5"></i>
                                        L&D</a>
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
                                @include('pds.sections.work-experience')
                                @include('pds.sections.voluntary-work')
                                @include('pds.sections.learning-and-development')
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

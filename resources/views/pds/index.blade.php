<x-app-layout>

    <x-heading>
        <x-slot:title>
            PDS
        </x-slot:title>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('pds.create') }}"
                class="btn btn-sm btn-gray-800 d-inline-flex align-items-center animate-up-2">
                <i class="icon icon-xs me-2 bi bi-plus-lg"></i>
                Add PDS
            </a>
        </div>
    </x-heading>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-9 col-lg-8 d-md-flex">
                <div class="input-group me-2 me-lg-3 fmxw-300">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input id="custom-search-field" type="text" class="form-control" placeholder="Search pds..">
                </div>
            </div>
            <div class="col-3 col-lg-4 d-flex justify-content-end">
                <x-table-page-length></x-table-page-length>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="table-responsive">
                <x-table id="pds-table" class="text-center align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th class="rounded-start">ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th class="rounded-end" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pds as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->middle_name }}</td>
                                <td>{{ $data->last_name }}</td>
                                <td><a href="{{ route('pds.show', $data->id) }}" class="btn btn-primary">Show</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </x-table>
            </div>
        </div>
    </div>
    <div class="card mb-5 p-3">
        <div class="nav-wrapper position-relative">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row">
                <li class="nav-item me-sm-2">
                    <a class="nav-link mb-3 mb-md-0 d-flex align-items-center justify-content-center active"
                        data-bs-toggle="tab" href="#home">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                            </path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item me-sm-2">
                    <a class="nav-link mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                        data-bs-toggle="tab" href="#profile">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Profile
                    </a>
                </li>
                <li class="nav-item me-sm-2">
                    <a class="nav-link mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                        data-bs-toggle="tab" href="#settings">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                        data-bs-toggle="tab" href="#messages">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Messages
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-wrapper position-relative">
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" data-bs-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#settings">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#messages">Messages</a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div id="home" class="text-center tab-pane fade show active">
                <h3>Home Content</h3>
                <p>Welcome to the Home section!</p>
            </div>
            <div id="profile" class="text-center tab-pane fade">
                <h3>Profile Content</h3>
                <p>Here you can view and edit your profile.</p>
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




    <x-modal modalId="user-modal" button-id="destroy-user" type="delete" label="user" />
    <x-modal modalId="activate-user-modal" button-id="activate-user" type="activate" label="user" />
    <x-modal modalId="deactivate-user-modal" button-id="deactivate-user" type="deactivate" label="user" />

    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/page/user/index.js') }}"></script>
    @endpush

</x-app-layout>

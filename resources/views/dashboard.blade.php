<x-app-layout>
    @section('title', '| Dashboard')
    <div class="row py-4 py-md-7 px-md-7">
        <div class="col-12 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 640 512">
                                    <path
                                        d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">Users</h2>
                                <h3 class="fw-extrabold mb-1">{{ $userTotal }}</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Users</h2>
                                <h3 class="fw-extrabold mb-2">{{ $userTotal }}</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                <a href="{{ route('users.index') }}"
                                    class="btn-sm btn icon-shape-success animate-up-2"><i
                                        class="bi bi-folder-symlink me-2"></i> View More</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    height="1em" viewBox="0 0 512 512">
                                    <path
                                        d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Clients</h2>
                                <h3 class="mb-1">0</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Clients</h2>
                                <h3 class="fw-extrabold mb-2">0</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                <a href="#" class="btn-sm btn icon-shape-primary animate-up-2"><i
                                        class="bi bi-folder-symlink me-2"></i> View More</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    height="1em" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5"> Waybills</h2>
                                <h3 class="mb-1">0</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0"> Waybills</h2>
                                <h3 class="fw-extrabold mb-2">0</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                <a href="0" class="btn-sm btn icon-shape-tertiary animate-up-2"><i
                                        class="bi bi-folder-symlink me-2"></i> View More</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    height="1em" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Exports/Imports</h2>
                                <h3 class="mb-1">0</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Exports/Imports</h2>
                                <h3 class="fw-extrabold mb-2">0</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                <a href="0" class="btn-sm btn icon-shape-secondary animate-up-2"><i
                                        class="bi bi-folder-symlink me-2"></i> View More</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

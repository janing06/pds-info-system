<!-- Livewire Component Blade File (livewire/children.blade.php) -->
<div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <h4>Children</h4>
                    <!-- Ensure that wire:click triggers the method to toggle the modal -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="me-2 bi bi-plus me-2"></i> Add Child</button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>birth date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($children as $child)
                                <tr>
                                    <td>{{ $child->child_name }}</td>
                                    <td>{{ $child->child_date_of_birth }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No child</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Child</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="mother_surname">Name
                                    <x-asterisks />
                                </label>
                                <input type="text" wire:model="child_name" id="child_name" name="child_name"
                                    class="form-control @error('child_name') is-invalid @enderror" placeholder="Name"
                                    value="">
                                @error('child_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="child_date_of_birth">Birth Date
                                    <x-asterisks />
                                </label>
                                <input type="date" wire:model="child_date_of_birth" id="child_date_of_birth"
                                    name="child_date_of_birth"
                                    class="form-control @error('child_date_of_birth') is-invalid @enderror"
                                    value="">
                                @error('child_date_of_birth')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="text-end">
                                <button type="submit" wire:click.prevent="createChild" class="btn btn-primary"><i
                                        class="me-2 bi bi-plus me-2"></i>
                                    Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

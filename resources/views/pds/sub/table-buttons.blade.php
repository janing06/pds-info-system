<x-three-dots-dropdown>
    <a class="dropdown-item rounded-top"><span class="bi bi-pencil-fill text-success me-2"
            wire:click="show({{ $child->id }})"></span>Edit</a>
    {{-- @if ($status === 'active')
        <button class="deactivate-user dropdown-item" data-id="{{ $id }}"><span
                class="bi bi-person-fill-x text-warning me-2"></span>Deactivate</button>
    @else
        <button class="activate-user dropdown-item" data-id="{{ $id }}"><span
                class="bi bi-person-fill-check text-info me-2"></span>Activate</button>
    @endif --}}
    <button class="delete-child dropdown-item rounded-bottom" wire:click="deleteModal({{ $child->id }})"><span
            class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
</x-three-dots-dropdown>

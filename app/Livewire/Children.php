<?php

namespace App\Livewire;

use App\Models\FamilyBackground\Child;
use App\Models\FamilyBackground\FamilyBackground;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Children extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $familyBackgroundID;

    #[Rule('required|string')]
    public $child_name;

    #[Rule('required|date')]
    public $child_date_of_birth;


    public function render()
    {

        $familyBackground = FamilyBackground::find($this->familyBackgroundID);

        // dd($familyBackground);
        $children = $familyBackground->children()->paginate(5);

        return view('livewire.children', compact('children'));
    }

    public function open()
    {
        $this->dispatch('open-form-modal');
    }

    public function cancel()
    {
        $this->reset('child_name', 'child_date_of_birth');
        $this->dispatch('close-form-modal');
    }

    public function createChild()
    {
        $validatedData = $this->validate([
            'child_name' => 'required',
            'child_date_of_birth' => 'required|date',
        ]);

        $familyBackground = FamilyBackground::find($this->familyBackgroundID);

        $child = new Child();
        $child->family_background_id = $familyBackground->id;
        $child->child_name = $validatedData['child_name'];
        $child->child_date_of_birth = $validatedData['child_date_of_birth'];
        $child->save();

        $this->reset('child_name', 'child_date_of_birth');
        $this->dispatch('alert', type: 'success', message: 'Child has been saved successfully.', title: 'Child');
        $this->dispatch('close-form-modal');
    }

    public function show(Child $child)
    {
        $this->dispatch('show-form-modal');
    }


    public $child_id_to_delete;

    public function deleteModal(string $id)
    {
        $this->child_id_to_delete = $id;
        $this->dispatch('show-delete-modal');
    }

    public function delete(Child $child)
    {
        $child->delete();
        $this->dispatch('alert', type: 'success', message: 'Child has been saved deleted.', title: 'Child');
        $this->dispatch('close-delete-modal');
    }
}

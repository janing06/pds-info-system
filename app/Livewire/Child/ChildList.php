<?php

namespace App\Livewire\Child;

use App\Models\FamilyBackground\Child;
use App\Models\FamilyBackground\FamilyBackground;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ChildList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $familyBackgroundId;

    #[Rule('required|string')]
    public $child_name;

    #[Rule('required|date')]
    public $child_date_of_birth;

    public $child;

    public function render()
    {
        $familyBackground = FamilyBackground::find($this->familyBackgroundId);

        $children = $familyBackground->children()->orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.child.child-list', compact('children'));
    }

    public function openChildForm()
    {
        $this->resetValidation();
        $this->dispatch('open-child-form-modal');
        $this->reset(['child', 'child_name', 'child_date_of_birth']);
    }

    public function createNewChild()
    {
        $data = $this->validate();
        $child = new Child();
        $child->family_background_id = $this->familyBackgroundId;
        $child->child_name = $data['child_name'];
        $child->child_date_of_birth = $data['child_date_of_birth'];
        $child->save();

        $this->dispatch('alert', type: 'success', message: 'Child has been saved.', title: 'Child');
        $this->dispatch('close-child-form-modal');
        $this->reset(['child', 'child_name', 'child_date_of_birth']);
    }

    public function showChild(Child $child)
    {
        $this->resetValidation();
        $this->child = $child;
        $this->dispatch('open-child-form-modal');
        $this->child_name = $child->child_name;
        $this->child_date_of_birth = date('Y-m-d', strtotime($child->date_of_birth));
    }

    public function updateChild()
    {
        $this->child->child_name = $this->child_name;
        $this->child->child_date_of_birth = $this->child_date_of_birth;
        $this->child->update();

        $this->dispatch('alert', type: 'success', message: 'Child has been updated.', title: 'Child');
        $this->dispatch('close-child-form-modal');
        $this->reset(['child', 'child_name', 'child_date_of_birth']);
    }

    public function openDeleteChildModal(Child $child)
    {
        $this->child = $child;
        $this->dispatch('open-child-delete-modal');
    }

    public function destroyChild()
    {
        $this->child->delete();
        $this->dispatch('alert', type: 'success', message: 'Child has been deleted.', title: 'Child');
        $this->dispatch('close-child-delete-modal');
        $this->reset(['child', 'child_name', 'child_date_of_birth']);
    }
}

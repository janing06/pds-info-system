<?php

namespace App\Livewire;

use App\Models\FamilyBackground\Child;
use App\Models\FamilyBackground\FamilyBackground;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Children extends Component
{
    public $familyBackgroundID;

    #[Rule('required|string')]
    public $child_name;

    #[Rule('required|date')]
    public $child_date_of_birth;

    public function render()
    {

        $familyBackground = FamilyBackground::find($this->familyBackgroundID);

        // dd($familyBackground);
        $children = $familyBackground->children;

        return view('livewire.children', compact('children'));
    }

    public function createChild()
    {

        // dd($this->child_name);
        $this->validate();
        $familyBackground = FamilyBackground::find($this->familyBackgroundID);

        $child = new Child();
        $child->family_background_id = $familyBackground->id;
        $child->child_name = $this->child_name;
        $child->child_date_of_birth = $this->child_date_of_birth;
        $child->save();

        $this->reset('child_name', 'child_date_of_birth');
    }
}

<?php

namespace App\Livewire\VoluntaryWork;

use App\Models\PersonalInformation;
use App\Models\VoluntaryWork\VoluntaryWork;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class VoluntaryWorkList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $organization_name;

    #[Rule('required|string')]
    public $organization_address;

    #[Rule('required|date')]
    public $start_date;

    #[Rule('required|date')]
    public $end_date;

    #[Rule('required|numeric')]
    public $number_of_hours;

    #[Rule('required|string')]
    public $position;

    public $voluntaryWork;

    #[Computed()]
    public function voluntaryWorks()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        return $personalInformation->voluntaryWork()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.voluntary-work.voluntary-work-list');
    }

    public function openForm()
    {
        $this->reset(['organization_name', 'organization_address', 'start_date', 'end_date', 'number_of_hours', 'position']);
        $this->resetValidation();
        $this->dispatch('open-voluntary-form-modal');
    }

    public function createNewVoluntaryWork()
    {
        $data = $this->validate();
        $voluntaryWork = new VoluntaryWork();
        $voluntaryWork->personal_information_id = $this->personalInformationId;
        $voluntaryWork->organization_name = $data['organization_name'];
        $voluntaryWork->organization_address = $data['organization_address'];
        $voluntaryWork->start_date = $data['start_date'];
        $voluntaryWork->end_date = $data['end_date'];
        $voluntaryWork->number_of_hours = $data['number_of_hours'];
        $voluntaryWork->position = $data['position'];
        $voluntaryWork->save();

        $this->dispatch('alert', type: 'success', message: 'Voluntary Work has been saved.', title: 'Voluntary Work');
        $this->dispatch('close-voluntary-form-modal');
    }

    public function showVoluntaryWork(VoluntaryWork $voluntaryWork)
    {
        $this->resetValidation();
        $this->voluntaryWork = $voluntaryWork;
        $this->organization_name = $voluntaryWork->organization_name;
        $this->organization_address = $voluntaryWork->organization_address;
        $this->start_date = $voluntaryWork->start_date;
        $this->end_date = $voluntaryWork->end_date;
        $this->number_of_hours = $voluntaryWork->number_of_hours;
        $this->position = $voluntaryWork->position;
        $this->dispatch('open-voluntary-form-modal');
    }

    public function updateVoluntaryWork()
    {
        $data = $this->validate();
        $this->voluntaryWork->update($data);
        $this->dispatch('alert', type: 'success', message: 'Voluntary Work has been updated.', title: 'Voluntary Work');
        $this->dispatch('close-voluntary-form-modal');
    }

    public function openDeleteModal(VoluntaryWork $voluntaryWork)
    {
        $this->voluntaryWork = $voluntaryWork;
        $this->dispatch('open-voluntary-delete-modal');
    }

    public function deleteVoluntaryWork()
    {
        $this->voluntaryWork->delete();
        $this->dispatch('alert', type: 'success', message: 'Voluntary Work has been deleted.', title: 'Voluntary Work');
        $this->dispatch('close-voluntary-delete-modal');
    }
}

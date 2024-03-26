<?php

namespace App\Livewire\Eligibility;

use App\Models\CivilServiceEligibility\CivilServiceEligibilty;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use PDO;

class EligibilityList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $career_service;

    #[Rule('required|numeric')]
    public $rating;

    #[Rule('required|date')]
    public $examination_date;

    #[Rule('required|string')]
    public $examination_place;

    #[Rule('required|string')]
    public $license_number;

    #[Rule('required|string')]
    public $license_validity_date;

    public $eligibility;

    public function render()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        $eligibilities = $personalInformation->civilServiceEligibility()->latest()->paginate(5);
        return view('livewire.eligibility.eligibility-list', compact('eligibilities'));
    }

    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date']);

        $this->dispatch('open-eligibility-form-modal');
    }

    public function createNewEligibility()
    {
        $data = $this->validate();

        $eligibility = new CivilServiceEligibilty();
        $eligibility->personal_information_id = $this->personalInformationId;
        $eligibility->career_service = $data['career_service'];
        $eligibility->rating = $data['rating'];
        $eligibility->examination_date = $data['examination_date'];
        $eligibility->examination_place = $data['examination_place'];
        $eligibility->license_number = $data['license_number'];
        $eligibility->license_validity_date = $data['license_validity_date'];
        $eligibility->save();

        $this->dispatch('close-eligibility-form-modal');
        $this->dispatch('alert', type: 'success', message: 'Eligibility has been saved.', title: 'Eligibility');
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date']);
    }

    public function showEligibility(CivilServiceEligibilty $eligibility)
    {
        $this->resetValidation();
        $this->eligibility = $eligibility;
        $this->career_service = $eligibility->career_service;
        $this->rating = $eligibility->rating;
        $this->examination_date = $eligibility->examination_date;
        $this->examination_place = $eligibility->examination_place;
        $this->license_number = $eligibility->license_number;
        $this->license_validity_date = $eligibility->license_validity_date;
        $this->dispatch('open-eligibility-form-modal');
    }

    public function updateEligibility()
    {
        $data = $this->validate();

        $this->eligibility->update($data);

        $this->dispatch('close-eligibility-form-modal');
        $this->dispatch('alert', type: 'success', message: 'Eligibility has been updated.', title: 'Eligibility');
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date']);
    }

    public function openDeleteModal(CivilServiceEligibilty $eligibility)
    {
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date']);

        $this->eligibility = $eligibility;

        $this->dispatch('open-eligibility-delete-modal');
    }

    public function deleteEligibility()
    {

        $this->eligibility->delete();
        $this->dispatch('alert', type: 'success', message: 'Eligibility has been deleted.', title: 'Eligibility');
        $this->dispatch('close-eligibility-delete-modal');
    }
}

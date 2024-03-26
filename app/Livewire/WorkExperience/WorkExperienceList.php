<?php

namespace App\Livewire\WorkExperience;

use App\Models\CivilServiceEligibility\CivilServiceEligibilty;
use App\Models\PersonalInformation;
use App\Models\WorkExperience\WorkExperience;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class WorkExperienceList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|date')]
    public $start_date;

    #[Rule('required|date')]
    public $end_date;

    #[Rule('required|string')]
    public $position_title;

    #[Rule('required|string')]
    public $company;

    #[Rule('required|numeric')]
    public $monthly_salary;

    #[Rule('required|numeric')]
    public $salary_grade;

    #[Rule('required|numeric')]
    public $salary_step;

    #[Rule('required|string')]
    public $status_of_appointment;

    #[Rule('required|boolean')]
    public $govt_service;

    public $workExperience;

    #[Computed()]
    public function workExperiences()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);

        return $personalInformation->workExperience()->latest()->paginate(5);;
    }

    public function render()
    {
        return view('livewire.work-experience.work-experience-list');
    }

    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['start_date', 'end_date', 'position_title', 'company', 'monthly_salary', 'salary_grade', 'salary_step', 'status_of_appointment', 'govt_service']);
        $this->dispatch('open-experience-form-modal');
    }

    public function createNewExperience()
    {
        $data = $this->validate();
        $workExperience = new WorkExperience();
        $workExperience->personal_information_id = $this->personalInformationId;
        $workExperience->start_date = $data['start_date'];
        $workExperience->end_date = $data['end_date'];
        $workExperience->position_title = $data['position_title'];
        $workExperience->company = $data['company'];
        $workExperience->monthly_salary = $data['monthly_salary'];
        $workExperience->salary_grade = $data['salary_grade'];
        $workExperience->salary_step = $data['salary_step'];
        $workExperience->status_of_appointment = $data['status_of_appointment'];
        $workExperience->govt_service = $data['govt_service'];
        $workExperience->save();

        $this->dispatch('close-experience-form-modal');

        $this->dispatch('alert', type: 'success', message: 'Work Experience has been saved.', title: 'Work Experience');
    }

    public function showWorkExperience(WorkExperience $workExperience)
    {
        $this->resetValidation();

        $this->workExperience = $workExperience;

        $this->start_date = $workExperience->start_date;
        $this->end_date = $workExperience->end_date;
        $this->position_title = $workExperience->position_title;
        $this->company = $workExperience->company;
        $this->monthly_salary = $workExperience->monthly_salary;
        $this->salary_grade = $workExperience->salary_grade;
        $this->salary_step = $workExperience->salary_step;
        $this->status_of_appointment = $workExperience->status_of_appointment;
        $this->govt_service = $workExperience->govt_service;

        $this->dispatch('open-experience-form-modal');
    }

    public function updateWorkExperience()
    {
        $data = $this->validate();
        $this->workExperience->update($data);
        $this->dispatch('close-experience-form-modal');
        $this->dispatch('alert', type: 'success', message: 'Work Experience has been updated.', title: 'Work Experience');
    }

    public function openDeleteModal(WorkExperience $workExperience)
    {
        $this->workExperience = $workExperience;
        $this->dispatch('open-experience-delete-modal');
    }

    public function deleteWorkExperience()
    {
        $this->workExperience->delete();
        $this->dispatch('alert', type: 'success', message: 'Work Experience has been deleted.', title: 'Work Experience');
        $this->dispatch('close-experience-delete-modal');
    }
}

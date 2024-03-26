<?php

namespace App\Livewire\Education;

use App\Models\EducationalBackground\EducationalBackground;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class EducationList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $level;

    #[Rule('required|string')]
    public $school_name;

    #[Rule('required|string')]
    public $basic_education_degree_course;

    #[Rule('required|string')]
    public $start_date;

    #[Rule('required|string')]
    public $end_date;

    #[Rule('nullable|string')]
    public $highest_level;

    #[Rule('nullable|string')]
    public $year_graduated;

    #[Rule('nullable|string')]
    public $honor_received;

    #[Rule('nullable|string')]
    public $scholarship;

    public $education;

    public function render()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        $educationalBackgrounds = $personalInformation->educationalBackground()->latest()->paginate(5);
        return view('livewire.education.education-list', compact('educationalBackgrounds'));
    }

    public function openForm()
    {
        $this->reset(['level', 'school_name', 'basic_education_degree_course', 'start_date', 'end_date', 'highest_level', 'year_graduated', 'honor_received', 'education']);
        $this->dispatch('open-education-form-modal');
    }

    public function createNewEducation()
    {
        $data = $this->validate();

        $education = new EducationalBackground();
        $education->personal_information_id = $this->personalInformationId;
        $education->level = $data['level'];
        $education->school_name = $data['school_name'];
        $education->basic_education_degree_course = $data['basic_education_degree_course'];
        $education->start_date = $data['start_date'];
        $education->end_date = $data['end_date'];
        $education->highest_level = $data['highest_level'];
        $education->year_graduated = $data['year_graduated'];
        $education->honor_received = $data['honor_received'];
        $education->scholarship = $data['scholarship'];
        $education->save();

        $this->dispatch('alert', type: 'success', message: 'Education has been saved.', title: 'Education');
        $this->dispatch('close-education-form-modal');
    }

    public function showEducation(EducationalBackground $education)
    {
        $this->education = $education;

        $this->level = $education->level;
        $this->school_name = $education->school_name;
        $this->basic_education_degree_course = $education->basic_education_degree_course;
        $this->start_date = date('Y-m-d', strtotime($education->start_date));
        $this->end_date = date('Y-m-d', strtotime($education->end_date));
        $this->highest_level = $education->highest_level;
        $this->year_graduated = $education->year_graduated;
        $this->honor_received = $education->honor_received;
        $this->scholarship = $education->scholarship;

        $this->dispatch('open-education-form-modal');
    }

    public function updateEducation()
    {

        $data = $this->validate();
        $education = EducationalBackground::findOrFail($this->education->id);
        $education->level = $data['level'];
        $education->school_name = $data['school_name'];
        $education->basic_education_degree_course = $data['basic_education_degree_course'];
        $education->start_date = $data['start_date'];
        $education->end_date = $data['end_date'];
        $education->highest_level = $data['highest_level'];
        $education->year_graduated = $data['year_graduated'];
        $education->honor_received = $data['honor_received'];
        $education->scholarship = $data['scholarship'];
        $education->update();

        $this->dispatch('alert', type: 'success', message: 'Education has been updated.', title: 'Education');
        $this->dispatch('close-education-form-modal');
    }

    public function openDeleteModal(EducationalBackground $education)
    {
        $this->reset(['level', 'school_name', 'basic_education_degree_course', 'start_date', 'end_date', 'highest_level', 'year_graduated', 'honor_received', 'education']);

        $this->education = $education;

        $this->dispatch('open-education-delete-modal');
    }

    public function deleteEducation()
    {
        $this->education->delete();
        $this->dispatch('alert', type: 'success', message: 'Education has been deleted.', title: 'Education');
        $this->dispatch('close-education-delete-modal');
    }
}

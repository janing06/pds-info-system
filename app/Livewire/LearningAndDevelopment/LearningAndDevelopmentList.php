<?php

namespace App\Livewire\LearningAndDevelopment;

use App\Models\LearningAndDevelopment\LearningAndDevelopment;
use App\Models\PersonalInformation;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class LearningAndDevelopmentList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $title;

    #[Rule('required|date')]
    public $start_date;

    #[Rule('required|date')]
    public $end_date;

    #[Rule('required|numeric')]
    public $number_of_hours;

    #[Rule('required|string')]
    public $type;

    #[Rule('required|string')]
    public $sponsored_by;

    public $learningAndDevelopment;

    #[Computed()]
    public function learningAndDevelopments()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        return $personalInformation->learningAndDevelopment()->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.learning-and-development.learning-and-development-list');
    }

    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['title', 'start_date', 'end_date', 'number_of_hours', 'type', 'sponsored_by', 'learningAndDevelopment']);
        $this->dispatch('open-learning-and-development-form-modal');
    }

    public function createNewLearningAndDevelopment()
    {
        $data = $this->validate();
        $learningAndDevelopment = new LearningAndDevelopment();
        $learningAndDevelopment->personal_information_id = $this->personalInformationId;
        $learningAndDevelopment->title = $data['title'];
        $learningAndDevelopment->start_date = $data['start_date'];
        $learningAndDevelopment->end_date = $data['end_date'];
        $learningAndDevelopment->number_of_hours = $data['number_of_hours'];
        $learningAndDevelopment->type = $data['type'];
        $learningAndDevelopment->sponsored_by = $data['sponsored_by'];
        $learningAndDevelopment->save();

        $this->dispatch('alert', type: 'success', message: 'Learning and Development has been saved.', title: 'Learning and Development');
        $this->dispatch('close-learning-and-development-form-modal');
    }


    public function showLearningAndDevelopment(LearningAndDevelopment $learningAndDevelopment)
    {
        $this->resetValidation();
        $this->learningAndDevelopment = $learningAndDevelopment;
        $this->title = $learningAndDevelopment->title;
        $this->start_date = $learningAndDevelopment->start_date;
        $this->end_date = $learningAndDevelopment->end_date;
        $this->number_of_hours = $learningAndDevelopment->number_of_hours;
        $this->type = $learningAndDevelopment->type;
        $this->sponsored_by = $learningAndDevelopment->sponsored_by;

        $this->dispatch('open-learning-and-development-form-modal');
    }

    public function updateLearningAndDevelopment()
    {
        $data = $this->validate();
        $this->learningAndDevelopment->update($data);
        $this->dispatch('alert', type: 'success', message: 'Learning and Development has been updated.', title: 'Learning and Development');
        $this->dispatch('close-learning-and-development-form-modal');
    }

    public function openDeleteModal(LearningAndDevelopment $learningAndDevelopment)
    {
        $this->learningAndDevelopment = $learningAndDevelopment;
        $this->dispatch('open-learning-and-development-delete-modal');
    }

    public function deleteLearningAndDevelopment()
    {
        $this->learningAndDevelopment->delete();
        $this->dispatch('alert', type: 'success', message: 'Learning and Development has been deleted.', title: 'Learning and Development');
        $this->dispatch('close-learning-and-development-delete-modal');
    }
}

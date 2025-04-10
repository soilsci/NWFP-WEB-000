<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Testimony;
use App\Models\Student;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;


class Testimonies extends Component
{
    public $testimonies;
    public $students;
    public $projects;
    public $id=0;

    public function mount() {
        $this -> testimonies = Testimony::where('is_visible', TRUE)
        ->get();
        $this -> students = Student::all();
        $this -> projects = Project::all();
    }


    public function render()
    {
        return view('livewire.testimonies', [

            'testimonies' => $this->testimonies,
            'students' => $this->students,
            'projects' => $this->projects,
        ])->layout('layouts.guest');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Testimony;
use App\Models\Student;
use App\Models\Project;
use App\Models\Organisation;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;


class Testimonies extends Component
{
    public $testimonies;
    public $testimony;
    public $students;
    public $student;
    public $projects;
    public $project;
    public $id;
    public $data = array();
    public $view = 'livewire.testimonies';
    public $style; // a variable to choose the kind of display

    public function mount() {
        //
    }


    public function getData() {
        // This to choose what is sent to which view

    }

    public function render()
    {
        $view = 'livewire.testimonies';


        if ($this -> id == 0 ) {
            // there is no specific ID, so the view is the defaut list for the moment
            $this -> testimonies = Testimony::where('is_visible', TRUE)
            ->get();
            $this -> students = Student::all(); // if we want to have some list of students
            $this -> projects = Project::all(); // if we want to list the projects
            $this -> data = [
                'id'=> 0,
                'testimonies' => $this->testimonies,
                //'students' => $this->students,
                //'projects' => $this->projects,
            ];
            $this -> view= 'livewire.testimonies';
        }
        else
        // this is one testimony so the view is "show" for the moment
        {
            //If you only need a single record, using first() will return an Eloquent
            //model instance instead of a Collection. This method is faster and more efficient
            //when you know you're only fetching one record.

            $this -> testimony = Testimony::find($this->id)->first();
            $this -> student = $this -> testimony->student->first();

            $org = $this -> student->organisation;


            $this -> view = 'livewire.testimonies.show';
            $this -> data = [
                'id'=> $this->id,
                'testimony' => $this -> testimony,
                'student' => $this -> student,
                'organisation'=>$org,

            ];

        }


        return view ($this -> view, $this -> data)
        ->layout('layouts.guest');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Project;
use App\Models\Theme;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;


/**
 * I have started trying to use the filament hasform to have a multislect and I am struggling putting the data in there.,
 * Getting there, but I am still not getting the information to get through
 */
class Projects extends Component implements HasForms
{
    use InteractsWithForms;

    public $projects;
    public string $searchProj = "";
    public array $themes = [];
    public array $listThemes ;


    public function mount(): void
    {
        $themes = Theme::all();
        $this->form->fill($themes->toArray());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('theme_id')
                ->label('Themes')
                ->options(Theme::all()->pluck('name', 'id'))
                ->columnSpanFull()
                ->preload()
                ->multiple()
                ->searchable(),
                Select::make('technologies')
                ->multiple()
                ->options([
                    'tailwind' => 'Tailwind CSS',
                    'alpine' => 'Alpine.js',
                    'laravel' => 'Laravel',
                    'livewire' => 'Laravel Livewire',
                ])
    ]);

    }


    public function render()
    {
        $this -> projects = Project::where('name', 'ilike', '% %')
        ->where('is_available', TRUE)
        ->when($this->searchProj !== '', fn(Builder $query) => $query->where('name', 'ilike', '%'. $this->searchProj .'%'))
        ->get();

/*        $this -> publications = Publication::where('keywords', 'ilike', '%'. $this->keyref .'%')
        ->when($this->guides === 0, fn(Builder $query) => $query->where('keywords', 'not like', '%KeyRefUserGuide%'))
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        ->get(); */
        return view('livewire.projects', [
            'projects' => $this->projects,
            'themes' => $this->themes,

        ]);
    }
}

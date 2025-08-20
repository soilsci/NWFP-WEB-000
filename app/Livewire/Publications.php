<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class Publications extends Component
{


    public $keyref;
    public $hasButtons;
    public $hasSearch;
    public $order = 'ASC';
    public string $searchRef = "";

    public string $searchAuth = "";
    public $guides = 1;
    public $years;
    public $publications;
    public $types= [
        'rf1'=>'Journal Article',
        'rf2'=>'Conference Paper',
        'rf3'=>'Conference Proceedings',
        'rf4'=>'Dataset',
        'rf5'=>'Report',
        'rf7'=>'Computer Program',
        'rf9'=>'RPubs'
    ];
    public $ref_types;

    public $data = array();
    public $view = 'livewire.publications';
    public $style; // a variable to choose the kind of display
    public $counts = [];

    public function mount() {


    }
    public function render()
    {

        $this -> publications = Publication::where('keywords', 'ilike', '%'. $this->keyref .'%')
        ->when($this->guides === 0, fn(Builder $query) => $query->where('keywords', 'not like', '%KeyRefUserGuide%'))
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        ->orderBy('authors')
        ->get();
        $this -> years = Publication::select('pub_year')->distinct('pub_year')->orderBy('pub_year', 'DESC')->get();
        $this -> ref_types = Publication::select('ref_type')->distinct('ref_type')->orderBy('ref_type', 'ASC')->get();
        $this-> view = 'livewire.publications';
        if ($this->keyref == 'KeyRefUserGuide') {
            $this->view = 'livewire.publications.nw_guides';
        }

        $this->counts = Publication::select('ref_type', DB::raw('COUNT(*) as total')) 
        ->groupBy('ref_type')
        ->pluck('total', 'ref_type')
        ->toArray();

        $this-> data=  [
            'publications' => $this->publications,
            'years' => $this->years,
            'types' => $this->types,
            'ref_types' => $this->ref_types,
            'hasButton' => $this->hasButtons,
            'hasSearch' => $this->hasButtons,

        ];


        return view (
            $this -> view, $this
        -> data )
        ->layout('layouts.guest');
    }

}

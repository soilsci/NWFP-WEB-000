<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Publication;

class Publications extends Component
{
    public $ref_type;

    public $keyref;
    public $order = 'ASC';
    public string $searchRef = "";
    public $publications;
    public string $searchAuth = "";
    public $guides=1;
    public $years;
    public $types= ['Journal Article', 'Conference', 'Dataset', 'Report', 'Web Page'  ];

    /* Computer Program
Journal Article
Dataset
Conference Paper and Conference Proceedings >> Conference
Web Page
Report

 */

    public function render()
    {

        $this -> publications = Publication::where('keywords', 'ilike', '%'. $this->keyref .'%')
        ->when($this->guides === 0, fn(Builder $query) => $query->where('keywords', 'not like', '%KeyRefUserGuide%'))
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        ->orderBy('authors')
        ->get();
        $this -> years = Publication::select('pub_year')->distinct('pub_year')->orderBy('pub_year', 'DESC')->get();
        #$this -> types = Publication::select('ref_type')->distinct('ref_type')->orderBy('ref_type', 'ASC')->get();

        return view('livewire.publications', [
            'publications' => $this->publications,
            'years' => $this->years,
            'types' => $this->types,
        ]);
    }
}

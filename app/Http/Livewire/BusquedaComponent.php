<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class BusquedaComponent extends Component
{
    use WithPagination;
    public $searchTerm ='';
    public $sort='id';
    public $direction = 'desc';
    // public $agreements;
    public function render()
    {
        $agreements=Agreement::where('title','like','%'.$this->searchTerm.'%')
                                ->orWhere('objetive','like','%'.$this->searchTerm.'%')
                                ->orderBy($this->sort,$this->direction)
                                ->paginate(6);
        // if (empty($this->searchTerm)) {
        //     $this->agreements = Agreement::where('title', $this->searchTerm)->get();
        // } else {
        //     $this->agreements =Agreement::where('title', 'like', '%'.$this->searchTerm.'%')->get();
        // }
        return view('livewire.busqueda-component',compact('agreements'));
    }
    public function updatedSearchTerm(){
        $this->resetPage();
    }
    public function order($sort){
        if($this->sort==$sort){
            if($this->direction=='desc'){
                $this->direction='asc';
            }else{
                $this->direction='desc';
            }
        }else{
            $this->sort=$sort;
        }
    }
    public function export()
    {
        return Storage::disk('public')->download('files/ds4EVIkiPSXFeoFnRGmOO5qCk7xZwhWpZa4Vw3T7.pdf');
    }
}

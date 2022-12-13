<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;

class DashComponent extends Component
{
    use WithPagination;
    public $title='CONVENIOS POR VENCER';
    public function render()
    {
        $expirate=Agreement::where('status','POR VENCER')->orderBy('expiration')->paginate(10);
        return view('livewire.dash-component',compact('expirate'));
    }
    public function genpdf(){
        $agreements=Agreement::where('status','POR VENCER')->orderBy('expiration')->get();
        $pdf=Pdf::loadView('PDFCAT',['agreements'=>$agreements,'titulo'=>$this->title])->output();
        return response()->streamDownload(
            fn()=>print($pdf),"porvencer.pdf"
        );
    }
}

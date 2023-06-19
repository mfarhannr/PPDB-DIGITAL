<?php

namespace App\Http\Livewire\Pages;

use App\Models\Formulir;
use Livewire\Component;

class FormulirComponent extends Component
{
    public function destroy($formulirId)
    {
        $findFormulir= Formulir::find($formulirId);
        $findFormulir->delete;
        session()->flash('message', 'Formulir ' . $findFormulir->name. ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Formulir::query()->latest()->get();
        return view('livewire.pages.formulir-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}

<?php

namespace App\Http\Livewire\Pages;

use App\Models\Nilai;
use Livewire\Component;

class NilaiComponent extends Component
{
    public function destroy($nilaiId)
    {
        $findNilai = Nilai::find($nilaiId);
        $findNilai->delete;
        session()->flash('message', 'Nilai ' . $findNilai->name . ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Nilai::query()->latest()->get();
        return view('livewire.pages.nilai-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}

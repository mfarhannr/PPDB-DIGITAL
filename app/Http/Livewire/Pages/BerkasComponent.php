<?php

namespace App\Http\Livewire\Pages;

use App\Models\Berkas;
use Livewire\Component;

class BerkasComponent extends Component
{
    public function destroy($berkasId)
    {
        $findBerkas = Berkas::find($berkasId);
        $findBerkas->delete;
        session()->flash('message', 'File tambahan ' . $findBerkas->name . ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Berkas::query()->latest()->get();
        return view('livewire.pages.berkas-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}

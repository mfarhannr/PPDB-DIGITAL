<?php

namespace App\Http\Livewire\Pages\Berkas;

use App\Models\Berkas;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBerkasComponent extends Component
{
    use WithFileUploads;
    public
    $name, $foto, $kk, $ijazah, $nilai_rapot, $ktp_ortu, $file;
    public $berkasId;
    public $findBerkas;
    public function mount($berkasId)
    {
        $this->findBerkas = Berkas::findOrFail($berkasId);
        $this->berkasId = $this->findBerkas->id;
        $this->name = $this->findBerkas->name;
        $this->foto = $this->findBerkas->foto;
        $this->kk = $this->findBerkas->kk;
        $this->ijazah = $this->findBerkas->ijazah;
        $this->nilai_rapot = $this->findBerkas->nilai_rapot;
        $this->ktp_ortu = $this->findBerkas->ktp_ortu;
        $this->file = $this->findBerkas->file;
    }
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $updateBerkas = Berkas::find($this->berkasId);
        $updateBerkas->update([
            'name' => $this->name,
            'foto' => $this->foto,
            'kk' => $this->kk,
            'ijazah' => $this->ijazah,
            'nilai_rapot' => $this->nilai_rapot,
            'ktp_ortu' => $this->ktp_ortu,
            'file' => $this->file,
        ]);
        session()->flash('message', 'Update file sukses!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.berkas.update-berkas-component')->layout('template.app');
    }
}

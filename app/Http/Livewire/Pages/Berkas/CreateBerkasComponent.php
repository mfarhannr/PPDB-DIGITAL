<?php

namespace App\Http\Livewire\Pages\Berkas;

use App\Models\Berkas;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBerkasComponent extends Component
{
    use WithFileUploads;
    public $name, $foto, $kk, $ijazah, $nilai_rapot, $ktp_ortu, $file;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

         Berkas::create([
            'name' => $this->name,
            'foto' => $this->foto,
            'kk' => $this->kk,
            'ijazah' => $this->ijazah,
            'nilai_rapot' => $this->nilai_rapot,
            'ktp_ortu' => $this->ktp_ortu,
            'file' => $this->file,
        ]);
        $this->file->store('files');

        session()->flash('message', 'Formulir telah Ditambahkan!');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.berkas.create-berkas-component')->layout('template.app');
    }
}

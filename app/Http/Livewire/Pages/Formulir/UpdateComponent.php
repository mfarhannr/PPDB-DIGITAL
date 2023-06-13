<?php

namespace App\Http\Livewire\Pages\Formulir;

use App\Models\Formulir;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateComponent extends Component
{
    use WithFileUploads;
    public $name, $nisn, $gender, $birthday, $address, $school_origin, $parents_name, $parents_occupation, $achievement, $file;
    public $formulirId;
    public $findFormulir;
    public function mount($formulirId)
    {
        $this->findFormulir = Formulir::findOrFail($formulirId);
        $this->formulirId = $this->findFormulir->id;
        $this->name = $this->findFormulir->name;
        $this->nisn = $this->findFormulir->nisn;
        $this->gender = $this->findFormulir->gender;
        $this->birthday = $this->findFormulir->birthday;
        $this->address = $this->findFormulir->address;
        $this->school_origin = $this->findFormulir->school_origin;
        $this->parents_name = $this->findFormulir->parents_name;
        $this->parents_occupation = $this->findFormulir->parents_occupation;
        $this->achievement = $this->findFormulir->achievement;
        $this->file = $this->findFormulir->file;
    }
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $updateFormulir = Formulir::find($this->formulirId);
        $updateFormulir->update([
            'full_name' => $this->name,
            'nisn' => $this->nisn,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'address' => $this->address,
            'school_origin' => $this->school_origin,
            'parents_name' => $this->parents_name,
            'parents_occupation' => $this->parents_occupation,
            'achievement' => $this->achievement,
            'additional_file' => $this->file,
        ]);
        session()->flash('message', 'Update file sukses!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.formulir.update-component')->layout('template.app');
    }
}

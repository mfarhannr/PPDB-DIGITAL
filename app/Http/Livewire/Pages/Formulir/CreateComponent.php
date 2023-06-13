<?php

namespace App\Http\Livewire\Pages\Formulir;

use App\Models\Formulir;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $nisn, $gender, $birthday, $address, $school_origin, $parents_name, $parents_occupation, $achievement, $file;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

        Formulir::create([
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
        session()->flash('message', 'Formulir telah Dibuat!');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.formulir.create-component')->layout('template.app');
    }
}

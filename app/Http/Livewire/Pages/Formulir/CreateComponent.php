<?php

namespace App\Http\Livewire\Pages\Formulir;

use App\Models\Formulir;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $nisn, $place, $gender, $birthday, $religion, $phone, $disease, $address, $school_origin, $parents_name, $parents_occupation, $parents_contact, $achievement, $file;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

         Formulir::create([
            'name' => $this->name,
            'nisn' => $this->nisn,
            'gender' => $this->gender,
            'place' => $this->place,
            'birthday' => $this->birthday,
            'religion' => $this->religion,
            'phone' => $this->phone,
            'disease' => $this->disease,
            'address' => $this->address,
            'school_origin' => $this->school_origin,
            'parents_name' => $this->parents_name,
            'parents_occupation' => $this->parents_occupation,
            'parents_contact' => $this->parents_contact,
            'achievement' => $this->achievement,
            'file' => $this->file,
        ]);
        $this->file->store('files');

        session()->flash('message', 'Formulir telah Dibuat!');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.formulir.create-component')->layout('template.app');
    }
}

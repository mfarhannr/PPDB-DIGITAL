<?php

namespace App\Http\Livewire\Pages\Nilai;

use Livewire\Component;
use App\Models\Nilai;

class CreateNilaiComponent extends Component
{
    public $name, $diploma_grades, $academic_score, $interview_score, $status;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

        nilai::create([
            'name' => $this->name,
            'diploma_grades' => $this->diploma_grades,
            'academic_score' => $this->academic_score,
            'interview_score' => $this->interview_score,
            'status' => $this->status,
        ]);
        session()->flash('message', 'Berhasil menambahkan nilai');
    }
    public function render()
    {
        return view('livewire.pages.nilai.create-nilai-component')->layout('template.app');
    }
}

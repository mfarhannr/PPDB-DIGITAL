<?php

namespace App\Http\Livewire\Pages\Nilai;

use Livewire\Component;
use App\Models\Nilai;

class UpdateNilaiComponent extends Component
{
    public
    $name, $diploma_grades, $academic_score, $interview_score, $status;
    public $nilaiId;
    public $findNilai;
    public function mount($nilaiId)
    {
        $this->findNilai = Nilai::findOrFail($nilaiId);
        $this->nilaiId = $this->findNilai->id;
        $this->name = $this->findNilai->name;
        $this->diploma_grades = $this->findNilai->diploma_grades;
        $this->academic_score = $this->findNilai->academic_score;
        $this->interview_score = $this->findNilai->interview_score;
        $this->status = $this->findNilai->status;
    }
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $updateNilai = Nilai::find($this->nilaiId);
        $updateNilai->update([
            'name' => $this->name,
            'diploma_grades' => $this->diploma_grades,
            'academic_score' => $this->academic_score,
            'interview_score' => $this->interview_score,
            'status' => $this->status,
        ]);
        session()->flash('message', 'Update Nilai sukses!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.nilai.update-nilai-component')->layout('template.app');
    }
}

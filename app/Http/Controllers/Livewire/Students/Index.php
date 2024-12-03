<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.students.index', compact('students'));
    }
}





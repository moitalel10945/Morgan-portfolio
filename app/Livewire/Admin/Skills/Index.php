<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class Index extends Component
{
    public function delete($id){
        Skill::findOrFail($id)->delete();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.skills.index',[
            'skills'=>Skill::orderBy('level','desc')->get()
        ]);
    }
}

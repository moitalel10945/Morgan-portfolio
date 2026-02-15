<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class Edit extends Component
{
    public  $selectedSkillId, $name, $level,$category;

    protected $rules=[
        'name' => 'required',
        'level' => 'required|integer|min:1|max:100',
        'category' => 'nullable',
    ];
    public function mount(Skill $skill)
    {
        $this->selectedSkillId=$skill->id;
        $this->name=$skill->name;
        $this->level=$skill->level;
        $this->category=$skill->category;
    }
    public function update(){
        $validated=$this->validate();
        $skill=Skill::find($this->selectedSkillId);
        $skill->update($validated);
        return redirect()->route('admin.skills.index')->with('success','Skill updated');
    }
    public function render()
    {
        return view('livewire.admin.skills.edit');
    }
}

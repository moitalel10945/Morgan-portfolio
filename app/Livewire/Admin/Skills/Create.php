<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class Create extends Component
{
    public $name, $category, $level;
    protected $rules=[
        'name'=>'required',
        'category'=>'nullable',
        'level'=>'required|integer|min:1|max:100'
    ];
    public function save(){
        $validated=$this->validate();
        Skill::create($validated);
    return redirect()->route('admin.skills.index')->with('success','Skill created successfully');
    }
    public function render()
    {
        return view('livewire.admin.skills.create');
    }
}

<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public function delete($id){
        Project::findOrFail($id)->delete();
    }
    public function render()
    {
        return view('livewire.admin.projects.index',[
            'projects'=>Project::latest()->get()
        ]);
    }
}

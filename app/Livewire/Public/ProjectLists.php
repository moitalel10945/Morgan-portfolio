<?php

namespace App\Livewire\Public;

use App\Models\Project;
use Livewire\Component;

class ProjectLists extends Component
{
    public function render()
    {
        return view('livewire.public.project-lists',[
            'projects'=>Project::where('status','published')->latest()->get()
        ]);
    }
}

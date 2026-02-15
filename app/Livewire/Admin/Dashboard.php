<?php

namespace App\Livewire\Admin;

use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard',[
            'totalProjects'=>Project::count(),
            'totalSkills'=>Skill::count(),
            'totalMessages'=>Message::count(),
            'unreadMessages'=>Message::where('status','unread')->count()
        ]);
    }
}

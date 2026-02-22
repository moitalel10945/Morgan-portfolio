<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $title, $description,$github ,$live_link, $status='draft';
    protected $rules=[
        'title'=>'required',
        'description'=>'required',
        'github'=>'url|required',
        'live_link'=>'url|nullable'
    ];

    public function save(){
        $this->validate();
        Project::create(
            [
                'title'=>$this->title,
                'description'=>$this->description,
                'github_url'=>$this->github,
                'live_url'=>$this->live_link,
                'status'=>$this->status,
            ]
            );
            return redirect()->route('admin.projects')->with('success','Project created');
    }
    
    public function render()
    {
        return view('livewire.admin.projects.create');
    }
}

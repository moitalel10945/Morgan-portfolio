<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $title, $description, $image, $github ,$live_link, $status='draft';
    protected $rules=[
        'title'=>'required',
        'description'=>'required',
        'image'=>'image|max:2048'
    ];

    public function save(){
        $this->validate();
        $path=$this->image->store('projects','public');
        Project::create(
            [
                'title'=>$this->title,
                'description'=>$this->description,
                'image'=>$path,
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

<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project as ModelsProject;
use Livewire\Component;
use Livewire\WithFileUploads;
class Edit extends Component
{
    use WithFileUploads;
    public $selectedProjectId ,$title, $description,$image;
    public $rules=[
        'title'=>'required',
        'description'=>'required'
    ];
    public function mount(ModelsProject $project){
        $this->selectedProjectId=$project->id;
        $this->title=$project->title;
        $this->description=$project->description;
    }
    public function update(){
        $validated=$this->validate();
        $project=ModelsProject::find($this->selectedProjectId);
        $path=$this->image? $this->image->store('upload','public'):$project->image;
        $project->update(
            [
                'title'=>$this->title,
                'description'=>$this->description,
                'image' => $path,
            ]
            );
            session()->flash('success', 'Project updated successfully');

        return redirect()->route('admin.projects');
    }
    public function render()
    {
        return view('livewire.admin.projects.edit');
    }
}

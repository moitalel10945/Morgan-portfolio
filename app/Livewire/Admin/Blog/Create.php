<?php

namespace App\Livewire\Admin\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $image,$title,$content;
    public $rules=[
        'title'=>'required|string|max:255',
        'content'=>'required',
        'image'=>'nullable|image|max:2040'
    ];
    public function create(){
        $validated=$this->validate();
        if($this->image){
            $validated['image']=$this->image->store('blog','public');
        }
        BlogPost::create($validated);
        $this->reset(['title', 'content', 'image']);

        session()->flash('success', 'Post created successfully!');
        return redirect()->route('admin.blog')->with('success','Blog created');
    }
    
    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}

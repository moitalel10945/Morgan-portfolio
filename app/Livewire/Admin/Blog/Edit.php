<?php

namespace App\Livewire\Admin\Blog;
use App\Models\BlogPost as ModelsBlogPost;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $selectedBlogId ,$title, $content,$image;
    public $rules=[
        'title'=>'required',
        'content'=>'required'
    ];
    public function mount(ModelsBlogPost $post){
        $this->selectedBlogId=$post->id;
        $this->title=$post->title;
        $this->content=$post->description;
    }
    public function update(){
        $validated=$this->validate();
        $post=ModelsBlogPost::find($this->selectedBlogId);
        $path=$this->image? $this->image->store('blog','public'):$post->image;
        $post->update(
            [
                'title'=>$this->title,
                'content'=>$this->content,
                'image' => $path,
            ]
            );
            session()->flash('success', 'Blog updated successfully');

        return redirect()->route('admin.blog');
    }
    public function render()
    {
        return view('livewire.admin.blog.edit');
    }
}

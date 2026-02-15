<?php

namespace App\Livewire\Admin\Blog;

use App\Models\BlogPost;
use Livewire\Component;

class Index extends Component
{
    public function togglePublish($id){
        $post=BlogPost::findOrFail($id);
        $post->update([
            'is_published'=>!$post->is_published,
            'published_at'=>!$post->is_published ? now() : null,
        ]);
    }
    public function delete($id){
        BlogPost::findOrFail($id)->delete();
    }
    public function render()
    {
        return view('livewire.admin.blog.index',[
            'posts'=>BlogPost::latest()->get()

        ]);
    }
}

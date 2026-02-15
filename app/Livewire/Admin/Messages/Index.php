<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class Index extends Component
{
    public function markAsRead($id){
        Message::findOrFail($id)->update([
            'status'=>'read'
        ]);
    }
    public function delete($id){
        Message::findOrFail($id)->delete();
    }
    public function render()
    {
        return view('livewire.admin.messages.index',[
            'messages'=>Message::latest()->get()
        ]);
    }
}

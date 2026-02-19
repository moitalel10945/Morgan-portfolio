<?php

use Livewire\Component;
use App\Models\Message;

new class extends Component
{
    public $name;
    public $email;
    public $message;
    public $subject;
    protected $rules=[
        'name'=>'required|min:3',
        'email'=>'required|email',
        'message'=>'required|min:10',
        'subject'=>'required|min:5'
];
    
public function submit(){
    $validated=$this->validate();
    Message::create($validated);
    session()->flash('success','Message sent successfully');
    $this->reset();
}
};
?>

<div class="max-w-xl mmx-auto">
    @if (session()->has('success'))
      <div class="p-4 bg-green-100 text-green-800 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
    <form wire:submit.prevent="submit" class="space-y-4">
        <input  wire:model="name" type="text" placeholder="Name" class="w-full border p-2 rounded">
        @error('name')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input wire:model="email" type="email" placeholder="Email" class="w-full border p-2 rounded">
        @error('email')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input wire:model="subject" type="text" placeholder="Subject" class="w-full border p-2 rounded">
        @error('subject')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <textarea wire:model="message"  placeholder="Message" class="w-full border p-2 rounded"></textarea>
        @error('message')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

        <button wire:loading.attr="disabled" type="submit" class="px-6 py-2 bg-black text-white rounded">
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>
</div>
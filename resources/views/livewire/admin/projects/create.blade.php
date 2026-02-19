<div>
    <form wire:submit.prevent="save" class="p-6 space-y-4">
        <input type="text" wire:model="title" class="w-full" placeholder="Title">

         @error('title') 
         <span class="text-red-500 text-sm">{{ $message }}</span> 
         @enderror

        <textarea type="text" wire:model="description" class="w-full" placeholder="Description"></textarea>

        @error('description') 
        <span class="text-red-500 text-sm">{{ $message }}</span> 
        @enderror

        <input type="file" wire:model="image" class="w-full">

        @error('image') 
        <span class="text-red-500 text-sm">{{ $message }}</span> 
        @enderror

        <input type="url" wire:model="github" class="w-full" placeholder="GitHub Repository URL">

@error('github') 
<span class="text-red-500 text-sm">{{ $message }}</span> 
@enderror


<input type="url" wire:model="live_link" class="w-full" placeholder="Live Demo URL">

@error('live_url') 
<span class="text-red-500 text-sm">{{ $message }}</span> 
@enderror

        @if ($image)
        <img src="{{ $image->temporaryUrl() }}" class="h-32">
        @endif
        <button class="px-4 py-2 bg-blue-600 text-white rounded"> Save Project</button>
    </form>
</div>

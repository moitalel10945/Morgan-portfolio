<div>
    <form wire:submit.prevent="update" class="p-6 space-y-4">
        <input type="text" wire:model="title" class="w-full" placeholder="Title">
        <textarea type="text" wire:model="content" class="w-full" placeholder="Content"></textarea>
        <input type="file" wire:model="image" class="w-full">
          @if ($image)
        <img src="{{ $image->temporaryUrl() }}" class="h-32">
        @endif
        <button class="px-4 py-2 bg-blue-600 text-white rounded"> Update Blog</button>
    </form>
</div>

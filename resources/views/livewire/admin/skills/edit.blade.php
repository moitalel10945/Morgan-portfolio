<div>
   <form wire:submit.prevent="update" class="p-6 space-y-4 max-w-xl">
    <input wire:model="name" class="w-full">
    <input wire:model="level" class="w-full" type="number">
    <input wire:model="category" class="w-full">
    <button class="px-4 py-2 bg-blue-600 text-white rounded">Update Skill</button>
   </form>
</div>

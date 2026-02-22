
   <form  wire:submit.prevent="save" class="p-6 space-y-4 max-w-xl">
    <input wire:model="name" class="w-full" placeholder="Skill name">
    @error('name') 
    <span class="text-red-500 text-sm">{{ $message }}</span> 
    @enderror
    <input wire:model="level" class="w-full" placeholder="Skill level %">
    @error('level') 
<span class="text-red-500 text-sm">{{ $message }}</span> 
@enderror
    <input wire:model="category" class="w-full" placeholder="Category(Frontend,Backend)">
    @error('category') 
<span class="text-red-500 text-sm">{{ $message }}</span> 
@enderror
    <button class="px-4 py-2 bg-green-600 text-white rounded">Save skill</button>
   </form>

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-2xl">Skills</h1>
        <a href="{{ route('admin.skills.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">+ Add Skill</a>
    </div>
    <div class="bg-white shadow rounded p-4">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="p-2 text-letf">Skills</th>
                    <th class="p-2 text-letf">Level</th>
                    <th class="p-2 text-letf">Category</th>
                    <th class="p-2 text-letf">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($skills as $skill)
                    <tr class="border-b"  wire:key="skill-{{ $skill->id }}">
                        <td class="p-2">{{ $skill->name }}</td>
                        <td class="p-2">{{ $skill->level}}</td>
                        <td class="p-2">{{ $skill->Category }}</td>
                        <td class="p-2 text-center space-x-2">
                            <a href="{{ route('admin.skills.edit',$skill) }}" class="text-blue-500"> Edit</a>
                            <button wire:click="delete({{ $skill->id }})" class="text-white bg-red-500 rounded px-4 -py-2 ">Delete</button>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td class="text-center p-6 text-gray-500 " colspan="4">No Skills yet.</td>
                </tr>
                    
                @endforelse
            </tbody>
        </table>
    </div>
</div>

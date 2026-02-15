<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-2xl">Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">+ Add Project</a>
    </div>
    <div class="bg-white shadow roumded p-4">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="text-left p-2">Title</th>
                    <th class="text-left p-2">Status</th>
                    <th class="text-left p-2">Action</th>
                    <th class="text-left p-2">Image</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="border-b" wire:key="projet-{{ $project->id }}">
                    <td class="p-2">{{ $project->title }}</td>
                    <td class="p-2">{{ $project->status }}</td>
                    <td class="p-2 space-x-2">
                        <a href="{{ route('admin.projects.edit',$project)}}" class="text-blue-600">Edit</a>
                        <button  wire:click="delete({{ $project->id }})" class="text-red-600">Delete</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center p-6 text-gray-500 " colspan="4">NO projects yet</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>

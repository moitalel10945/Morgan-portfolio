<?php

use Livewire\Component;
use App\Models\Project;

new class extends Component
{
    public function getProjectsProperty(){
     return Project::all();
    }
};
?>

<div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3 mt-4">
    @foreach ($this->projects as $project)
    <div class="bg-card rounded-xl shadow-sm hover:shadow-md transition duration-300 flex flex-col overflow-hidden">
        <img src="{{ asset('storage/'.$project->image) }}" class="h-48 w-full object-cover">

        <div class="p-6 flex flex-col flex-1">
            <h3 class="font-semibold text-lg text-gray-900">{{ $project->title }}</h3>
        <p class="text-gray-600 mt-3 flex-1">{{ $project->description }}</p>
        </div>
        
        <div class="flex gap-4 mt-6">
            <a href="{{ $project->github_url }}" target="_blank" class="text-primary font-medium hover:underline">GitHub</a>
            <a href="{{ $project->live_link }}" target="_blank" class="text-primary font-medium hover:underline">Live</a>
        </div>
    </div>
    @endforeach
</div>
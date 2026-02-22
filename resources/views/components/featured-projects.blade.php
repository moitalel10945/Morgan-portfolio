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
        <div class="h-48 w-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 
            flex items-center justify-center text-white text-3xl font-bold">
    {{ strtoupper($project->title) }}
</div>

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
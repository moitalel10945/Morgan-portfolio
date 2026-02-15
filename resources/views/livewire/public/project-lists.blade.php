<div class="grid md:grid-cols-3 gap-6">
    @foreach ($projects as $project)
    <div class="border rounded p-4">
        <img src="{{ asset('storage/'.$project->image) }}" class="rounded mb-2">
        <h3 class="font-bold">{{ $project->title }}</h3>
        <p class="text-sm text-gray-600">{{ $project->description }}</p>
        <div class="flex space-x-3 mt-3">
            <a href="{{ $project->github }}" target="_blank">GitHub</a>
            <a href="{{ $project->live_link }}" target="_blank">Live</a>
        </div>
    </div>
    @endforeach
</div>

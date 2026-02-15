<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-2xl">Blogs</h1>
        <a href="{{ route('admin.blog.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">+ Add Blog</a>
    </div>
    <div class="bg-white shadow roumded p-4">
        @foreach($posts as $post)
    <div class="p-4 border rounded flex justify-between items-center">

        <div>
            <h3 class="font-semibold">{{ $post->title }}</h3>

            @if($post->is_published)
                <span class="text-green-600 text-xs">Published</span>
            @else
                <span class="text-gray-500 text-xs">Draft</span>
            @endif
        </div>

        <div class="flex gap-2">
            <button wire:click="togglePublish({{ $post->id }})"
                class="text-sm text-blue-600">
                Toggle
            </button>

            <a   href="{{ route('admin.blog.edit', $post->id) }}" 
                class="text-sm text-yellow-600">
                Edit
            </a>

            <button wire:click="delete({{ $post->id }})"
                class="text-sm text-red-600">
                Delete
            </button>
        </div>

    </div>
@endforeach

    </div>
</div>


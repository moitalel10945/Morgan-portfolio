<x-guest>
  <article class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-500 mb-6">
      {{ $post->created_at->format('F d, Y') }}
  </p>
  <div class="h-48 w-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 
                     flex items-center justify-center text-white text-3xl font-bold">
             {{ strtoupper($post->title) }}
            </div>

    <div class="prose max-w-none">
        {!! nl2br(e($post->content)) !!}
    </div>
  </article>
</x-guest>
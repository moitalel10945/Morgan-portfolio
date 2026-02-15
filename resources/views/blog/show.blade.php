<x-guest>
  <article class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-500 mb-6">
      {{ $post->created_at->format('F d, Y') }}
  </p>
  @if($post->image)
        <img src="{{ asset('storage/'.$post->image) }}"
             class="rounded mb-6">
    @endif

    <div class="prose max-w-none">
        {!! nl2br(e($post->content)) !!}
    </div>
  </article>
</x-guest>
<x-guest>

  <section class="bg-surface-light">
      <div class="max-w-6xl mx-auto px-6 py-10">

          <h1 class="text-3xl font-bold text-gray-900 text-center">
              Blog
          </h1>

          @if ($posts->isEmpty())
              <p class="text-center text-gray-500 text-xl mt-8">
                  No blog posts yet.
              </p>
          @endif

          <div class=" grid gap-8 md:grid-cols-2 lg:grid-cols-3 mt-10">

              @foreach ($posts as $post)
                  <a href="{{ route('blog.show', $post->slug) }}"
                     class="bg-card rounded-xl shadow-sm hover:shadow-md transition duration-300 overflow-hidden flex flex-col">
                     <div class="h-48 w-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 
                     flex items-center justify-center text-white text-3xl font-bold">
             {{ strtoupper($post->title) }}
            </div>
                      <div class="p-6 flex flex-col flex-1">

                          <h2 class="font-semibold text-lg text-gray-900">
                              {{ $post->title }}
                          </h2>

                          <p class="text-sm text-gray-500 mt-3">
                              {{ $post->created_at->format('M d, Y') }}
                          </p>

                      </div>

                  </a>
              @endforeach

          </div>

      </div>
  </section>

</x-guest>

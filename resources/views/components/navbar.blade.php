<nav x-data="{ open: false }"   class="bg-surface-light shadow-sm border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">

        <a href="/" class="text-xl font-bold text-gray-800">{{ config('app.name') }}</a>

      <div class="hidden md:flex space-x-6">
        <a href="/" class="text-gray-800 hover:text-primary transition font-medium">Home</a>
        <a href="/projects" class="text-gray-800 hover:text-primary transition font-medium">Projects</a>
        <a href="/skills" class="text-gray-800 hover:text-primary transition font-medium">Skills</a>
        <a href="/blog" class="text-gray-800 hover:text-primary transition font-medium">Blog</a>
        <a href="/contact" class="text-gray-800 hover:text-primary transition font-medium">Contact</a>
      </div>
      <div class="md:hidden">
        <button @click="open = !open" class="text-2xl text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg"
         class="w-6 h-6"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor"
         stroke-width="2">

        <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
    </svg>
        </button>
    </div>
    </div>
    <div x-show="open"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 translate-x-full"
     x-transition:enter-end="opacity-100 translate-x-0"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100 translate-x-0"
     x-transition:leave-end="opacity-0 translate-x-full"
     class="md:hidden px-4 pb-4 space-y-3 text-right">

    <a @click="open = false" href="/" class="block text-gray-800 font-medium">Home</a>
    <a @click="open = false" href="/projects" class="block text-gray-800 font-medium">Projects</a>
    <a @click="open = false" href="/skills" class="block text-gray-800 font-medium">Skills</a>
    <a @click="open = false" href="/blog" class="block text-gray-800 font-medium">Blog</a>
    <a @click="open = false" href="/contact" class="block text-gray-800 font-medium">Contact</a>

</div>
  </div>
</nav>
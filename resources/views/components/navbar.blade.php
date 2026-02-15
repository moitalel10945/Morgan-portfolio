<nav class="bg-surface-light shadow-sm border-b border-gray-200">
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
        <button>
             hamburger icon
        </button>
    </div>
    </div>
  </div>
</nav>
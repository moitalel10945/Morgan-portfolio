<x-guest-layout>
    <livewire:hero-section/>
    <section id="intro" class="bg-surface-light">
      <div class="max-w-5xl mx-auto px-6 py-20">
        <h2 class="mt-6 text-gray-600 text-lg leading-relaxed text-center max-w-3xl mx-auto">About Me</h2>
        <p>Hi, I'm a passionate software developer who turns ideas into fast, secure, and scalable web applications. I love building clean, user-focused solutions and solving real-world problems with code. Let's build something amazing!</p>
      </div>
      
    </section>
    <section id="featuredProjects" class="bg-surface-muted">
      <div class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-gray-900 text-center">
          Featured Projects
      </h2>
      <div class="mt-12">
        <livewire:featured-projects />
    </div>
      </div>
    </section>
</x-guest-layout>
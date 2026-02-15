<?php

use Livewire\Component;

new class extends Component
{
    public string $title="Hi,I am a Software developer";
    public string $subtitle="I build modern ,fast and scalable applications";
};
?>
<section class="bg-gradient-to-b from-surface-light to-surface-muted">
<div class="max-w-5xl mx-auto px-6 py-24 text-center">
    <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
    <p class="text-lg  mt-6 text-gray-600 max-w-2xl mx-auto">{{ $subtitle }}</p>
    <div class="mt-10 flex justify-center gap-4">
        <a href="/projects" class="btn-primary">View my work</a>
    </div>
</div>
</section>
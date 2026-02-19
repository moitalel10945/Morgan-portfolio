<?php

use Livewire\Component;

new class extends Component
{
    public string $title="Hi,I am a Software developer";
    public string $subtitle="I build modern ,fast and scalable applications";
};
?>
<section class="bg-gradient-to-b from-surface-light to-surface-muted">
<div class="max-w-5xl mx-auto px-6 py-24 text-center flex flex-col-reverse md:flex-row  justify-between items-center gap-16">
    <div class="text-center md:text-left flex-1">
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
    <p class="text-lg  mt-6 text-gray-600 max-w-2xl mx-auto">{{ $subtitle }}</p>
    <div class="mt-10 flex justify-center  md:justify-start gap-4">
        <a href="/projects" class="btn-primary">View my work</a>
    </div>
    </div>
    <div>
        <img src="{{asset('storage/images/me.jpg')}}" class="border-4 border-white shadow-2xl object-cover rounded-2xl relative w-72 md:w-96 lg:w-[420px] ">
        <div class="mt-8 flex justify-center md:justify-start gap-8">

            <!-- GitHub -->
            <a href="https://github.com/moitalel10945"
               target="_blank"
               class="flex flex-col items-center gap-2 text-gray-700 hover:text-black transition">
        
               <svg xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 24 24"
               fill="currentColor"
               class="w-6 h-6">
              <path d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 
              0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756
              -1.089-.745.082-.729.082-.729 1.205.085 1.84 1.237 1.84 1.237 
              1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.762-1.605
              -2.665-.305-5.467-1.335-5.467-5.93 
              0-1.31.468-2.38 1.235-3.22-.123-.304-.535-1.527.117-3.176 
              0 0 1.008-.322 3.301 1.23A11.51 11.51 0 0112 5.8c1.02.005 2.045.138 3.003.404
              2.291-1.552 3.297-1.23 3.297-1.23.653 1.649.241 2.872.118 3.176
              .77.84 1.233 1.91 1.233 3.22 
              0 4.607-2.807 5.622-5.48 5.92.43.37.823 1.102.823 2.222 
              0 1.606-.014 2.898-.014 3.293 
              0 .322.216.694.825.576C20.565 21.796 24 17.302 24 12 
              24 5.37 18.627 0 12 0z"/>
          </svg>
        
                <span>GitHub</span>
            </a>
        
        
            <!-- WhatsApp -->
            <a href="https://wa.me/254792549997"
               target="_blank"
               class="flex flex-col items-center gap-2 text-green-600 hover:text-green-700 transition">
        
               <svg xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 24 24"
               fill="currentColor"
               class="w-6 h-6">
              <path d="M12.04 2C6.58 2 2.04 6.54 2.04 12c0 1.77.46 3.43 
              1.26 4.88L2 22l5.27-1.37c1.41.77 3.01 1.17 4.77 1.17 
              5.46 0 10-4.54 10-10S17.5 2 12.04 2zm0 18.2
              c-1.53 0-3.03-.41-4.33-1.19l-.31-.18-3.13.82.84-3.05
              -.2-.31c-.86-1.35-1.31-2.91-1.31-4.49 
              0-4.68 3.81-8.49 8.49-8.49 
              4.68 0 8.49 3.81 8.49 8.49 
              0 4.68-3.81 8.49-8.49 8.49zm4.66-6.34
              c-.26-.13-1.53-.76-1.77-.84-.24-.09-.41-.13-.59.13
              -.17.26-.67.84-.82 1.01-.15.17-.3.2-.56.07
              -.26-.13-1.09-.4-2.07-1.28
              -.76-.68-1.28-1.53-1.43-1.79
              -.15-.26-.02-.4.11-.53.12-.12.26-.3.39-.45
              .13-.15.17-.26.26-.43.09-.17.04-.32-.02-.45
              -.07-.13-.59-1.42-.81-1.95
              -.21-.5-.43-.43-.59-.44h-.5
              c-.17 0-.45.07-.68.32
              -.23.26-.9.88-.9 2.14
              0 1.26.92 2.48 1.05 2.65
              .13.17 1.81 2.76 4.39 3.87
              .61.26 1.08.41 1.45.52
              .61.19 1.16.16 1.6.1
              .49-.07 1.53-.63 1.74-1.24
              .22-.61.22-1.13.15-1.24
              -.07-.11-.24-.17-.5-.3z"/>
          </svg>
      
        
                <span>WhatsApp</span>
            </a>
        
        
            <!-- Instagram -->
            <a href="https://instagram.com/_c.a.p.t.a.in_"
               target="_blank"
               class="flex flex-col items-center gap-2 text-pink-600 hover:text-pink-700 transition">
        
               <svg xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 24 24"
               fill="currentColor"
               class="w-6 h-6">
              <path d="M7.75 2C4.68 2 2 4.68 2 7.75v8.5C2 19.32 
              4.68 22 7.75 22h8.5C19.32 22 22 19.32 
              22 16.25v-8.5C22 4.68 19.32 2 
              16.25 2h-8.5zm0 2h8.5C18.22 4 20 5.78 
              20 7.75v8.5c0 1.97-1.78 3.75-3.75 3.75h-8.5
              C5.78 20 4 18.22 4 16.25v-8.5
              C4 5.78 5.78 4 7.75 4zm8.75 1.5
              a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z
              M12 7a5 5 0 100 10 5 5 0 000-10zm0 2
              a3 3 0 110 6 3 3 0 010-6z"/>
          </svg>
        
                <span>Instagram</span>
            </a>
        
        </div>
    </div>
</div>
</section>
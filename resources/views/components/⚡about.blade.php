<?php

use Livewire\Component;

new class extends Component
{
    public string $bio = "I'm a passionate Software Developer who loves building clean, fast, and scalable web applications. I enjoy transforming ideas into real-world solutions while constantly improving my skills. Clean architecture, smart design, and excellent user experience are my top priorities.";
    public array $education = [
        [
            'level' => 'Primary Education',
            'school' => 'The Oasis School',
            'period' => '2014 - 2018',
            'description' => 'Built a strong academic foundation and scored 407 out of 500 marks, demonstrating excellence and discipline from an early stage.'
        ],
        [
            'level' => 'Secondary Education',
            'school' => "Murang’a High School",
            'period' => '2019 - 2022',
            'description' => 'Attained a B+ in KCSE, excelling in Physics and Mathematics while developing strong analytical and problem-solving skills.'
        ],
        [
            'level' => 'University Education',
            'school' => 'Chuka University',
            'period' => '2023 - 2027',
            'description' => 'Currently pursuing a Bachelor’s Degree in Computer Science, focusing on programming, advanced algorithms, software engineering, networking, and database systems.'
        ],
    ];

    public array $highlights = [
        "Designed and developed custom software solutions for remote clients and individuals",
        "Built dynamic web applications with secure authentication and database integration",
        "Focused on clean code, scalability, and performance optimization",
        "Managed remote collaboration and project delivery efficiently"
    ];
};
?>

<div>
    <section class="bg-surface-light">

        <!-- About Me -->
        <div class="text-center max-w-5xl mx-auto px-6 py-20">
            <h2 class=" mt-6 text-gray-600 text-lg leading-relaxed text-center max-w-3xl mx-auto">About Me</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                {{ $bio }}
            </p>
        </div>
    
        <!-- Education -->
        <div class="mt-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                Education Background
            </h2>
    
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($education as $edu)
                    <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition">
                        <h3 class="text-lg font-semibold text-green-600">
                            {{ $edu['level'] }}
                        </h3>
    
                        <p class="text-sm text-red-500 font-semibold mt-1">
                            {{ $edu['period'] }}
                        </p>
    
                        <h4 class="font-bold text-gray-800 mt-2">
                            {{ $edu['school'] }}
                        </h4>
    
                        <p class="text-gray-600 mt-3 text-sm leading-relaxed">
                            {{ $edu['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    
        <!-- Experience -->
        <div>
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">
                Experience
            </h2>
    
            <div class="bg-gray-50 rounded-2xl p-8 shadow-sm">
                <p class="text-gray-600 leading-relaxed">
                    Since 2022, I have gained hands-on experience building, testing, and deploying real-world software solutions for remote projects and personal clients. My focus remains on performance, scalability, and user-centered design.
                </p>
    
                <h3 class="font-semibold text-gray-800 mt-6 mb-4">
                    Key Highlights:
                </h3>
    
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    @foreach($highlights as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    
    </section>
    
</div>
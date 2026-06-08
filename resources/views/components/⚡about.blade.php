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

    public array $experiences = [
    [
        'position' => 'Freelance Software Developer',
        'bg' => 'images/freelance.jpg',
        'company' => 'Self-Employed',
        'period' => '2022 - 2025',
        'description' => 'Developed custom software solutions for individuals and small businesses while building practical experience in software development and client collaboration.',
        'highlights' => [
            'Built web applications for personal and remote clients',
            'Managed projects from requirements gathering to deployment',
            'Designed secure authentication and database systems',
            'Improved problem-solving and client communication skills',
        ]
    ],

    [
        'position' => 'Software Developer Intern',
        'company' => 'Shiftech Africa',
        'bg' => 'images/shiftech.png',
        'period' => '2025 - Present',
        'description' => 'Supporting the development of software solutions for local clients and company SaaS platforms through system design, testing, presentations, and implementation.',
        'highlights' => [
            'Participated in software design and system architecture',
            'Presented solutions and demonstrations to stakeholders',
            'Performed testing, debugging, and quality assurance',
            'Contributed to company SaaS products',
            'Worked with clients to understand business requirements',
        ]
    ]
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
<div class="mt-16">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
        Experience
    </h2>

    <div class="space-y-12">

        @foreach($experiences as $exp)
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group border border-white/10">
    
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="{{ $exp['bg'] }}"
                         class="w-full h-full object-cover scale-105 group-hover:scale-110 transition duration-700">
                </div>
    
                <!-- Gradient Overlay (better readability + premium feel) -->
                <div class="absolute inset-0 bg-gradient-to-br from-black/90 via-black/70 to-black/40"></div>
    
                <!-- Accent Glow Bar -->
                <div class="absolute left-0 top-0 h-full w-1 bg-green-400"></div>
    
                <!-- Content -->
                <div class="relative p-10 text-white">
    
                    <!-- Header -->
                    <div class="flex justify-between flex-wrap gap-5 items-start">
    
                        <div>
                            <h3 class="text-3xl font-bold tracking-tight">
                                {{ $exp['position'] }}
                            </h3>
    
                            <p class="text-green-300 font-semibold mt-1 text-lg">
                                {{ $exp['company'] }}
                            </p>
                        </div>
    
                        <span class="bg-white/10 backdrop-blur-xl border border-white/20 text-white text-sm px-5 py-2 rounded-full shadow-lg">
                            {{ $exp['period'] }}
                        </span>
                    </div>
    
                    <!-- Description -->
                    <p class="mt-6 text-gray-200 leading-relaxed max-w-3xl">
                        {{ $exp['description'] }}
                    </p>
    
                    <!-- Highlights Section -->
                    <div class="mt-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6">
    
                        <h4 class="text-sm font-semibold text-white/80 mb-4 uppercase tracking-wider">
                            Key Contributions
                        </h4>
    
                        <ul class="space-y-3">
                            @foreach($exp['highlights'] as $item)
                                <li class="flex items-start gap-3 text-gray-200">
                                    <span class="text-green-400 mt-1 text-sm">▹</span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
    
                    </div>
    
                </div>
            </div>
        @endforeach
    
    </div>
</div>
    
    </section>
    
</div>
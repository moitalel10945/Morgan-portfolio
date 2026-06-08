<?php
use Livewire\Component;
?>

<div>
    <section class="bg-surface-light">

        <!-- About Me -->
        <div class="text-center max-w-5xl mx-auto px-6 py-20">
            <h2 class=" mt-6 text-gray-600 text-lg leading-relaxed text-center max-w-3xl mx-auto">About Me</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                <?php echo e($bio); ?>

            </p>
        </div>
    
        <!-- Education -->
        <div class="mt-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                Education Background
            </h2>
    
            <div class="grid md:grid-cols-3 gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition">
                        <h3 class="text-lg font-semibold text-green-600">
                            <?php echo e($edu['level']); ?>

                        </h3>
    
                        <p class="text-sm text-red-500 font-semibold mt-1">
                            <?php echo e($edu['period']); ?>

                        </p>
    
                        <h4 class="font-bold text-gray-800 mt-2">
                            <?php echo e($edu['school']); ?>

                        </h4>
    
                        <p class="text-gray-600 mt-3 text-sm leading-relaxed">
                            <?php echo e($edu['description']); ?>

                        </p>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    
        <!-- Experience -->
<div class="mt-16">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
        Experience
    </h2>

    <div class="space-y-12">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group border border-white/10">
    
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="<?php echo e($exp['bg']); ?>"
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
                                <?php echo e($exp['position']); ?>

                            </h3>
    
                            <p class="text-green-300 font-semibold mt-1 text-lg">
                                <?php echo e($exp['company']); ?>

                            </p>
                        </div>
    
                        <span class="bg-white/10 backdrop-blur-xl border border-white/20 text-white text-sm px-5 py-2 rounded-full shadow-lg">
                            <?php echo e($exp['period']); ?>

                        </span>
                    </div>
    
                    <!-- Description -->
                    <p class="mt-6 text-gray-200 leading-relaxed max-w-3xl">
                        <?php echo e($exp['description']); ?>

                    </p>
    
                    <!-- Highlights Section -->
                    <div class="mt-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6">
    
                        <h4 class="text-sm font-semibold text-white/80 mb-4 uppercase tracking-wider">
                            Key Contributions
                        </h4>
    
                        <ul class="space-y-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exp['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                <li class="flex items-start gap-3 text-gray-200">
                                    <span class="text-green-400 mt-1 text-sm">▹</span>
                                    <span><?php echo e($item); ?></span>
                                </li>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </ul>
    
                    </div>
    
                </div>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    
    </div>
</div>
    
    </section>
    
</div><?php /**PATH C:\Users\Administrator\Desktop\portfolio\storage\framework/views/livewire/views/a7fa0d7a.blade.php ENDPATH**/ ?>
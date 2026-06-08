<?php
use Livewire\Component;
use App\Models\Project;
?>

<div class="grid md:grid-cols-2 gap-8 lg:grid-cols-3 mt-4">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $this->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
    <div class="bg-card rounded-xl shadow-sm hover:shadow-md transition duration-300 flex flex-col overflow-hidden">
        <div class="h-48 w-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 
            flex items-center justify-center text-white text-3xl font-bold">
    <?php echo e(strtoupper($project->title)); ?>

</div>

        <div class="p-6 flex flex-col flex-1">
            <h3 class="font-semibold text-lg text-gray-900"><?php echo e($project->title); ?></h3>
        <p class="text-gray-600 mt-3 flex-1"><?php echo e($project->description); ?></p>
        </div>
        
        <div class="flex gap-4 mt-6">
            <a href="<?php echo e($project->github_url); ?>" target="_blank" class="text-primary font-medium hover:underline">GitHub</a>
            <a href="<?php echo e($project->live_url); ?>" target="_blank" class="text-primary font-medium hover:underline">Live</a>
        </div>
    </div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
</div><?php /**PATH C:\Users\Administrator\Desktop\portfolio\storage\framework/views/livewire/views/fe43cbe1.blade.php ENDPATH**/ ?>
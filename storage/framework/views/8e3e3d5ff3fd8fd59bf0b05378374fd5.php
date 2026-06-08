<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-2xl">Projects</h1>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="px-4 py-2 bg-blue-500 text-white rounded">+ Add Project</a>
    </div>
    <div class="bg-white shadow roumded p-4">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="text-left p-2">Title</th>
                    <th class="text-left p-2">Status</th>
                    <th class="text-left p-2">Action</th>
                    <th class="text-left p-2">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <tr class="border-b" <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processElementKey('projet-{{ $project->id }}', get_defined_vars()); ?>wire:key="projet-<?php echo e($project->id); ?>">
                    <td class="p-2"><?php echo e($project->title); ?></td>
                    <td class="p-2"><?php echo e($project->status); ?></td>
                    <td class="p-2 space-x-2">
                        <a href="<?php echo e(route('admin.projects.edit',$project)); ?>" class="text-blue-600">Edit</a>
                        <button  wire:click="delete(<?php echo e($project->id); ?>)" class="text-red-600">Delete</button>
                    </td>
                </tr>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <tr>
                    <td class="text-center p-6 text-gray-500 " colspan="4">NO projects yet</td>
                </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Desktop\portfolio\resources\views/livewire/admin/projects/index.blade.php ENDPATH**/ ?>
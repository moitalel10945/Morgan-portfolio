<?php if (isset($component)) { $__componentOriginal15e85683d51cc85a946d987b2bfcbe73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15e85683d51cc85a946d987b2bfcbe73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::guest','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


  <section class="bg-surface-light">
      <div class="max-w-6xl mx-auto px-6 py-10">

          <h1 class="text-3xl font-bold text-gray-900 text-center">
              Blog
          </h1>

          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->isEmpty()): ?>
              <p class="text-center text-gray-500 text-xl mt-8">
                  No blog posts yet.
              </p>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

          <div class=" grid gap-8 md:grid-cols-2 lg:grid-cols-3 mt-10">

              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <a href="<?php echo e(route('blog.show', $post->slug)); ?>"
                     class="bg-card rounded-xl shadow-sm hover:shadow-md transition duration-300 overflow-hidden flex flex-col">
                     <div class="h-48 w-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 
                     flex items-center justify-center text-white text-3xl font-bold">
             <?php echo e(strtoupper($post->title)); ?>

            </div>
                      <div class="p-6 flex flex-col flex-1">

                          <h2 class="font-semibold text-lg text-gray-900">
                              <?php echo e($post->title); ?>

                          </h2>

                          <p class="text-sm text-gray-500 mt-3">
                              <?php echo e($post->created_at->format('M d, Y')); ?>

                          </p>

                      </div>

                  </a>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

          </div>

      </div>
  </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15e85683d51cc85a946d987b2bfcbe73)): ?>
<?php $attributes = $__attributesOriginal15e85683d51cc85a946d987b2bfcbe73; ?>
<?php unset($__attributesOriginal15e85683d51cc85a946d987b2bfcbe73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15e85683d51cc85a946d987b2bfcbe73)): ?>
<?php $component = $__componentOriginal15e85683d51cc85a946d987b2bfcbe73; ?>
<?php unset($__componentOriginal15e85683d51cc85a946d987b2bfcbe73); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Administrator\Desktop\portfolio\resources\views/blog/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('description'); ?>
    <?php
        $data = metaData('faq');
    ?>
    <?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?>
    <?php echo e(asset($data->image)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e($data->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="breadcrumbs breadcrumbs-height">
    <div class="container">
      <div class="row align-items-center breadcrumbs-height">
        <div class="col-12 justify-content-center text-center">
          <div class="breadcrumb-title rt-mb-10">   <?php echo e(__('faq')); ?></div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="<?php echo e(route('website.home')); ?>">  <?php echo e(__('home')); ?></a></li>
              <li class="breadcrumb-item active" aria-current="page">   <?php echo e(__('faq')); ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Faq Starts-->
  <div class="container">
    <div class="tw-max-w-[648px] mx-auto faq-page tw-py-8">
        <?php
            $faqCount = 0;
        ?>
        <?php $__currentLoopData = $faq_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="rt-faq rt-pt-30 rt-pt-md-30">
                <?php if(count($cat->faqs) > 0): ?>
                    <h6 class="ft-wt-5 tw-text-2xl text-primary-500 text-capitalize rt-mb-24"><?php echo e($cat->name); ?></h6>
                    <?php $__currentLoopData = $cat->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion rt-mb-24 ">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo e($faq->id); ?>">
                                    <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="true"
                                        aria-controls="collapse<?php echo e($faq->id); ?>">
                                        <?php echo e($faq->question); ?>

                                    </button>
                                </h2>
                                <div id="collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?php echo e($faq->id); ?>">
                                    <div class="accordion-body accordion-pad">
                                        <?php echo $faq->answer; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php
                    $faqCount += count($cat->faqs);
                ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($faqCount == 0): ?>
            <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
</div>

  <!-- Faq End-->


<?php if (isset($component)) { $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a = $attributes; } ?>
<?php $component = App\View\Components\Website\SubscribeNewsletter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.subscribe-newsletter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\SubscribeNewsletter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $attributes = $__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__attributesOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a)): ?>
<?php $component = $__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a; ?>
<?php unset($__componentOriginalf832c0f0b551a3ae4f576bd7e1fda30a); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/faq.blade.php ENDPATH**/ ?>
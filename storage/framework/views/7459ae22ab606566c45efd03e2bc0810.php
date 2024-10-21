<?php $__env->startSection('title'); ?>
    <?php echo e(__('Verification Documents')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                
                <?php if (isset($component)) { $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Company\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $attributes = $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $component = $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard-right-header">
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <h2 class="tw-text-2xl tw-font-medium tw-text-[#18191C] tw-mb-8">
                            <?php echo e(__('Submit Documents')); ?>

                        </h2>
                        <form method="POST"
                              action="<?php echo e(route('company.verify.documents.store')); ?>"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-8">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'Image of your NID/Driving Lisence/Passport ','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                                <input name="document" type="file"
                                       data-show-errors="true" data-width="100%"

                                       data-default-file="<?php echo e($company->getFirstMedia('document') ? $company->getFirstMedia('document')->getFullUrl() : ""); ?>"
                                       <?php echo e($company->document_verified_at ? "disabled='disabled'"  : ''); ?>

                                       class="dropify">
                            </div>
                            <?php $__errorArgs = ['document'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div>
                                <span class="text-danger font-size-13 d-block mt-4"><strong><?php echo e($message); ?></strong></span>
                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <?php if(!$company->document_verified_at): ?>
                            <button type="submit" class="btn btn-primary mt-4"> Upload</button>
                                <?php if($company->getFirstMedia('document')): ?>
                                <div style=" color: red ; margin-top: 12px; ">


                                    <svg
                                        style="width: 32px ; height: 32px ;"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <span>Unverified</span>

                                </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div style=" color: green ; margin-top: 12px; ">
                                    <svg
                                        style="width: 32px ; height: 32px ;"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Verified</span>

                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        input[type=file]{
            position:static;
            opacity: 1;
            width: auto;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/dropify/css/dropify.min.css">


<?php $__env->stopSection(); ?>


<?php $__env->startSection('frontend_scripts'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/dropify/js/dropify.min.js"></script>

    <script>
        $('.dropify').dropify();
    </script>
    <script>

        $(document).ready(function (){
            $('#nid_front').on('change',function (){
                $('#nid_front_form').submit();
            })
            $('#nid_back').on('change',function (){
                $('#nid_front_form').submit();
            })
            $('#tin').on('change',function (){
                $('#nid_front_form').submit();
            })
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/company/verify-documents.blade.php ENDPATH**/ ?>
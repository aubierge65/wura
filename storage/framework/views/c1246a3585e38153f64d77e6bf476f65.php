<?php $__env->startSection('title'); ?>
    <?php echo e(__('Document Lists')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('Submitted Documents')); ?>


                        </h3>

                    </div>

                    <div id="example1_wrapper" class="">

                            <div class="col-md-12">
                                <?php if(!$company->getFirstMedia('document')): ?>
                                    <h4  class="mt-5 mb-5 ml-2">Document Not Given</h4>
                                <?php else: ?>

                                        <div class="form-group col-8" style="margin-left: auto ; margin-right: auto">
                                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['class' => 'mt-4','name' => 'Image of your NID/Driving Lisence/Passport ','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                   <?php echo e($company->getFirstMedia('document') ? "disabled='disabled'"  : ''); ?>

                                                   class="dropify">
                                            <form class="my-4" action="<?php echo e(route('company.verify.documents.download',$company)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden"  name="file_type" value="document">
                                                <button class="btn btn-primary" type="submit">Download</button>
                                            </form>
                                            <label for="document_verify" style="display: flex">
                                                Verified
                                                <input id="document_verify"
                                                       <?php echo e($company->document_verified_at ? 'checked' : ''); ?>


                                                       type="checkbox" style="width: 24px ; height: 24px ; margin-left: 6px" >
                                            </label>
                                        </div>



                                <?php endif; ?>
                            </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 35px;
            height: 19px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 3px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.success:checked+.slider {
            background-color: #28a745;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(15px);
            -ms-transform: translateX(15px);
            transform: translateX(15px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/dropify/js/dropify.min.js"></script>

    <script>
        $('.dropify').dropify();
    </script>
    <script>
        $('#document_verify').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;

            var companyId = <?php echo e($company->id); ?>;

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('admin.document.verify.change',$company)); ?>',

                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });

            
            
            
            
            
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/company/document.blade.php ENDPATH**/ ?>
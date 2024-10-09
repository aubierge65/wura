<?php $__env->startSection('title'); ?>
    <?php echo e(__('applied_jobs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $userr = auth()->user();
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap justify-content-between">
                        <h3 class="card-title line-height-36"><?php echo e(__('applied_jobs')); ?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            
                            
                            
                        </div>
                    </div>
                </div>

                
                <form id="formSubmit" action="<?php echo e(route('job.index')); ?>" method="GET" onchange="this.submit();">
                    <div class="card-body border-bottom row">
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('search')); ?></label>
                            <input name="title" type="text" placeholder="<?php echo e(__('search')); ?>" class="form-control"
                                value="<?php echo e(request('title')); ?>">
                        </div>
                    </div>
                </form>
                <div class="card-body table-responsive p-0 m-0">
                    <?php echo $__env->make('backend.layouts.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">

                        <div class="col-sm-12">
                            <table class="ll-table table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th width="10%"><?php echo e(__('candidate')); ?></th>
                                        <th width="10%"><?php echo e(__('company')); ?></th>
                                        <th width="10%"><?php echo e(__('job')); ?></th>
                                        <th width="10%"><?php echo e(__('cover_latter')); ?></th>
                                        <?php if(userCan('job.update') || userCan('job.delete')): ?>
                                            <th width="10%"><?php echo e(__('action')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($applied_jobs->count() > 0): ?>
                                        <?php $__currentLoopData = $applied_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                    <td tabindex="0">
                                                        <a href="<?php echo e(route('candidate.show', $job->appliedcandidate->id)); ?>" class="company">
                                                            <?php if($job->appliedcandidate->user->name): ?>
                                                                <img src="<?php echo e(asset($job->appliedcandidate->photo)); ?>" alt="image">
                                                            <?php else: ?>
                                                                <?php if (isset($component)) { $__componentOriginal06efc200d55a4c261848648392ac740f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal06efc200d55a4c261848648392ac740f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.briefcase-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.briefcase-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal06efc200d55a4c261848648392ac740f)): ?>
<?php $attributes = $__attributesOriginal06efc200d55a4c261848648392ac740f; ?>
<?php unset($__attributesOriginal06efc200d55a4c261848648392ac740f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06efc200d55a4c261848648392ac740f)): ?>
<?php $component = $__componentOriginal06efc200d55a4c261848648392ac740f; ?>
<?php unset($__componentOriginal06efc200d55a4c261848648392ac740f); ?>
<?php endif; ?>
                                                            <?php endif; ?>
                                                            <div>
                                                                <p>
                                                                    <span><?php echo e($job->appliedcandidate && $job->appliedcandidate->user ? $job->appliedcandidate->user->name : " "); ?></span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td tabindex="0">
                                                        <a href="<?php echo e(route('company.show', $job->job->company->id)); ?>" class="company">
                                                            <?php if($job->job->company): ?>
                                                                <img src="<?php echo e(asset($job->job->company->logo_url)); ?>" alt="image">
                                                            <?php else: ?>
                                                                <?php if (isset($component)) { $__componentOriginal06efc200d55a4c261848648392ac740f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal06efc200d55a4c261848648392ac740f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.briefcase-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.briefcase-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal06efc200d55a4c261848648392ac740f)): ?>
<?php $attributes = $__attributesOriginal06efc200d55a4c261848648392ac740f; ?>
<?php unset($__attributesOriginal06efc200d55a4c261848648392ac740f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06efc200d55a4c261848648392ac740f)): ?>
<?php $component = $__componentOriginal06efc200d55a4c261848648392ac740f; ?>
<?php unset($__componentOriginal06efc200d55a4c261848648392ac740f); ?>
<?php endif; ?>
                                                            <?php endif; ?>
                                                            <div>
                                                                <p>
                                                                    <span><?php echo e($job->job->company && $job->job->company->user ? $job->job->company->user->name : $job->job->company_name); ?></span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td tabindex="0">
                                                        <a href="<?php echo e(route('job.show', $job->job->id)); ?>" class="company">
                                                            <p><?php echo e($job->job->title); ?></p>
                                                        </a>
                                                    </td>
                                                    <td tabindex="0">
                                                        <a href="<?php echo e(route('job.show', $job->id)); ?>" class="company">
                                                            <p><?php echo e($job->cover_letter); ?></p>
                                                        </a>
                                                    </td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('details')); ?>"
                                                        href="<?php echo e(route('applied.job.show', $job->id)); ?>"
                                                        class="btn ll-btn ll-border-none"><?php echo e(__('view_details')); ?>

                                                        <?php if (isset($component)) { $__componentOriginalda561501dff59ec6eab6d19aa5897b8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-btn-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-btn-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $attributes = $__attributesOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__attributesOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f)): ?>
<?php $component = $__componentOriginalda561501dff59ec6eab6d19aa5897b8f; ?>
<?php unset($__componentOriginalda561501dff59ec6eab6d19aa5897b8f); ?>
<?php endif; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" class="text-center"><?php echo e(__('no_data_found')); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if($applied_jobs->total() > $applied_jobs->perPage()): ?>
                        <div class="mt-3 d-flex justify-content-center">
                            <?php echo e($applied_jobs->links()); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bulk_import_modal" tabindex="-1" role="dialog"
        aria-labelledby="bulk_import_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('bulk_import')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.job.bulk.import')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="alert alert-warning" role="alert">
                            Before importing, please download the example file and match the fields structure. If any field
                            data is missing, the system will generate it
                        </div>
                        <div class="form-group">
                            <label for="experience"><?php echo e(__('example_file')); ?></label> <br>
                            <a href="/backend/dummy/job_example.xlsx" target="_blank" class="btn btn-primary btn-block">
                                <i class="fas fa-download"></i>
                                <?php echo e(__('download')); ?> <?php echo e(__('example_file')); ?>

                            </a>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="company_id"><?php echo e(__('company')); ?></label> <br>
                            <select required name="company"
                                class="form-control select2bs4 <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="experience">
                                <option value=""> <?php echo e(__('select')); ?> <?php echo e(__('company')); ?></option>
                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($company->id == old('company') ? 'selected' : ''); ?>

                                        value="<?php echo e($company->id); ?>"> <?php echo e($company->user->name ?? ''); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="experience"><?php echo e(__('choose_file')); ?></label> <br>
                            <input type="file" class="form-control dropify" name="import_file"
                                data-allowed-file-extensions='["csv", "xlsx","xls"]' accept=".csv,.xlsx,.xls"
                                data-max-file-size="3M">
                            <?php $__errorArgs = ['import_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback d-block" role="alert"><?php echo e(__($message)); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            validate();
            $('#title').keyup(validate);
        });

        function validate() {
            if ($('#title')?.val()?.length > 0) {
                $('#crossB').removeClass('d-none');
            } else {
                $('#crossB').addClass('d-none');
            }
        }

        function RemoveFilter(id) {
            $('#' + id).val('');
            $('#formSubmit').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .select2-results__option[aria-selected=true] {
            display: none;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice {
            color: #fff;
            border: 1px solid #fff;
            background: #007bff;
            border-radius: 30px;
        }

        .select2-container--bootstrap4 .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }

        /* Style  radio button */
        .expired_radio::after {
            content: "";
            display: inline-block;
            border-radius: 50%;
            margin-right: 8px;
            background-color: red;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/Job/applied_index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('candidate_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title line-height-36"><?php echo e(__('candidate_list')); ?></h3>
                        <div>
                            <div class="btn-group">
                                <a href="#" class="btn bg-primary">
                                    <i class="fas fa-download mr-1"></i> Export
                                </a>
                                <button type="button" class="btn bg-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo e(route('candidate.export', 'csv')); ?>">CSV</a>
                                    <a class="dropdown-item" href="<?php echo e(route('candidate.export', 'pdf')); ?>">PDF</a>
                                    <a class="dropdown-item" href="<?php echo e(route('candidate.export', 'xlsx')); ?>">Excel</a>
                                    <!-- Add more options for different export formats if needed -->
                                </div>
                            </div>
                            
                            <?php if(userCan('candidate.create')): ?>
                                <a href="<?php echo e(route('candidate.create')); ?>" class="btn bg-primary"><i
                                        class="fas fa-plus mr-1"></i> <?php echo e(__('create')); ?>

                                </a>
                            <?php endif; ?>
                            <?php if(request('keyword') || request('ev_status') || request('sort_by')): ?>
                                <a href="<?php echo e(route('company.index')); ?>" class="btn bg-danger"><i
                                        class="fas fa-times"></i>&nbsp; <?php echo e(__('clear')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                
                <form id="formSubmit" action="<?php echo e(route('candidate.index')); ?>" method="GET" onchange="this.submit();">
                    <div class="card-body border-bottom row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('search')); ?></label>
                            <input name="keyword" type="text" placeholder="<?php echo e(__('search')); ?>" class="form-control"
                                value="<?php echo e(request('keyword')); ?>">
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('email_verification')); ?></label>
                            <select name="ev_status" class="form-control select2bs4 w-100-p">
                                <option value="">
                                    <?php echo e(__('all')); ?>

                                </option>
                                <option <?php echo e(request('ev_status') == 'true' ? 'selected' : ''); ?> value="true">
                                    <?php echo e(__('verified')); ?>

                                </option>
                                <option <?php echo e(request('ev_status') == 'false' ? 'selected' : ''); ?> value="false">
                                    <?php echo e(__('not_verified')); ?>

                                </option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('sort_by')); ?></label>
                            <select name="sort_by" class="form-control select2bs4 w-100-p">
                                <option <?php echo e(!request('sort_by') || request('sort_by') == 'latest' ? 'selected' : ''); ?>

                                    value="latest" selected>
                                    <?php echo e(__('latest')); ?>

                                </option>
                                <option <?php echo e(request('sort_by') == 'oldest' ? 'selected' : ''); ?> value="oldest">
                                    <?php echo e(__('oldest')); ?>

                                </option>
                            </select>
                        </div>
                    </div>
                </form>

                
                <div class="card-body table-responsive p-0">
                    <table class="ll-table table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th><?php echo e(__('candidate')); ?></th>
                                <th><?php echo e(__('role')); ?>/<?php echo e(__('position')); ?></th>
                                <th><?php echo e(__('applied_jobs')); ?></th>
                                <?php if(userCan('candidate.update')): ?>
                                <th width="10%"><?php echo e(__('account')); ?> <?php echo e(__('status')); ?></th>
                                <?php endif; ?>
                                <?php if(userCan('candidate.update')): ?>
                                <th><?php echo e(__('email_verification')); ?></th>
                                <?php endif; ?>
                                <th><?php echo e(__('joined_date')); ?></th>
                                <?php if(userCan('candidate.update') || userCan('candidate.delete')): ?>
                                    <th width="12%"><?php echo e(__('action')); ?></th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($candidates->count() > 0): ?>
                                <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td tabindex="0">
                                            <a href="<?php echo e(route('candidate.show', $candidate->id)); ?>"  class="company">
                                                <img src="<?php echo e($candidate->photo); ?>" alt="image">
                                                <div>
                                                    <h2><?php echo e($candidate->user->name); ?></h2>
                                                    <p><?php echo e($candidate->user->email); ?></p>
                                                </div>
                                            </a>
                                        </td>
                                        <td tabindex="0">
                                            <p class="job-role"><?php echo e($candidate->jobRole->name ?? ''); ?></p>
                                        </td>
                                        <td tabindex="0">
                                            <?php echo e($candidate->applied_jobs_count); ?> <?php echo e(__('applied_jobs')); ?>

                                        </td>
                                        <?php if(userCan('candidate.update')): ?>
                                            <td tabindex="0">
                                                <a href="javascript:void(0)" class="active-status">
                                                    <label class="switch ">
                                                        <input data-id="<?php echo e($candidate->user_id); ?>" type="checkbox"
                                                            class="success status-switch change-active-status"
                                                            <?php echo e($candidate->user->status == 1 ? 'checked' : ''); ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <p class="<?php echo e($candidate->user->status == 1 ? 'active' : ''); ?>" id="status_<?php echo e($candidate->user_id); ?>">
                                                        <?php echo e($candidate->user->status == 1 ? __('activated') : __('deactivated')); ?></p>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                        <?php if(userCan('candidate.update')): ?>
                                            <td tabindex="0">
                                                <a href="javascript:void(0)" class="active-status">
                                                    <label class="switch ">
                                                        <input data-userid="<?php echo e($candidate->user_id); ?>" type="checkbox"
                                                            class="success email-verification-switch"
                                                            <?php echo e($candidate->user->email_verified_at ? 'checked' : ''); ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <p class="<?php echo e($candidate->user->email_verified_at ? 'active' : ''); ?>" id="verification_status_<?php echo e($candidate->user_id); ?>">
                                                        <?php echo e($candidate->user->email_verified_at ? __('verified') : __('unverified')); ?></p>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                        <td tabindex="0">
                                            <?php echo e(Carbon\Carbon::parse($candidate->created_at)->format('d M, Y')); ?>

                                        </td>
                                        <?php if(userCan('candidate.update') || userCan('candidate.delete')): ?>
                                            <td>
                                                <?php if(userCan('candidate.view')): ?>
                                                    <a href="<?php echo e(route('candidate.show', $candidate->id)); ?>"
                                                        class="btn ll-btn ll-border-none">
                                                        <?php echo e(__('view_profile')); ?>

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
                                                <?php endif; ?>
                                                <?php if(userCan('candidate.update')): ?>
                                                    <a href="<?php echo e(route('candidate.edit', $candidate->id)); ?>"
                                                        class="btn ll-p-0">
                                                        <?php if (isset($component)) { $__componentOriginalfbdacdae48d0cffd33965780e1a3c506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbdacdae48d0cffd33965780e1a3c506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-edit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbdacdae48d0cffd33965780e1a3c506)): ?>
<?php $attributes = $__attributesOriginalfbdacdae48d0cffd33965780e1a3c506; ?>
<?php unset($__attributesOriginalfbdacdae48d0cffd33965780e1a3c506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbdacdae48d0cffd33965780e1a3c506)): ?>
<?php $component = $__componentOriginalfbdacdae48d0cffd33965780e1a3c506; ?>
<?php unset($__componentOriginalfbdacdae48d0cffd33965780e1a3c506); ?>
<?php endif; ?>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if(userCan('candidate.delete')): ?>
                                                    <form action="<?php echo e(route('candidate.destroy', $candidate->id)); ?>"
                                                        method="POST" class="d-inline">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button
                                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                            class="btn ll-p-0">
                                                            <?php if (isset($component)) { $__componentOriginal6c69d63d648b4fe134f027cfc6213af7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c69d63d648b4fe134f027cfc6213af7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-delete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c69d63d648b4fe134f027cfc6213af7)): ?>
<?php $attributes = $__attributesOriginal6c69d63d648b4fe134f027cfc6213af7; ?>
<?php unset($__attributesOriginal6c69d63d648b4fe134f027cfc6213af7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c69d63d648b4fe134f027cfc6213af7)): ?>
<?php $component = $__componentOriginal6c69d63d648b4fe134f027cfc6213af7; ?>
<?php unset($__componentOriginal6c69d63d648b4fe134f027cfc6213af7); ?>
<?php endif; ?>
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8">
                                        <?php echo e(__('no_data_found')); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php if($candidates->count()): ?>
                        <div class="mt-3 d-flex justify-content-center">
                            <?php echo e($candidates->onEachSide(1)->links()); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
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
    <script>
        $('.status-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('candidate.status.change')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });

            if (status == 1) {
                $(`#status_${id}`).text("<?php echo e(__('activated')); ?>")
            }else{
                $(`#status_${id}`).text("<?php echo e(__('deactivated')); ?>")
            }
        });

        $('.email-verification-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('userid');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('company.verify.change')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });

            if (status == 1) {
                $(`#verification_status_${id}`).text("<?php echo e(__('verified')); ?>")
            }else{
                $(`#verification_status_${id}`).text("<?php echo e(__('unverified')); ?>")
            }
        });
    </script>
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

        $('#formSubmit').on('change', function() {
            $(this).submit();
        });

        function RemoveFilter(id) {
            $('#' + id).val('');
            $('#formSubmit').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/candidate/index.blade.php ENDPATH**/ ?>
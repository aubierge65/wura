<?php $__env->startSection('title'); ?>
    <?php echo e(__('company_list')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title line-height-36"><?php echo e(__('company_list')); ?></h3>
                           <div>
                                <?php if(userCan('company.create')): ?>
                                    <a href="<?php echo e(route('company.create')); ?>"
                                        class="btn bg-primary"><i
                                            class="fas fa-plus mr-1"></i> <?php echo e(__('create')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if(request('keyword') || request('ev_status') || request('sort_by') || request('organization_type') || request('industry_type')): ?>
                                    <a href="<?php echo e(route('company.index')); ?>"
                                        class="btn bg-danger"><i
                                            class="fas fa-times"></i>&nbsp; <?php echo e(__('clear')); ?>

                                    </a>
                                <?php endif; ?>
                           </div>
                        </div>
                    </div>

                    
                    <form id="formSubmit"  action="<?php echo e(route('company.index')); ?>" method="GET" onchange="this.submit();">
                        <div class="card-body border-bottom row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('search')); ?></label>
                                <input name="keyword" type="text" placeholder="<?php echo e(__('search')); ?>" class="form-control" value="<?php echo e(request('keyword')); ?>">
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('organization_type')); ?></label>
                                <select name="organization_type" class="form-control select2bs4">
                                    <option value="">
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $organization_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(request('organization_type') == $organization_type->id ? 'selected' : ''); ?> value="<?php echo e($organization_type->id); ?>">
                                            <?php echo e($organization_type->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('industry_type')); ?></label>
                                <select name="industry_type" class="form-control select2bs4">
                                    <option value="">
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $industry_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(request('industry_type') == $industry_type->id ? 'selected' : ''); ?> value="<?php echo e($industry_type->id); ?>">
                                            <?php echo e($industry_type->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('email_verification')); ?></label>
                                <select name="ev_status" class="form-control select2bs4">
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
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('sort_by')); ?></label>
                                <select name="sort_by" class="form-control select2bs4">
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
                        <?php echo $__env->make('backend.layouts.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table class="ll-table table table-hover text-nowrap">
                            <thead>
                                <tr class="text-center">
                                    <th><?php echo e(__('company')); ?></th>
                                    <th><?php echo e(__('active')); ?> <?php echo e(__('job')); ?></th>
                                    <th><?php echo e(__('organization')); ?>/<?php echo e(__('country')); ?></th>
                                    <th><?php echo e(__('establishment_date')); ?></th>
                                    <?php if(userCan('company.update')): ?>
                                        <th><?php echo e(__('account')); ?> <?php echo e(__('status')); ?></th>
                                    <?php endif; ?>
                                    <?php if(userCan('company.update')): ?>
                                        <th><?php echo e(__('email_verification')); ?></th>
                                    <?php endif; ?>
                                    <?php if(userCan('company.update')): ?>
                                        <th><?php echo e(__('profile')); ?> <?php echo e(__('status')); ?></th>
                                    <?php endif; ?>
                                    <?php if(userCan('company.update') || userCan('compnay.delete')): ?>
                                        <th width="12%">
                                            <?php echo e(__('action')); ?>

                                        </th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <a href='<?php echo e(route('company.show', $company->id)); ?>' class="company">
                                                <img src="<?php echo e($company->logo_url); ?>" alt="Logo">
                                                <div>
                                                    <h4><?php echo e($company->user->name); ?>

                                                        <?php if($company->is_profile_verified): ?>
                                                        <svg
                                                            style="width: 24px ; height: 24px ; color: green"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        <?php endif; ?>
                                                    </h4>
                                                    <p><?php echo e($company->user->email); ?></p>
                                                </div>
                                                <div>


                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('company.show', $company->id)); ?>">
                                                <?php echo e($company->active_jobs); ?> <?php echo e(__("active_jobs")); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <p class="highlight"><?php echo e($company->organization->name); ?></p>
                                            <p class="highlight mb-0"><?php if (isset($component)) { $__componentOriginal6806772e024cacdcba678c10f3729f7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6806772e024cacdcba678c10f3729f7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-country','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-country'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6806772e024cacdcba678c10f3729f7d)): ?>
<?php $attributes = $__attributesOriginal6806772e024cacdcba678c10f3729f7d; ?>
<?php unset($__attributesOriginal6806772e024cacdcba678c10f3729f7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6806772e024cacdcba678c10f3729f7d)): ?>
<?php $component = $__componentOriginal6806772e024cacdcba678c10f3729f7d; ?>
<?php unset($__componentOriginal6806772e024cacdcba678c10f3729f7d); ?>
<?php endif; ?><?php echo e($company->country); ?></p>
                                        </td>
                                        <td>
                                            <p class="highlight mb-0"><?php echo e($company->establishment_date ? date('j F, Y', strtotime($company->establishment_date)):'-'); ?></p>
                                        </td>
                                        <?php if(userCan('company.update')): ?>
                                            <td tabindex="0">
                                                <a href="#" class="active-status">
                                                    <label class="switch ">
                                                        <input data-id="<?php echo e($company->user_id); ?>" type="checkbox"
                                                            class="success status-switch"
                                                            <?php echo e($company->user->status == 1 ? 'checked' : ''); ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <p style="min-width:70px;" class="<?php echo e($company->user->status == 1 ? 'active' : ''); ?>" id="status_<?php echo e($company->user_id); ?>"><?php echo e($company->user->status == 1 ? __('activated') : __('deactivated')); ?></p>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                        <?php if(userCan('company.update')): ?>
                                            <td tabindex="0">
                                                <a href="#" class="active-status">
                                                    <label class="switch ">
                                                        <input data-userid="<?php echo e($company->user_id); ?>" type="checkbox"
                                                            class="success email-verification-switch"
                                                            <?php echo e($company->user->email_verified_at ? 'checked' : ''); ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <p style="min-width:70px" class="<?php echo e($company->user->email_verified_at ? 'active' : ''); ?>" id="verification_status_<?php echo e($company->user_id); ?>"><?php echo e($company->user->email_verified_at ? __('verified') : __('unverified')); ?></p>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                        <?php if(userCan('company.update') || userCan('compnay.delete')): ?>
                                            <td tabindex="0">
                                                <a href="#" class="active-status">
                                                    <label class="switch ">
                                                        <input data-companyid="<?php echo e($company->id); ?>" type="checkbox"
                                                               class="success profile-verification-switch"
                                                            <?php echo e($company->is_profile_verified ? 'checked' : ''); ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <p style="min-width:70px" class="<?php echo e($company->is_profile_verified ? 'active' : ''); ?>" id="profile_status_<?php echo e($company->id); ?>"><?php echo e($company->is_profile_verified ? __('verified') : __('unverified')); ?></p>
                                                </a>
                                                <div class="mt-2">
                                                    <a href="<?php echo e(route('admin.company.documents',$company)); ?>">View Documents</a>
                                                </div>
                                            </td>
                                        <?php endif; ?>

                                    <?php if(userCan('company.update') || userCan('compnay.delete')): ?>
                                            <td>
                                                <?php if(userCan('company.view')): ?>
                                                    <a href="<?php echo e(route('company.show', $company->id)); ?>"
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
                                                <?php if(userCan('company.update')): ?>
                                                    <a href="<?php echo e(route('company.edit', $company->id)); ?>"
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
                                                <?php if(userCan('company.delete')): ?>
                                                    <form action="<?php echo e(route('company.destroy', $company->id)); ?>"
                                                        method="POST" class="d-inline">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button
                                                            onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                            class="btn ll-p-0"><?php if (isset($component)) { $__componentOriginal6c69d63d648b4fe134f027cfc6213af7 = $component; } ?>
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
<?php endif; ?></i>
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10">
                                            <p><?php echo e(__('no_data_found')); ?>...</p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php if($companies->count()): ?>
                            <div class="mt-3 d-flex justify-content-center">
                                <?php echo e($companies->links()); ?>

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
    <script>
        $('.status-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('company.status.change')); ?>',
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

        $('.profile-verification-switch').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('companyid');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '<?php echo e(route('company.profile.verify.change')); ?>',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(response) {
                    toastr.success(response.message, 'Success');
                }
            });

            if (status == 1) {
                $(`profile_status_${id}`).text("<?php echo e(__('verified')); ?>")
            }else{
                $(`profile_status_${id}`).text("<?php echo e(__('unverified')); ?>")
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/backend/company/index.blade.php ENDPATH**/ ?>
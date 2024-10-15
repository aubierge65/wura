<?php $__env->startSection('title'); ?>
    <?php echo e(__('job_list')); ?>

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
                        <h3 class="card-title line-height-36"><?php echo e(__('job_list')); ?></h3>
                        <div class="d-flex flex-column flex-md-row">
                            <a href="<?php echo e(route('admin.job.edited.index')); ?>" class="btn mx-md-1 my-1 my-md-0 bg-secondary"><i
                                    class="fas fa-hourglass-start"></i>
                                <?php echo e(__('pending_edited_jobs')); ?>

                                <span class="badge badge-info right">
                                    <?php echo e($edited_jobs); ?>

                                </span>
                            </a>
                            <a href="<?php echo e(route('job.create')); ?>" class="btn mx-md-1 my-1 my-md-0 bg-primary"><i
                                    class="fas fa-plus mr-1"></i>
                                <?php echo e(__('create')); ?>

                            </a>
                            <button data-toggle="modal" data-target="#bulk_import_modal"
                                class="btn mx-md-1 my-1 my-md-0 bg-info"><i class="fas fa-plus mr-1"></i>
                                <?php echo e(__('bulk_import')); ?>

                            </button>
                            
                            <?php if(request('title') ||
                                    request('job_category') ||
                                    request('job_type') ||
                                    request('experience') ||
                                    request('sort_by') ||
                                    request('filter_by')): ?>
                                <a href="<?php echo e(route('job.index')); ?>" class="btn bg-danger"><i class="fas fa-times"></i>
                                    &nbsp;<?php echo e(__('clear')); ?>

                                </a>
                            <?php endif; ?>
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
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('job_category')); ?></label>
                            <select name="job_category" class="form-control select2bs4">
                                <option value="">
                                    <?php echo e(__('all')); ?>

                                </option>
                                <?php $__currentLoopData = $job_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(request('job_category') == $job_category->id ? 'selected' : ''); ?>

                                        value="<?php echo e($job_category->id); ?>">
                                        <?php echo e($job_category->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('job_type')); ?></label>
                            <select name="job_type" class="form-control select2bs4">
                                <option value="">
                                    <?php echo e(__('all')); ?>

                                </option>
                                <?php $__currentLoopData = $job_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(request('job_type') == $job_type->slug ? 'selected' : ''); ?>

                                        value="<?php echo e($job_type->slug); ?>">
                                        <?php echo e($job_type->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('experience')); ?></label>
                            <select name="experience" class="form-control select2bs4">
                                <option value="">
                                    <?php echo e(__('all')); ?>

                                </option>
                                <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(request('experience') == $experience->slug ? 'selected' : ''); ?>

                                        value="<?php echo e($experience->slug); ?>">
                                        <?php echo e($experience->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
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
                        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                            <label><?php echo e(__('filter_by')); ?></label>
                            <select name="filter_by" class="form-control select2bs4">
                                <option <?php echo e(request('filter_by') ? '' : 'selected'); ?> value="">
                                    <?php echo e(__('all')); ?>

                                </option>
                                <option <?php echo e(request('filter_by') == 'active' ? 'selected' : ''); ?> value="active">
                                    <?php echo e(__('publish')); ?>

                                </option>
                                <option <?php echo e(request('filter_by') == 'pending' ? 'selected' : ''); ?> value="pending">
                                    <?php echo e(__('pending')); ?>

                                </option>
                                <option <?php echo e(request('filter_by') == 'expired' ? 'selected' : ''); ?> value="expired">
                                    <?php echo e(__('expired')); ?>

                                </option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="card-body table-responsive p-0 m-0">
                    <?php echo $__env->make('backend.layouts.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="col-sm-12 py-2" style="padding-left: 32px;">
                            <label class="d-inline-flex align-items-center gap-2">
                                <input type="checkbox" id="select-all" class="mr-2">
                                <span><?php echo e(__('select_all')); ?></span>
                            </label>
                            <button id="delete-selected" class="btn btn-danger ml-3"><?php echo e(__('selected_delete')); ?></button>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-12">
                            <table class="ll-table table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th width="5%"><?php echo e(__('job')); ?></th>
                                        <th width="10%"><?php echo e(__('category')); ?>/<?php echo e(__('role')); ?></th>
                                        <th width="10%"><?php echo e(__('salary')); ?></th>
                                        <th width="10%"><?php echo e(__('deadline')); ?></th>
                                        <th width="10%"><?php echo e(__('status')); ?></th>
                                        <?php if(userCan('job.update') || userCan('job.delete')): ?>
                                            <th width="10%"><?php echo e(__('action')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($jobs->count() > 0): ?>
                                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="job-checkbox"
                                                        value="<?php echo e($job->id); ?>">
                                                </td>
                                                <td tabindex="0">
                                                    <a href="<?php echo e(route('job.show', $job->id)); ?>" class="company">
                                                        <?php if($job->company): ?>
                                                            <img src="<?php echo e(asset($job->company->logo_url)); ?>" alt="image">
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
                                                            <h2><?php echo e($job->title); ?></h2>
                                                            <p>

                                                                <span><?php echo e($job->company && $job->company->user ? $job->company->user->name : $job->company_name); ?></span>
                                                                <span>·</span>
                                                                <span><?php echo e($job->job_type->name ?? ''); ?></span>
                                                                <?php if($job->is_remote): ?>
                                                                    <span>·</span>
                                                                    <span><?php echo e(__('remote')); ?></span>
                                                                <?php endif; ?>
                                                            </p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td tabindex="0">
                                                    <div class="category">
                                                        <?php if (isset($component)) { $__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-layer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-layer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b)): ?>
<?php $attributes = $__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b; ?>
<?php unset($__attributesOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b)): ?>
<?php $component = $__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b; ?>
<?php unset($__componentOriginal71c6e8e7fbc3da8bcf0d7a3fe642206b); ?>
<?php endif; ?>
                                                        <div>
                                                            <h3><?php echo e($job->category->name); ?></h3>
                                                            <p><?php echo e($job->role->name); ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td tabindex="0">
                                                    <div class="category">
                                                        <?php if (isset($component)) { $__componentOriginal67492ee5892086a780c793b7d96efef6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67492ee5892086a780c793b7d96efef6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-money','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-money'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67492ee5892086a780c793b7d96efef6)): ?>
<?php $attributes = $__attributesOriginal67492ee5892086a780c793b7d96efef6; ?>
<?php unset($__attributesOriginal67492ee5892086a780c793b7d96efef6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67492ee5892086a780c793b7d96efef6)): ?>
<?php $component = $__componentOriginal67492ee5892086a780c793b7d96efef6; ?>
<?php unset($__componentOriginal67492ee5892086a780c793b7d96efef6); ?>
<?php endif; ?>
                                                        <div>
                                                            <?php if($job->salary_mode == 'range'): ?>
                                                            
                                                                <h3 class='bold'>
                                                                    <?php echo e($job->min_salary); ?> - <?php echo e($job->max_salary); ?> <?php echo e(currentCurrencyCode()); ?></h3>
                                                            <?php else: ?>
                                                                <h3 class="bold"><?php echo e($job->custom_salary); ?></h3>
                                                            <?php endif; ?>
                                                            <p><?php echo e($job->salary_type->name); ?> </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td tabindex="0">
                                                    <?php
                                                        $dateTime = new DateTime();
                                                        $formattedDateTime = $dateTime->format('Y-m-d');
                                                    ?>
                                                    <?php if($job->deadline <= $formattedDateTime): ?>
                                                        <?php echo e(date('j F, Y', strtotime($job->deadline))); ?>

                                                        <p class=" text-danger mt-2">
                                                            <small><?php echo e(__('deadline_expired')); ?></small>
                                                        </p>
                                                    <?php else: ?>
                                                        <?php echo e(date('j F, Y', strtotime($job->deadline))); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <?php if(userCan('job.update')): ?>
                                                    <td tabindex="0">
                                                        <div class="d-flex">
                                                            <?php if($job->status == 'pending'): ?>
                                                                <form
                                                                    action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                                    method="POST"
                                                                    id="job_status_pending_form_<?php echo e($job->id); ?>">
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <input
                                                                            onclick="$('#job_status_pending_form_<?php echo e($job->id); ?>').submit()"
                                                                            type="radio"
                                                                            id="status_input_pending_<?php echo e($job->id); ?>"
                                                                            name="status"
                                                                            class="plan_type_selection custom-control-input"
                                                                            value="pending"
                                                                            <?php echo e($job->status == 'pending' ? 'checked' : ''); ?>>
                                                                        <label class="custom-control-label"
                                                                            for="status_input_pending_<?php echo e($job->id); ?>"><?php echo e(__('pending')); ?></label>
                                                                    </div>
                                                                </form>
                                                            <?php endif; ?>
                                                            <?php if($job->status == 'active' || $job->status == 'pending'): ?>
                                                                <form
                                                                    action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                                    method="POST"
                                                                    id="job_status_publish_form_<?php echo e($job->id); ?>">
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <input
                                                                            onclick="$('#job_status_publish_form_<?php echo e($job->id); ?>').submit()"
                                                                            type="radio"
                                                                            id="status_input_publish_<?php echo e($job->id); ?>"
                                                                            name="status"
                                                                            class="plan_type_selection custom-control-input"
                                                                            value="active"
                                                                            <?php echo e($job->status == 'active' ? 'checked' : ''); ?>>
                                                                        <label class="custom-control-label"
                                                                            for="status_input_publish_<?php echo e($job->id); ?>"><?php echo e(__('publish')); ?></label>
                                                                    </div>
                                                                </form>
                                                            <?php endif; ?>
                                                            <?php if($job->status == 'active' || $job->status == 'expired'): ?>
                                                                <form
                                                                    action="<?php echo e(route('admin.job.status.change', $job->id)); ?>"
                                                                    method="POST"
                                                                    id="job_status_unpublish_form_<?php echo e($job->id); ?>">
                                                                    <div
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <input disabled
                                                                            onclick="$('#job_status_unpublish_form_<?php echo e($job->id); ?>').submit()"
                                                                            type="radio"
                                                                            id="status_input_unpublish_<?php echo e($job->id); ?>"
                                                                            name="status"
                                                                            class="plan_type_selection custom-control-input expired_radio"
                                                                            value="expired"
                                                                            <?php echo e($job->status == 'expired' ? 'checked' : ''); ?>>
                                                                        <label
                                                                            <?php if($job->status == 'expired'): ?> class="custom-control-label expired_radio" <?php else: ?> class="custom-control-label " <?php endif; ?>
                                                                            data-toggle="tooltip"
                                                                            title="<?php echo e(__('expired_status_depend_on_deadline')); ?>"
                                                                            for="status_input_unpublish_<?php echo e($job->id); ?>"><?php echo e(__('expired')); ?></label>
                                                                    </div>
                                                                </form>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                <?php endif; ?>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('details')); ?>"
                                                        href="<?php echo e(route('job.show', $job->id)); ?>"
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
                                                    <a data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('clone')); ?>"
                                                        href="<?php echo e(route('admin.job.clone', $job->slug)); ?>"
                                                        class="btn ll-mr-4 ll-p-0">
                                                        <?php if (isset($component)) { $__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-clone','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-clone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013)): ?>
<?php $attributes = $__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013; ?>
<?php unset($__attributesOriginal2899dd2f7e7f7ab7072fa90bfb657013); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013)): ?>
<?php $component = $__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013; ?>
<?php unset($__componentOriginal2899dd2f7e7f7ab7072fa90bfb657013); ?>
<?php endif; ?> <?php echo e(__('clone')); ?>

                                                    </a>

                                                    <a target="_blank" data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('view_frontend')); ?>"
                                                        href="<?php echo e(route('website.job.details', $job->slug)); ?>"
                                                        class="btn ll-mr-4 ll-p-0">
                                                        <?php if (isset($component)) { $__componentOriginal419a3d7f2a17924d4961438567f97dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal419a3d7f2a17924d4961438567f97dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.table-link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.table-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal419a3d7f2a17924d4961438567f97dff)): ?>
<?php $attributes = $__attributesOriginal419a3d7f2a17924d4961438567f97dff; ?>
<?php unset($__attributesOriginal419a3d7f2a17924d4961438567f97dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal419a3d7f2a17924d4961438567f97dff)): ?>
<?php $component = $__componentOriginal419a3d7f2a17924d4961438567f97dff; ?>
<?php unset($__componentOriginal419a3d7f2a17924d4961438567f97dff); ?>
<?php endif; ?>
                                                    </a>
                                                    <?php if(userCan('job.update')): ?>
                                                        <a data-toggle="tooltip" data-placement="top"
                                                            title="<?php echo e(__('edit')); ?>"
                                                            href="<?php echo e(route('job.edit', $job->id)); ?>"
                                                            class="btn ll-mr-4 ll-p-0">
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
                                                    <?php if(userCan('job.delete')): ?>
                                                        <form action="<?php echo e(route('job.destroy', $job->id)); ?>"
                                                            method="POST" class="d-inline">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button data-toggle="tooltip" data-placement="top"
                                                                title="<?php echo e(__('delete')); ?>"
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
                    <?php if($jobs->total() > $jobs->perPage()): ?>
                        <div class="mt-3 d-flex justify-content-center">
                            <?php echo e($jobs->links()); ?>

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

    <script>
        // Add this script in your HTML file or separate JS file
        $(document).ready(function() {
            // Add this script in your HTML file or separate JS file
            $(document).ready(function() {
                // Select all checkboxes
                $('#select-all').click(function(event) {
                    if (this.checked) {
                        $('.job-checkbox').each(function() {
                            this.checked = true;
                        });
                    } else {
                        $('.job-checkbox').each(function() {
                            this.checked = false;
                        });
                    }
                });

                // Handle delete selected button click
                $('#delete-selected').click(function() {
                    var selectedJobs = [];
                    $('.job-checkbox:checked').each(function() {
                        selectedJobs.push($(this).val());
                    });

                    function showSuccessMessage(message) {
                        toastr.success(message);
                    }
                    // AJAX request to delete selected jobs
                    $.ajax({
                        url: '<?php echo e(route('jobs.deleteSelected')); ?>',
                        data: {
                            ids: selectedJobs
                        },
                        success: function(response) {

                            showSuccessMessage('Job deleted successfully');
                            window.location.reload()
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });

        });
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/Job/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('seo')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('seo')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="alert alert-warning mb-3">
        <?php echo e(__('improve_your_site_ranking_by_adding_seo_information_to_your_pages')); ?>

        <hr class="my-2">
        <?php echo e(__('seo_is_crucial_because_it_makes_your_website_more_visible_and_that_means_more_traffic_and_more_opportunities_to_convert_prospects_into_customers_check_out_the_seo_tools_you_can_use_for_optimal_ranking')); ?>

    </div>
    <div class="card">
        <div class="card-header">
            <div class="d-md-flex justify-content-between">
                <div class="row flex-grow-1">
                    <h3 class="col-12 col-md-4 card-title line-height-36"><?php echo e(__('seo_page_list')); ?></h3>
                    <div class="col-md-8">
                        <div class="d-flex flex-wrap align-items-center ">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('settings.seo.index', ['lang_query' => $language->code])); ?>" class="a-color">
                                    <div class="filtertags close-tag pointer mr-2">
                                        <div
                                            class="single-tag <?php echo e(request('lang_query') == $language->code || (!request('lang_query') && $language->code == 'en') ? 'single-tag-active' : ''); ?>">
                                            <?php echo e($language->name); ?>

                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-md-0">
                    <a href="<?php echo e(route('settings.generateSitemap')); ?>" class="btn btn-primary">
                        <?php echo e(__('generate_sitemap')); ?>

                    </a>
                    <a target="_blank" href="/sitemap.xml" class="btn btn-info">
                        <?php echo e(__('view_sitemap')); ?>

                    </a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-bordered">
                <thead class="text-center">
                    <tr>
                        <th width="50">#</th>
                        <th style="max-width: 300px;"> <?php echo e(__('page_name')); ?> </th>
                        <th style="max-width: 300px;"> <?php echo e(__('meta_title')); ?> </th>
                        <th style="max-width: 500px;">
                            <?php echo e(__('meta_description')); ?>

                            (<?php echo e(request('lang_query') ?? __('en')); ?>)
                        </th>
                        <th width="250"><?php echo e(__('page_preview_image')); ?> </th>
                        <th width="100"><?php echo e(__('action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($seos->count() > 0): ?>
                        <?php $__currentLoopData = $seos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td>
                                    <div class="badge badge-primary">
                                        <?php echo e(Str::ucfirst($seo->page_slug)); ?>

                                    </div>
                                </td>
                                <td style="max-width: 300px; white-space: normal">
                                    <?php $__currentLoopData = $seo->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($content->title); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td style="max-width: 500px; white-space: normal">
                                    <?php $__currentLoopData = $seo->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($content->description); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $seo->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img style="height: auto; width: 200px; object-fit: contain"
                                            src="<?php echo e(asset($content->image)); ?>" alt="image">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('settings.seo.edit', [$seo->id, 'lang_query' => request('lang_query') ?? 'en'])); ?>"
                                        class="btn btn-secondary mr-2">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10" class="text-center">
                                <?php if (isset($component)) { $__componentOriginal56c81c662798cf576554b4d425b3acba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56c81c662798cf576554b4d425b3acba = $attributes; } ?>
<?php $component = App\View\Components\Admin\NotFound::resolve(['word' => ''.e(__('seo')).'','route' => 'module.seo.index','method' => 'GET'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $attributes = $__attributesOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__attributesOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56c81c662798cf576554b4d425b3acba)): ?>
<?php $component = $__componentOriginal56c81c662798cf576554b4d425b3acba; ?>
<?php unset($__componentOriginal56c81c662798cf576554b4d425b3acba); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php if($seos->total() > $seos->perPage()): ?>
                <div class="mt-3 d-flex justify-content-center">
                    <?php echo e($seos->links()); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/seo/index.blade.php ENDPATH**/ ?>
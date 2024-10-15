

<?php $__env->startSection('description'); ?>
    <?php
    $data = metaData('blog');
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
            <div class="breadcrumb-menu">
                <h6 class="f-size-18 m-0"><?php echo e(__('blog')); ?></h6>
                <ul>
                    <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                    <li>/</li>
                    <li><?php echo e(__('blog')); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-content-area rt-pt-50 rt-mb-100 rt-mb-md-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 rt-mb-md-30 order-1 order-xl-0">
                    <div class="sidebar-wrapper">
                        <div class="widget widget_search">
                            <form action="<?php echo e(route('website.posts')); ?>" method="GET" id="searchForm">
                                <h2 class="widget-title"> <?php echo e(__('search')); ?> </h2>
                                <div class="fromGroup has-icon2">
                                    <input type="text" placeholder="<?php echo e(__('search')); ?>" name="search"
                                        value="<?php echo e(request('search')); ?>">
                                    <button class="icon-badge rt-ml-12 bg-transparent border-0 no-padding">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="var(--primary-500)" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 21.0004L16.65 16.6504"
                                                stroke="var(--primary-500)" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <?php if($categories && count($categories)): ?>
                                    <hr>
                                    <ul class="rt-list filter_lists">
                                        <li class="d-block has-children open">
                                            <div class="body-font-1 ft-wt-5 rt-mb-20"> <?php echo e(__('category')); ?> </div>
                                            <ul class="sub-catagory rt-list">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="d-block rt-mb-15">
                                                        <div class="form-check from-chekbox-custom">
                                                            <input <?php echo e(request('category') && in_array($category->slug, request('category')) ? 'checked':''); ?>

                                                                class="form-check-input" type="checkbox" value="<?php echo e($category->slug); ?>"
                                                                id="<?php echo e($category->id); ?>category" name="category[]">
                                                            <label class="form-check-label pointer text-gray-700 f-size-16"
                                                                for="<?php echo e($category->id); ?>category">
                                                                <?php echo e($category->name); ?>

                                                            </label>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    </ul>

                                    <button type="submit" class="btn btn-primary btn-xs mt-4"><?php echo e(__('filter')); ?></button>
                                <?php endif; ?>
                            </form>
                        </div>
                        <?php if(advertisementCode('blog_detailpage_inside_blog')): ?>
                            <div class="">
                                <?php echo advertisementCode('bloglist_page_left'); ?>

                            </div>
                        <?php endif; ?>
                         <!-- google adsense area end -->
                        <?php if($recent_posts && count($recent_posts)): ?>
                             <div class="widget rt-widget-recent-posts">
                                <h2 class="widget-title"><?php echo e(__('recent_post')); ?></h2>
                                <ul>
                                    <?php $__currentLoopData = $recent_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('website.post', $post->slug)); ?>" class="tw-block recent-blog">
                                                <div class="rt-single-icon-box max-[375px]:tw-flex-wrap">
                                                    <div class="icon-thumb recent-post-img rt-mr-16">
                                                        <img src="<?php echo e(url($post->image)); ?>" alt="image" class="object-fit-contain">
                                                    </div>
                                                    <div class="iconbox-content">
                                                        <div class="bofy-font-4 entry-meta rt-mb-10">
                                                            <span class="date text-gray-500 rt-mr-8 hover:text-primary-500">
                                                                <?php echo e(date('M d, Y', strtotime($post->created_at))); ?>

                                                            </span>
                                                            <?php if($post->comments_count != 0): ?>
                                                                <span class="text-gray-500 rt-mr-8">
                                                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4 2C4 3.10457 3.10457 4 2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2Z"
                                                                            fill="#767E94" />
                                                                    </svg>
                                                                </span>
                                                                <span
                                                                    class="comments text-gray-500 hover:text-primary-500">
                                                                    <?php echo e($post->comments_count); ?>

                                                                    <?php echo e($post->comments_count == 1 ? __('comment') : __('comments')); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <p class="body-font-3 text-gray-900 tw-mb-0 tw-text-ellipsis tw-block tw-whitespace-nowrap tw-w-[180px] tw-overflow-hidden hover:text-primary-500">
                                                            <?php echo e(Str::limit($post->short_description, 80)); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-8 order-0 order-xl-1">
                    <?php if($posts->count() > 0): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                            <article class="blog-list-view rt-single-icon-box blog-post rt-mb-24">
                                <div class="icon-thumb post-img">
                                    <div class="post-thmubnail">
                                        <a href="<?php echo e(route('website.post', $post->slug)); ?>">
                                            <img src="<?php echo e(url($post->image)); ?>" alt="post image" class="rt-rounded-8 w-100" class="object-fit-contain">
                                        </a>
                                    </div>
                                </div>
                                <div class="iconbox-content">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <a class="date" href="#">
                                                <i class="ph-calendar-blank"></i>
                                                <?php echo e(date('M d, Y', strtotime($post->created_at))); ?>

                                            </a>
                                            <?php if($post->comments_count != 0): ?>
                                                <a class="comment"
                                                    href="<?php echo e(route('website.post', $post->slug)); ?>#comments">
                                                    <i class="ph-chat-circle-dots"></i>
                                                    <?php echo e($post->comments_count); ?>

                                                    <?php echo e($post->comments_count == 1 ? __('comment') : __('comments')); ?>

                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <h4 class="entry-title">
                                            <a href="<?php echo e(route('website.post', $post->slug)); ?>">
                                                <?php echo e($post->title); ?>

                                            </a>
                                        </h4>
                                    </header><!-- .end entry header -->
                                    <div class="entry-content">
                                        <?php echo e(Str::limit($post->short_description, 150)); ?>

                                    </div>
                                    <div class="entry-footer">
                                        <a href="<?php echo e(route('website.post', $post->slug)); ?>"><?php echo e(__('read_more')); ?> <i
                                                class="ph-arrow-right"></i></a>
                                    </div><!-- /.entry-footer -->
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="card text-center">
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
                        </div>
                    <?php endif; ?>
                    <div class="blog-pagination rt-pt-30 rt-mb-30">
                        <nav>
                            <?php echo e($posts->links('vendor.pagination.frontend')); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/posts.blade.php ENDPATH**/ ?>
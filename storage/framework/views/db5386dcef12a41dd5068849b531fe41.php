

<?php $__env->startSection('description'); ?>
    <?php
        $data = metaData('company-details');
    ?>
    <?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?>
    <?php echo e(asset($data->image)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('company')); ?> <?php echo e($user->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <?php
        $lat = $user->company->lat;
        $long = $user->company->long;
    ?>
    <?php if($user->userPlan && $user->userPlan->plan->profile_verify && !$user->company->is_profile_verified): ?>
        <div class="text-center mt-2 text-red">
            <small class="text-xs">Your account is not verified yet. <a href="<?php echo e(route('company.verify.documents.index')); ?>">
                    see your documents</a> </small>
        </div>
    <?php endif; ?>

    
    <div class="single-page-banner">
        <div class="containers">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pgae-bg bgprefix-cover" style="background-image: url('<?php echo e($user->company->banner_url); ?>');">
                    </div>
                    <div
                        class="card jobcardStyle1 hover:bg-transparent hover-shadow:none body-24 hover:border-transparent border border-gray-50">
                        <div class="card-body">
                            <div
                                class="rt-single-icon-box flex-column tw-items-center tw-gap-5 tw-justify-center flex-lg-row">
                                <div class="icon-thumb rt-mb-lg-20 company-logo !tw-m-0">
                                    <img src="<?php echo e($user->company->logo_url); ?>" alt="logo" draggable="false"
                                        class="object-fit-contain">
                                </div>
                                <div class="iconbox-content">
                                    <div class="post-info2">
                                        <div class="post-main-title2">
                                            <a href="<?php echo e(route('website.employe.details', $user->username)); ?>"
                                                style="display: flex ;align-items: center">
                                                <?php echo e($user->name); ?>

                                                <?php if($companyDetails->is_profile_verified): ?>
                                                    <div
                                                        style=" display: inline-flex ;width: 24px ; height: 24px ; color: #0BA02C ; margin-left: 6px">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>

                                                    </div>
                                                <?php endif; ?>
                                            </a>
                                            <?php if($companyDetails->industry): ?>
                                                <p class="f-size-16 text-gray-600 m-0">
                                                    <?php echo e($companyDetails->industry->name); ?></p>
                                            <?php endif; ?>
                                            <div class="d-flex">
                                                <div class="icon-img">
                                                    <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.2"
                                                            d="M16 3C13.3478 3.00001 10.8043 4.05358 8.92894 5.92894C7.05358 7.8043 6.00001 10.3478 6 13C6 22 16 29 16 29C16 29 26 22 26 13C26 10.3478 24.9464 7.8043 23.0711 5.92894C21.1957 4.05358 18.6522 3.00001 16 3ZM16 17C15.2089 17 14.4355 16.7654 13.7777 16.3259C13.1199 15.8864 12.6072 15.2616 12.3045 14.5307C12.0017 13.7998 11.9225 12.9956 12.0769 12.2196C12.2312 11.4437 12.6122 10.731 13.1716 10.1716C13.731 9.61216 14.4437 9.2312 15.2196 9.07686C15.9956 8.92252 16.7998 9.00173 17.5307 9.30448C18.2616 9.60723 18.8864 10.1199 19.3259 10.7777C19.7654 11.4355 20 12.2089 20 13C20 14.0609 19.5786 15.0783 18.8284 15.8284C18.0783 16.5786 17.0609 17 16 17V17Z"
                                                            fill="var(--primary-500)"></path>
                                                        <path d="M7 29H25" stroke="var(--primary-500)" stroke-width="1.8"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M16 17C18.2091 17 20 15.2091 20 13C20 10.7909 18.2091 9 16 9C13.7909 9 12 10.7909 12 13C12 15.2091 13.7909 17 16 17Z"
                                                            stroke="var(--primary-500)" stroke-width="1.8"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M26 13C26 22 16 29 16 29C16 29 6 22 6 13C6 10.3478 7.05357 7.8043 8.92893 5.92893C10.8043 4.05357 13.3478 3 16 3C18.6522 3 21.1957 4.05357 23.0711 5.92893C24.9464 7.8043 26 10.3478 26 13V13Z"
                                                            stroke="var(--primary-500)" stroke-width="1.8"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="info">

                                                    <p class="f-size-16 text-gray-600">
                                                        <?php echo e($user->company->exact_location ? $user->company->exact_location : $user->company->full_address); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="iconbox-extra align-self-center align-self-lg-center flex-md-row flex-column">
                                    <div class="max-311">
                                        <a href="#open_position" type="button" class="btn btn-primary btn-lg d-block">
                                            <span class="button-content-wrapper ">
                                                <span class="button-icon align-icon-right">
                                                    <i class="ph-arrow-right"></i>
                                                </span>
                                                <span class="button-text">
                                                    <?php echo e(__('open_position')); ?>

                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Single job content Area-->
    <div class="single-job-content rt-pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 rt-mb-lg-30">
                    <div class="body-font-1 ft-wt-5 rt-mb-20"><?php echo e(__('company_description')); ?></div>
                    <div class="body-font-3 text-gray-500" style="overflow: hidden;">
                        <?php echo $user->company->bio; ?>

                    </div>
                    <div class="divider">
                        <hr>
                    </div>
                    <div class="body-font-1 ft-wt-5 rt-mb-20"><?php echo e(__('posts')); ?></div>
                    
                    <div class="row">
                        <?php
                            $posts = isset($user->posts) ? $user->posts : '';
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div><img src="<?php echo e(url($post->image)); ?>" alt="" style="border-top-left-radius: 12px; border-top-right-radius: 12px"></div>
                              
                                <div class="blog-info py-3 ps-3">
                                    <h4 class="entry-title">
                                        <a href="<?php echo e(route('website.post', $post->slug)); ?>">
                                            <?php echo e($post->title); ?>

                                        </a>
                                    </h4>
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
                                    <div class="btn btn-outline-plain tw-px-2 tw-py-1.5 tw-text-sm d-flex align-items-center">
                                        <a href="<?php echo e(route('website.post', $post->slug)); ?>"><?php echo e(__('read_more')); ?>  <i
                                                class="ph-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
                    </div>
                    <div class="divider">
                        <hr>
                    </div>
                    <div class="share-job rt-pt-50">
                        <ul class="rt-list gap-8">
                            <li class="d-inline-block body-font-3">
                                <?php echo e(__('share_this_profile')); ?>:
                            </li>
                            <li class="d-inline-block ms-3">
                                <a href="<?php echo e(socialMediaShareLinks(url()->current(), 'facebook')); ?>" target="__blank">
                                    <button class="btn btn-outline-plain tw-px-2 tw-py-1.5 tw-text-sm hover-fb">
                                        <span class="f-size-18 text-primary-500">
                                            <?php if (isset($component)) { $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.facebook-icon','data' => ['width' => '1em','height' => '1em']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '1em','height' => '1em']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $attributes = $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $component = $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
                                        </span>
                                        <span class="text-primary-500"><?php echo e(__('facebook')); ?></span>
                                    </button>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="<?php echo e(socialMediaShareLinks(url()->current(), 'twitter')); ?>" target="__blank">
                                    <button class="btn btn-outline-plain tw-px-2 tw-py-1.5 tw-text-sm hover-tw">
                                        <span class="f-size-18 text-twitter">
                                            <?php if (isset($component)) { $__componentOriginal7a593d607f810c5eb722a8da3c669d39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a593d607f810c5eb722a8da3c669d39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.twitter-icon','data' => ['width' => '1em','height' => '1em']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '1em','height' => '1em']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $attributes = $__attributesOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $component = $__componentOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__componentOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
                                        </span>
                                        <span class="text-twitter"><?php echo e(__('twitter')); ?></span>
                                    </button>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="<?php echo e(socialMediaShareLinks(url()->current(), 'pinterest')); ?>" target="__blank">
                                    <button class="btn btn-outline-plain tw-px-2 tw-py-1.5 tw-text-sm hover-pin">
                                        <span class="f-size-18 text-pinterest me-1">
                                            <?php if (isset($component)) { $__componentOriginal2fe53bef5eff6674c05910535397c0e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fe53bef5eff6674c05910535397c0e3 = $attributes; } ?>
<?php $component = App\View\Components\Svg\PinterestIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.pinterest-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\PinterestIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $attributes = $__attributesOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $component = $__componentOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__componentOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
                                        </span>
                                        <span class="text-pinterest"><?php echo e(__('pinterest')); ?></span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cadidate-details-sidebar">
                        <?php if($user->company->establishment_date || $companyDetails->organization || $companyDetails->team_size): ?>
                            <div class="sidebar-widget">
                                <div class="row">
                                    <?php if($user->company->establishment_date): ?>
                                        <div class="col-sm-6">
                                            <div class="icon-box">
                                                <div class="icon-img">
                                                    <?php if (isset($component)) { $__componentOriginal7eceb386c7ba648009779773d7949e92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7eceb386c7ba648009779773d7949e92 = $attributes; } ?>
<?php $component = App\View\Components\Svg\BirthDateIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.birth-date-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\BirthDateIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7eceb386c7ba648009779773d7949e92)): ?>
<?php $attributes = $__attributesOriginal7eceb386c7ba648009779773d7949e92; ?>
<?php unset($__attributesOriginal7eceb386c7ba648009779773d7949e92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7eceb386c7ba648009779773d7949e92)): ?>
<?php $component = $__componentOriginal7eceb386c7ba648009779773d7949e92; ?>
<?php unset($__componentOriginal7eceb386c7ba648009779773d7949e92); ?>
<?php endif; ?>
                                                </div>
                                                <h3 class="sub-title"><?php echo e(__('founded_in')); ?></h3>
                                                <h2 class="title">
                                                    <?php echo e(date('j F, Y', strtotime($user->company->establishment_date))); ?>

                                                </h2>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($companyDetails->organization): ?>
                                        <div class="col-sm-6">
                                            <div class="icon-box">
                                                <div class="icon-img">
                                                    <?php if (isset($component)) { $__componentOriginalfc1a8398b912309e19330e101bd92082 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc1a8398b912309e19330e101bd92082 = $attributes; } ?>
<?php $component = App\View\Components\Svg\FoldIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.fold-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\FoldIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc1a8398b912309e19330e101bd92082)): ?>
<?php $attributes = $__attributesOriginalfc1a8398b912309e19330e101bd92082; ?>
<?php unset($__attributesOriginalfc1a8398b912309e19330e101bd92082); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc1a8398b912309e19330e101bd92082)): ?>
<?php $component = $__componentOriginalfc1a8398b912309e19330e101bd92082; ?>
<?php unset($__componentOriginalfc1a8398b912309e19330e101bd92082); ?>
<?php endif; ?>
                                                </div>
                                                <h3 class="sub-title"><?php echo e(__('organization_type')); ?></h3>
                                                <h2 class="title">
                                                    <?php echo e($companyDetails->organization ? ucfirst($companyDetails->organization->name) : ''); ?>

                                                </h2>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($companyDetails->team_size): ?>
                                        <div class="col-sm-6">
                                            <div class="icon-box">
                                                <div class="icon-img">
                                                    <?php if (isset($component)) { $__componentOriginalf70ad8dd985c7a8578bea55fb29ad3e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf70ad8dd985c7a8578bea55fb29ad3e7 = $attributes; } ?>
<?php $component = App\View\Components\Svg\BoardIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.board-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\BoardIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf70ad8dd985c7a8578bea55fb29ad3e7)): ?>
<?php $attributes = $__attributesOriginalf70ad8dd985c7a8578bea55fb29ad3e7; ?>
<?php unset($__attributesOriginalf70ad8dd985c7a8578bea55fb29ad3e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf70ad8dd985c7a8578bea55fb29ad3e7)): ?>
<?php $component = $__componentOriginalf70ad8dd985c7a8578bea55fb29ad3e7; ?>
<?php unset($__componentOriginalf70ad8dd985c7a8578bea55fb29ad3e7); ?>
<?php endif; ?>
                                                </div>
                                                <h3 class="sub-title"><?php echo e(__('company_size')); ?></h3>
                                                <h2 class="title">
                                                    <?php echo e($companyDetails->team_size ? $companyDetails->team_size->name : ''); ?>

                                                </h2>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- contact information  START -->
                        <?php if (isset($component)) { $__componentOriginal8a15f7468953838a58ea4a0b11f78a11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a15f7468953838a58ea4a0b11f78a11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.contact-information','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.contact-information'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a15f7468953838a58ea4a0b11f78a11)): ?>
<?php $attributes = $__attributesOriginal8a15f7468953838a58ea4a0b11f78a11; ?>
<?php unset($__attributesOriginal8a15f7468953838a58ea4a0b11f78a11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a15f7468953838a58ea4a0b11f78a11)): ?>
<?php $component = $__componentOriginal8a15f7468953838a58ea4a0b11f78a11; ?>
<?php unset($__componentOriginal8a15f7468953838a58ea4a0b11f78a11); ?>
<?php endif; ?>

                        <!-- Youtube info -->
                        <div class="sidebar-widget">

                            <?php if(isset($user->company->video_url) && $user->company->video_url !== ''): ?>
                                <div class="youtube-video">
                                    <iframe width="100%" height="315" src="<?php echo e($user->company->video_url); ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Location -->
                        <div class="border border-2 border-primary-50 rt-rounded-12 rt-mb-24 lg:max-536">
                            <div class="body-font-1 ft-wt-5 custom-p"><?php echo e(__('map')); ?> <?php echo e(__('location')); ?>

                            </div>
                            <div>
                                <?php
                                    $map = $setting->default_map;
                                ?>

                                <?php if($map == 'google-map'): ?>
                                    <div class="map mymap" id="google-map"></div>
                                <?php else: ?>
                                    <div id="leaflet-map"></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- contact information END -->
                        <?php if($user->socialInfo && $user->socialInfo->count() > 0): ?>
                            <div class="p-32 border border-1.5 border-primary-50 rt-rounded-12  max-536">
                                <div class="row g-0">
                                    <div class="col-12 d-flex align-items-center">
                                        <div class="f-size-18 text-gray-900 follow-us">
                                            <?php echo e(__('Follow us on')); ?>:
                                        </div>
                                    </div>
                                    <div class="col-12 rt-pt-lg-10">
                                        <ul class="rt-list gap-8">
                                            <?php $__currentLoopData = $user->socialInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="d-inline-block">
                                                    <a target="__blank" href="<?php echo e($contact->url); ?>"
                                                        class="social-icon icon-44 bg-gray-10 bg-primary-50 text-primary-500 hover:border-primary-500">
                                                        <?php switch($contact):
                                                            case ($contact->social_media === 'facebook'): ?>
                                                                <?php if (isset($component)) { $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.facebook-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.facebook-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $attributes = $__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__attributesOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba)): ?>
<?php $component = $__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba; ?>
<?php unset($__componentOriginale786a20b8c1ac3f9b1d7f2896d558dba); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'twitter'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal7a593d607f810c5eb722a8da3c669d39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a593d607f810c5eb722a8da3c669d39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.twitter-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.twitter-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $attributes = $__attributesOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__attributesOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a593d607f810c5eb722a8da3c669d39)): ?>
<?php $component = $__componentOriginal7a593d607f810c5eb722a8da3c669d39; ?>
<?php unset($__componentOriginal7a593d607f810c5eb722a8da3c669d39); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'instagram'): ?>
                                                                <?php if (isset($component)) { $__componentOriginale3ad27cac6d0f8f8f830c9e71813c514 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514 = $attributes; } ?>
<?php $component = App\View\Components\Svg\InstagramIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.instagram-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\InstagramIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514)): ?>
<?php $attributes = $__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514; ?>
<?php unset($__attributesOriginale3ad27cac6d0f8f8f830c9e71813c514); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3ad27cac6d0f8f8f830c9e71813c514)): ?>
<?php $component = $__componentOriginale3ad27cac6d0f8f8f830c9e71813c514; ?>
<?php unset($__componentOriginale3ad27cac6d0f8f8f830c9e71813c514); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'youtube'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal29f59dfb998b7a6ff7a890b6d968d175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175 = $attributes; } ?>
<?php $component = App\View\Components\Svg\YoutubeIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.youtube-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\YoutubeIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175)): ?>
<?php $attributes = $__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175; ?>
<?php unset($__attributesOriginal29f59dfb998b7a6ff7a890b6d968d175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f59dfb998b7a6ff7a890b6d968d175)): ?>
<?php $component = $__componentOriginal29f59dfb998b7a6ff7a890b6d968d175; ?>
<?php unset($__componentOriginal29f59dfb998b7a6ff7a890b6d968d175); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'linkedin'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal49dc423527bab5b91da6a32dce69b923 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dc423527bab5b91da6a32dce69b923 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.linkedin-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.linkedin-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $attributes = $__attributesOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__attributesOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49dc423527bab5b91da6a32dce69b923)): ?>
<?php $component = $__componentOriginal49dc423527bab5b91da6a32dce69b923; ?>
<?php unset($__componentOriginal49dc423527bab5b91da6a32dce69b923); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'pinterest'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal2fe53bef5eff6674c05910535397c0e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fe53bef5eff6674c05910535397c0e3 = $attributes; } ?>
<?php $component = App\View\Components\Svg\PinterestIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.pinterest-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\PinterestIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $attributes = $__attributesOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__attributesOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fe53bef5eff6674c05910535397c0e3)): ?>
<?php $component = $__componentOriginal2fe53bef5eff6674c05910535397c0e3; ?>
<?php unset($__componentOriginal2fe53bef5eff6674c05910535397c0e3); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'reddit'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal3f6942336d55820dee67142c74cf3d2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f6942336d55820dee67142c74cf3d2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.reddit-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.reddit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f6942336d55820dee67142c74cf3d2f)): ?>
<?php $attributes = $__attributesOriginal3f6942336d55820dee67142c74cf3d2f; ?>
<?php unset($__attributesOriginal3f6942336d55820dee67142c74cf3d2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f6942336d55820dee67142c74cf3d2f)): ?>
<?php $component = $__componentOriginal3f6942336d55820dee67142c74cf3d2f; ?>
<?php unset($__componentOriginal3f6942336d55820dee67142c74cf3d2f); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'github'): ?>
                                                                <?php if (isset($component)) { $__componentOriginald0ae092b991bdc90154f4744d589635f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0ae092b991bdc90154f4744d589635f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.github-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.github-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $attributes = $__attributesOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__attributesOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0ae092b991bdc90154f4744d589635f)): ?>
<?php $component = $__componentOriginald0ae092b991bdc90154f4744d589635f; ?>
<?php unset($__componentOriginald0ae092b991bdc90154f4744d589635f); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php case ($contact->social_media === 'other'): ?>
                                                                <?php if (isset($component)) { $__componentOriginal8608d187aa4814bd3a2c16f76807d123 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8608d187aa4814bd3a2c16f76807d123 = $attributes; } ?>
<?php $component = App\View\Components\Svg\LinkIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.link-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\LinkIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8608d187aa4814bd3a2c16f76807d123)): ?>
<?php $attributes = $__attributesOriginal8608d187aa4814bd3a2c16f76807d123; ?>
<?php unset($__attributesOriginal8608d187aa4814bd3a2c16f76807d123); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8608d187aa4814bd3a2c16f76807d123)): ?>
<?php $component = $__componentOriginal8608d187aa4814bd3a2c16f76807d123; ?>
<?php unset($__componentOriginal8608d187aa4814bd3a2c16f76807d123); ?>
<?php endif; ?>
                                                            <?php break; ?>

                                                            <?php default: ?>
                                                        <?php endswitch; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rt-spacer-100 rt-spacer-md-50"></div>
    <!--Related candidate Area-->
    <hr class="hr-0">
    <section class="related-jobs-area rt-pt-100 rt-pt-md-50" id="open_position">
        <div class="container">
            <div class="row">
                <div class="flex-grow-1 mb-4">
                    <h4><?php echo e(__('open_positions')); ?> (<?php echo e(count($open_jobs)); ?>)</h4>
                </div>
                <?php $__empty_1 = true; $__currentLoopData = $open_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-xl-4 col-md-6 fade-in-bottom rt-mb-24 cat-1 cat-3 ">
                        <div class="card jobcardStyle1 <?php echo e($job->highlight ? 'gradient-bg' : ''); ?>">
                            <div class="card-body">
                                <div class="rt-single-icon-box">
                                    <div class="icon-thumb company-logo">
                                        <img src="<?php echo e($job->company->logo_url); ?>" alt="logo" draggable="false"
                                            class="object-fit-contain">
                                    </div>
                                    <div class="iconbox-content">
                                        <div class="job-mini-title"><a
                                                href="<?php echo e(route('website.job.details', $job->slug)); ?>"><?php echo e($job->company->user->name); ?></a>
                                            <?php if($job->featured): ?>
                                                <span
                                                    class="badge rounded-pill bg-danger-50 text-danger-500"><?php echo e(__('featured')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <span class="loacton text-gray-400 d-inline-flex ">
                                            <i class="ph-map-pin"></i>
                                            <?php echo e($job->country); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <div class="post-main-title"> <a
                                            href="<?php echo e(route('website.job.details', $job->slug)); ?>"><?php echo e($job->title); ?></a>
                                    </div>
                                    <div class="body-font-4 text-gray-600" id="pagination-container">
                                        <span class="info-tools"><?php echo e($job->job_type ? $job->job_type->name : ''); ?></span>
                                        <span class="info-tools has-dot">
                                            <?php if($job->salary_mode == 'range'): ?>
                                                <?php echo e(currencyAmountShort($job->min_salary)); ?> -
                                                <?php echo e(currencyAmountShort($job->max_salary)); ?> <?php echo e(currentCurrencyCode()); ?>

                                            <?php else: ?>
                                                <?php echo e($job->custom_salary); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
            </div>
            <div class="rt-pt-30">
                <?php if($open_jobs->total() > $open_jobs->count()): ?>
                    <nav>
                        <?php echo e($open_jobs->links('vendor.pagination.frontend')); ?>

                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="rt-spacer-75 rt-spacer-md-30"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_links'); ?>
    <!-- >=>Leaflet Map<=< -->
    <?php if (isset($component)) { $__componentOriginal3e300f156325fa92f96d8a516b8d8659 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e300f156325fa92f96d8a516b8d8659 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $attributes = $__attributesOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__attributesOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e300f156325fa92f96d8a516b8d8659)): ?>
<?php $component = $__componentOriginal3e300f156325fa92f96d8a516b8d8659; ?>
<?php unset($__componentOriginal3e300f156325fa92f96d8a516b8d8659); ?>
<?php endif; ?>
    <?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .mymap {
            border-radius: 0 0 12px 12px;
        }

        .custom-p {
            padding-top: 24px;
            padding-bottom: 16px;
            padding-left: 24px
        }

        .show-more {
            font-size: 14px;
            padding: 6px;
            cursor: pointer;
            opacity: 0.7;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        // Check if the URL contains a pagination query parameter (e.g., ?page=2)
        const queryParams = new URLSearchParams(window.location.search);
        const page = queryParams.get('page');

        // If a pagination query parameter is present, scroll to the pagination container
        if (page) {
            const paginationContainer = document.getElementById('pagination-container');
            if (paginationContainer) {
                paginationContainer.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>

    <script>
        $('#show-more').on('click', function() {
            var value = $(this).attr('aria-expanded');
            if (value == 'true') {
                $('#show-more').html('Hide information');
            } else {
                $('#show-more').html('Show Contact Information');
            }
        })
    </script>

    <!-- Leaflet  -->
    <?php if (isset($component)) { $__componentOriginale8c9e08de211331e5ea62140e4549a3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8c9e08de211331e5ea62140e4549a3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.map_scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.map_scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $attributes = $__attributesOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__attributesOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8c9e08de211331e5ea62140e4549a3b)): ?>
<?php $component = $__componentOriginale8c9e08de211331e5ea62140e4549a3b; ?>
<?php unset($__componentOriginale8c9e08de211331e5ea62140e4549a3b); ?>
<?php endif; ?>
    <script>
        var oldlat = <?php echo $lat ? $lat : $setting->default_lat; ?>;
        var oldlng = <?php echo $long ? $long : $setting->default_long; ?>;

        // Map preview
        var element = document.getElementById('leaflet-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:300px;';

        // Create Leaflet map on map element.
        var leaflet_map = L.map(element);

        // Add OSM tile layer to the Leaflet map.
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet_map);

        // Target's GPS coordinates.
        var target = L.latLng(oldlat, oldlng);

        // Set map's center to target with zoom 14.
        const zoom = 7;
        leaflet_map.setView(target, zoom);

        // Place a marker on the same location.
        L.marker(target).addTo(leaflet_map);
    </script>



    <!-- ================ google map ============== -->
    <?php if($map == 'google-map'): ?>
        <script>
            function initMap() {
                var token = "<?php echo e($setting->google_map_key); ?>";

                const map = new google.maps.Map(document.getElementById("google-map"), {
                    zoom: 7,
                    center: {
                        lat: oldlat,
                        lng: oldlng
                    },
                });

                const image =
                    "https://gisgeography.com/wp-content/uploads/2018/01/map-marker-3-116x200.png";
                const beachMarker = new google.maps.Marker({

                    draggable: false,
                    position: {
                        lat: oldlat,
                        lng: oldlng
                    },
                    map,
                    // icon: image
                });
            }
            window.initMap = initMap;
        </script>
        <script>
            <?php
                $link1 = 'https://maps.googleapis.com/maps/api/js?key=';
                $link2 = $setting->google_map_key;
                $Link3 = '&callback=initMap&libraries=places,geometry';
                $scr = $link1 . $link2 . $Link3;
            ?>;
        </script>
        <script src="<?php echo e($scr); ?>" async defer></script>
    <?php endif; ?>
    <!-- ================ google map ============== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/employe-details.blade.php ENDPATH**/ ?>
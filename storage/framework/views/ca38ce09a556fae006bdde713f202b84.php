<?php $__env->startSection('title'); ?>
    <?php echo e(__('settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310 = $attributes; } ?>
<?php $component = App\View\Components\Website\Candidate\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Candidate\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310)): ?>
<?php $attributes = $__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310; ?>
<?php unset($__attributesOriginal87ee4229ecd0f7ecec9ad386f90b7310); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310)): ?>
<?php $component = $__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310; ?>
<?php unset($__componentOriginal87ee4229ecd0f7ecec9ad386f90b7310); ?>
<?php endif; ?>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard-right-header rt-mb-32">
                            <div class="left-text m-0">
                                <h3 class="f-size-18 lh-1 m-0"><?php echo e(__('settings')); ?></h3>
                            </div>
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <div class="cadidate-dashboard-tabs candidate">
                            <div class="tw-overflow-x-auto">
                                <ul class="nav nav-pills tw-gap-x-8" id="pills-tab" role="tablist">
                                    
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link <?php echo e(!session('type') || session('type') == 'basic' ? 'active' : ''); ?>"
                                            id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal"
                                            type="button" role="tab" aria-controls="pills-personal"
                                            aria-selected="true">
                                            <?php if (isset($component)) { $__componentOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd = $attributes; } ?>
<?php $component = App\View\Components\Svg\UserIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.user-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UserIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd)): ?>
<?php $attributes = $__attributesOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd; ?>
<?php unset($__attributesOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd)): ?>
<?php $component = $__componentOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd; ?>
<?php unset($__componentOriginal53ba31d83ad3ef7a5c8fe13667e1fcdd); ?>
<?php endif; ?>
                                            <?php echo e(__('basic')); ?>

                                        </button>
                                    </li>

                                    
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php echo e(session('type') == 'profile' ? 'active' : ''); ?>"
                                            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                            type="button" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">
                                            <?php if (isset($component)) { $__componentOriginal29fd2af2a61716478db6cdd6cbd30a19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29fd2af2a61716478db6cdd6cbd30a19 = $attributes; } ?>
<?php $component = App\View\Components\Svg\UserRoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.user-round-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\UserRoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29fd2af2a61716478db6cdd6cbd30a19)): ?>
<?php $attributes = $__attributesOriginal29fd2af2a61716478db6cdd6cbd30a19; ?>
<?php unset($__attributesOriginal29fd2af2a61716478db6cdd6cbd30a19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29fd2af2a61716478db6cdd6cbd30a19)): ?>
<?php $component = $__componentOriginal29fd2af2a61716478db6cdd6cbd30a19; ?>
<?php unset($__componentOriginal29fd2af2a61716478db6cdd6cbd30a19); ?>
<?php endif; ?>
                                            <?php echo e(__('profile')); ?>

                                        </button>
                                    </li>

                                    
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php echo e(session('type') == 'experience' ? 'active' : ''); ?>"
                                            id="pills-experience-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-experience" type="button" role="tab"
                                            aria-controls="pills-experience" aria-selected="false">
                                            <?php if (isset($component)) { $__componentOriginal721d8b0d28ef1ec8ccb07aebab836667 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal721d8b0d28ef1ec8ccb07aebab836667 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.briefcase-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.briefcase-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal721d8b0d28ef1ec8ccb07aebab836667)): ?>
<?php $attributes = $__attributesOriginal721d8b0d28ef1ec8ccb07aebab836667; ?>
<?php unset($__attributesOriginal721d8b0d28ef1ec8ccb07aebab836667); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal721d8b0d28ef1ec8ccb07aebab836667)): ?>
<?php $component = $__componentOriginal721d8b0d28ef1ec8ccb07aebab836667; ?>
<?php unset($__componentOriginal721d8b0d28ef1ec8ccb07aebab836667); ?>
<?php endif; ?>
                                            <?php echo e(__('experience_and_education')); ?>

                                        </button>
                                    </li>

                                    
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php echo e(session('type') == 'social' ? 'active' : ''); ?>"
                                            id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social"
                                            type="button" role="tab" aria-controls="pills-social"
                                            aria-selected="false">
                                            <?php if (isset($component)) { $__componentOriginalf59a9459f9ab01e3157ac504649becfb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf59a9459f9ab01e3157ac504649becfb = $attributes; } ?>
<?php $component = App\View\Components\Svg\Globe2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.globe2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\Globe2Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf59a9459f9ab01e3157ac504649becfb)): ?>
<?php $attributes = $__attributesOriginalf59a9459f9ab01e3157ac504649becfb; ?>
<?php unset($__attributesOriginalf59a9459f9ab01e3157ac504649becfb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf59a9459f9ab01e3157ac504649becfb)): ?>
<?php $component = $__componentOriginalf59a9459f9ab01e3157ac504649becfb; ?>
<?php unset($__componentOriginalf59a9459f9ab01e3157ac504649becfb); ?>
<?php endif; ?>
                                            <?php echo e(__('social_media')); ?>

                                        </button>
                                    </li>

                                    
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link <?php echo e(session('type') == 'alert' || session('type') == 'contact' || session('type') == 'account' || session('type') == 'visibility' || session('type') == 'password' || session('type') == 'account-delete' ? 'active' : ''); ?> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> active <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                            id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting"
                                            type="button" role="tab" aria-controls="pills-setting"
                                            aria-selected="false">
                                            <?php if (isset($component)) { $__componentOriginala42d1aa0ea964ec508d84244ce679f67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala42d1aa0ea964ec508d84244ce679f67 = $attributes; } ?>
<?php $component = App\View\Components\Svg\CogIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.cog-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CogIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala42d1aa0ea964ec508d84244ce679f67)): ?>
<?php $attributes = $__attributesOriginala42d1aa0ea964ec508d84244ce679f67; ?>
<?php unset($__attributesOriginala42d1aa0ea964ec508d84244ce679f67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala42d1aa0ea964ec508d84244ce679f67)): ?>
<?php $component = $__componentOriginala42d1aa0ea964ec508d84244ce679f67; ?>
<?php unset($__componentOriginala42d1aa0ea964ec508d84244ce679f67); ?>
<?php endif; ?>
                                            <?php echo e(__('account_setting')); ?>

                                        </button>
                                    </li>
                                    <span class="glider"></span>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                
                                <div class="tab-pane fade <?php echo e(!session('type') || session('type') == 'basic' ? 'show active' : ''); ?>"
                                    id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                                    <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <input type="hidden" name="type" value="basic">
                                        <div class="dashboard-account-setting-item tw-py-0">
                                            <h6> <?php echo e(__('basic_information')); ?></h6>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <?php if (isset($component)) { $__componentOriginal43dceb6bf5e774aaca220b9bba77f08b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43dceb6bf5e774aaca220b9bba77f08b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.photo-section','data' => ['candidate' => $candidate]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.photo-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['candidate' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($candidate)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43dceb6bf5e774aaca220b9bba77f08b)): ?>
<?php $attributes = $__attributesOriginal43dceb6bf5e774aaca220b9bba77f08b; ?>
<?php unset($__attributesOriginal43dceb6bf5e774aaca220b9bba77f08b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43dceb6bf5e774aaca220b9bba77f08b)): ?>
<?php $component = $__componentOriginal43dceb6bf5e774aaca220b9bba77f08b; ?>
<?php unset($__componentOriginal43dceb6bf5e774aaca220b9bba77f08b); ?>
<?php endif; ?>
                                                </div>
                                                <div class="row col-lg-8">
                                                    <div class="col-lg-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'full_name','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <div class="fromGroup">
                                                            <div class="form-control-icon">
                                                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'name','value' => ''.e($candidate->user->name).'','placeholder' => ''.e(__('name')).'','class' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'professional_title_tagline','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <div class="fromGroup">
                                                            <div class="form-control-icon">
                                                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'title','value' => ''.e($candidate->title ?? '').'','placeholder' => ''.e(__('title')).'','class' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'experience_level','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <select name="experience" class="select2-taggable w-100-p">
                                                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php echo e($candidate->experience_id == $experience->id ? 'selected' : ''); ?>

                                                                    value="<?php echo e($experience->id); ?>"><?php echo e($experience->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'level_education','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <select name="education" class="select2-taggable w-100-p">
                                                            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php echo e($candidate->education_id == $education->id ? 'selected' : ''); ?>

                                                                    value="<?php echo e($education->id); ?>"><?php echo e($education->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'personal_website','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <div class="fromGroup has-icon2">
                                                            <div class="form-control-icon">
                                                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'url','name' => 'website','value' => ''.e($candidate->website).'','placeholder' => ''.e(__('website')).'','class' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                                <div class="icon-badge-2">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'date_of_birth','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                        <div class="fromGroup">
                                                            <div
                                                                class="d-flex align-items-center form-control-icon date datepicker">
                                                                <input type="text" name="birth_date"
                                                                    value="<?php echo e($candidate->birth_date ? date('d-m-Y', strtotime($candidate->birth_date)) : old('birth_date')); ?>"
                                                                    id="date" placeholder="dd/mm/yyyy"
                                                                    class="form-control border-cutom <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                                                <span class="input-group-addon input-group-text-custom">
                                                                    <?php if (isset($component)) { $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a = $attributes; } ?>
<?php $component = App\View\Components\Svg\CalendarIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.calendar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CalendarIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $attributes = $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $component = $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <?php echo e(__('save_changes')); ?>

                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                    <div>
                                        <h6 class="resume"><?php echo e(__('your_cv_resume')); ?></h6>
                                        <?php if($errors->has('resume_name') || $errors->has('resume_file')): ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php $__errorArgs = ['resume_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="d-block"><strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <?php $__errorArgs = ['resume_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="d-block"><strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="resume-lists">
                                            <?php $__currentLoopData = $resumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="resume-item">
                                                    <div class="resume-icon">
                                                        <?php if (isset($component)) { $__componentOriginal5e5d0732d90e7647317fbfb9a794b048 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.file-icon2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.file-icon2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $attributes = $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $component = $__componentOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
                                                    </div>
                                                    <div>
                                                        <h4 class="resume-title"><?php echo e($resume->name); ?></h4>
                                                        <h6 class="resume-size"><?php echo e($resume->file_size); ?></h6>
                                                    </div>
                                                    <div class="dot-icon ms-auto">
                                                        <button type="button" class="btn p-0" id="dropdownMenuButton5"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <?php if (isset($component)) { $__componentOriginal50ff8f5f5c392b14e45f2ff12b3ec12d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50ff8f5f5c392b14e45f2ff12b3ec12d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.three-dots','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.three-dots'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50ff8f5f5c392b14e45f2ff12b3ec12d)): ?>
<?php $attributes = $__attributesOriginal50ff8f5f5c392b14e45f2ff12b3ec12d; ?>
<?php unset($__attributesOriginal50ff8f5f5c392b14e45f2ff12b3ec12d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50ff8f5f5c392b14e45f2ff12b3ec12d)): ?>
<?php $component = $__componentOriginal50ff8f5f5c392b14e45f2ff12b3ec12d; ?>
<?php unset($__componentOriginal50ff8f5f5c392b14e45f2ff12b3ec12d); ?>
<?php endif; ?>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                            aria-labelledby="dropdownMenuButton5">
                                                            <li>
                                                                <form id="cv_show_<?php echo e($resume->id); ?>"
                                                                    action="<?php echo e(route('candidate.cv.show')); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" name="cv"
                                                                        value="<?php echo e($resume->id); ?>" class="d-none">
                                                                    <button type="submit"
                                                                        class="dropdown-item cv-show-submit-btn">
                                                                        <?php if (isset($component)) { $__componentOriginalf747dce0e87434a7fa0b7707ee0cd3f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf747dce0e87434a7fa0b7707ee0cd3f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.eye','data' => ['width' => '20','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '20','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf747dce0e87434a7fa0b7707ee0cd3f9)): ?>
<?php $attributes = $__attributesOriginalf747dce0e87434a7fa0b7707ee0cd3f9; ?>
<?php unset($__attributesOriginalf747dce0e87434a7fa0b7707ee0cd3f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf747dce0e87434a7fa0b7707ee0cd3f9)): ?>
<?php $component = $__componentOriginalf747dce0e87434a7fa0b7707ee0cd3f9; ?>
<?php unset($__componentOriginalf747dce0e87434a7fa0b7707ee0cd3f9); ?>
<?php endif; ?>
                                                                        <?php echo e(__('view')); ?>

                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <button
                                                                    onclick="editResume(<?php echo e($resume->id); ?>,'<?php echo e($resume->name); ?>', '<?php echo e($resume->file_size); ?>')"
                                                                    type="button" class="dropdown-item">
                                                                    <?php if (isset($component)) { $__componentOriginal162f8307b819313d6cb79b9b2afb4447 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal162f8307b819313d6cb79b9b2afb4447 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.pen-edit','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.pen-edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal162f8307b819313d6cb79b9b2afb4447)): ?>
<?php $attributes = $__attributesOriginal162f8307b819313d6cb79b9b2afb4447; ?>
<?php unset($__attributesOriginal162f8307b819313d6cb79b9b2afb4447); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal162f8307b819313d6cb79b9b2afb4447)): ?>
<?php $component = $__componentOriginal162f8307b819313d6cb79b9b2afb4447; ?>
<?php unset($__componentOriginal162f8307b819313d6cb79b9b2afb4447); ?>
<?php endif; ?>
                                                                    <?php echo e(__('edit')); ?>

                                                                </button>
                                                            </li>
                                                            <li>
                                                                <form
                                                                    action="<?php echo e(route('candidate.resume.delete', $resume->id)); ?>"
                                                                    method="POST" id="resumeForm">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="button" onclick="resumeDelete()"
                                                                        class="dropdown-item">
                                                                        <?php if (isset($component)) { $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222 = $attributes; } ?>
<?php $component = App\View\Components\Svg\TrashIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.trash-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\TrashIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $attributes = $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $component = $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
                                                                        <?php echo e(__('delete')); ?>

                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <div class="resume-item add-resume" data-bs-toggle="modal"
                                                data-bs-target="#resumeModal">
                                                <div class="resume-icon">
                                                    <?php if (isset($component)) { $__componentOriginalf745cd783bc2fc89c83afc4f7a65caba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf745cd783bc2fc89c83afc4f7a65caba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.plus-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.plus-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf745cd783bc2fc89c83afc4f7a65caba)): ?>
<?php $attributes = $__attributesOriginalf745cd783bc2fc89c83afc4f7a65caba; ?>
<?php unset($__attributesOriginalf745cd783bc2fc89c83afc4f7a65caba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf745cd783bc2fc89c83afc4f7a65caba)): ?>
<?php $component = $__componentOriginalf745cd783bc2fc89c83afc4f7a65caba; ?>
<?php unset($__componentOriginalf745cd783bc2fc89c83afc4f7a65caba); ?>
<?php endif; ?>
                                                </div>
                                                <div>
                                                    <h4 class="resume-title"><?php echo e(__('add_cv_resume')); ?></h4>
                                                    <h6 class="resume-size"><?php echo e(__('browse_file_here_only')); ?> - pdf</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                
                                <div class="tab-pane fade <?php echo e(session('type') == 'profile' ? 'show active' : ''); ?>"
                                    id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="dashboard-account-setting-item pb-0">
                                            <input type="hidden" name="type" value="profile">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'gender','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select
                                                        class="rt-selectactive w-100-p <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="gender">
                                                        <option <?php if($candidate->gender == 'male'): ?> selected <?php endif; ?>
                                                            value="male">
                                                            <?php echo e(__('male')); ?>

                                                        </option>
                                                        <option <?php if($candidate->gender == 'female'): ?> selected <?php endif; ?>
                                                            value="female">
                                                            <?php echo e(__('female')); ?>

                                                        </option>
                                                        <option <?php if($candidate->gender == 'other'): ?> selected <?php endif; ?>
                                                            value="other">
                                                            <?php echo e(__('other')); ?>

                                                        </option>
                                                    </select>
                                                    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'marital_status','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select name="marital_status" class="rt-selectactive w-100-p">
                                                        <option <?php if($candidate->marital_status == 'married'): ?> selected <?php endif; ?>
                                                            value="married"><?php echo e(__('married')); ?></option>
                                                        <option <?php if($candidate->marital_status == 'single'): ?> selected <?php endif; ?>
                                                            value="single"><?php echo e(__('single')); ?></option>
                                                    </select>
                                                    <?php $__errorArgs = ['marital_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'profession','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select name="profession" class="select2-taggable w-100-p">
                                                        <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($candidate->profession_id == $profession->id ? 'selected' : ''); ?>

                                                                value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php $__errorArgs = ['profession'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback"
                                                            role="alert"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'your_availability','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select id="available_status" name="status"
                                                        class="rt-selectactive form-control w-100-p">
                                                        <option value=""><?php echo e(__('select_one')); ?></option>
                                                        <option
                                                            <?php echo e(old('status', $candidate->status) == 'available' ? 'selected' : ''); ?>

                                                            value="available"><?php echo e(__('available')); ?></option>
                                                        <option
                                                            <?php echo e(old('status', $candidate->status) == 'not_available' ? 'selected' : ''); ?>

                                                            value="not_available"><?php echo e(__('not_available')); ?></option>
                                                        <option
                                                            <?php echo e(old('status', $candidate->status) == 'available_in' ? 'selected' : ''); ?>

                                                            value="available_in"><?php echo e(__('available_in')); ?></option>
                                                    </select>
                                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span
                                                            class="error invalid-feedback d-block"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-6 d-none" id="available_in_status">
                                                    <div>
                                                        <h4 class="f-size-14 ft-wt-5 rt-mb-20 lh-1">
                                                            <?php echo e(__('available_in')); ?></h4>
                                                        <div
                                                            class="d-flex align-items-center form-control-icon date datepicker">
                                                            <input type="text" id="available_id_date"
                                                                name="available_in"
                                                                value="<?php echo e(old('available_in', date('d-m-Y', strtotime($candidate->available_in)))); ?>"
                                                                placeholder="dd/mm/yyyy"
                                                                class="form-control border-cutom <?php $__errorArgs = ['available_in'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                            <span class="input-group-addon input-group-text-custom">
                                                                <?php if (isset($component)) { $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a = $attributes; } ?>
<?php $component = App\View\Components\Svg\CalendarIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.calendar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\CalendarIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $attributes = $__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__attributesOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a)): ?>
<?php $component = $__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a; ?>
<?php unset($__componentOriginal658abeed9108d2cfe1f7b59a089b3e3a); ?>
<?php endif; ?>
                                                            </span>
                                                        </div>
                                                        <?php $__errorArgs = ['available_in'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span
                                                                class="error invalid-feedback d-block"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'skills_you_have','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select name="skills[]" class="select2-taggable w-100-p" multiple>
                                                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($candidate->skills ? (in_array($skill->id, $candidate->skills->pluck('id')->toArray()) ? 'selected' : '') : ''); ?>

                                                                value="<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'languages_you_know','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <select name="languages[]" class="rt-selectactive w-100-p" multiple>
                                                        <?php $__currentLoopData = $candidate_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($candidate->languages ? (in_array($lang->id, $candidate->languages->pluck('id')->toArray()) ? 'selected' : '') : ''); ?>

                                                                value="<?php echo e($lang->id); ?>"><?php echo e($lang->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>

                                                <div class="col-lg-12 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'biography','class' => 'body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <textarea name="bio" id="image_ckeditor"><?php echo $candidate->bio; ?></textarea>
                                                    <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"><?php echo e(__($message)); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-lg-12 mt-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        <?php echo e(__('save_changes')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                
                                <div class="tab-pane fade <?php echo e(session('type') == 'experience' ? 'show active' : ''); ?>"
                                    id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
                                    <?php if($errors->any()): ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal471f5b7181d6db328e94a27b4930ed2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal471f5b7181d6db328e94a27b4930ed2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.tab.candidate-experience-setting-tab','data' => ['experiences' => $candidate->experiences]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.tab.candidate-experience-setting-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['experiences' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($candidate->experiences)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal471f5b7181d6db328e94a27b4930ed2f)): ?>
<?php $attributes = $__attributesOriginal471f5b7181d6db328e94a27b4930ed2f; ?>
<?php unset($__attributesOriginal471f5b7181d6db328e94a27b4930ed2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal471f5b7181d6db328e94a27b4930ed2f)): ?>
<?php $component = $__componentOriginal471f5b7181d6db328e94a27b4930ed2f; ?>
<?php unset($__componentOriginal471f5b7181d6db328e94a27b4930ed2f); ?>
<?php endif; ?>
                                    
                                    <hr>
                                    <?php if (isset($component)) { $__componentOriginal0fea6d27f9e826b879631da2854fc807 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fea6d27f9e826b879631da2854fc807 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.candidate.tab.candidate-education-setting-tab','data' => ['educations' => $candidate->educations]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.candidate.tab.candidate-education-setting-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['educations' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($candidate->educations)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fea6d27f9e826b879631da2854fc807)): ?>
<?php $attributes = $__attributesOriginal0fea6d27f9e826b879631da2854fc807; ?>
<?php unset($__attributesOriginal0fea6d27f9e826b879631da2854fc807); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fea6d27f9e826b879631da2854fc807)): ?>
<?php $component = $__componentOriginal0fea6d27f9e826b879631da2854fc807; ?>
<?php unset($__componentOriginal0fea6d27f9e826b879631da2854fc807); ?>
<?php endif; ?>
                                </div>

                                
                                <div class="tab-pane fade <?php echo e(session('type') == 'social' ? 'show active' : ''); ?>"
                                    id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                                    <div class="dashboard-account-setting-item">
                                        <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('put'); ?>
                                            <input type="hidden" name="type" value="social">
                                            <div class="row">
                                                <?php $__empty_1 = true; $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div class="col-12 custom-select-padding">
                                                        <div class="d-flex tw-items-center">
                                                            <div class="d-flex mborder">
                                                                <div class="position-relative">
                                                                    <select class="w-100-p border-0 new-select form-control"
                                                                        name="social_media[]">
                                                                        <option value="" class="d-none" disabled>
                                                                            <?php echo e(__('select_one')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'facebook' ? 'selected' : ''); ?>

                                                                            value="facebook"><?php echo e(__('facebook')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'twitter' ? 'selected' : ''); ?>

                                                                            value="twitter"><?php echo e(__('twitter')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'instagram' ? 'selected' : ''); ?>

                                                                            value="instagram"><?php echo e(__('instagram')); ?>

                                                                        </option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'youtube' ? 'selected' : ''); ?>

                                                                            value="youtube"><?php echo e(__('youtube')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'linkedin' ? 'selected' : ''); ?>

                                                                            value="linkedin"><?php echo e(__('linkedin')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'pinterest' ? 'selected' : ''); ?>

                                                                            value="pinterest"><?php echo e(__('pinterest')); ?>

                                                                        </option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'reddit' ? 'selected' : ''); ?>

                                                                            value="reddit"><?php echo e(__('reddit')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'github' ? 'selected' : ''); ?>

                                                                            value="github"><?php echo e(__('github')); ?></option>
                                                                        <option
                                                                            <?php echo e($social->social_media == 'other' ? 'selected' : ''); ?>

                                                                            value="other"><?php echo e(__('other')); ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="w-100">
                                                                    <input class="border-0" type="url" name="url[]"
                                                                        id=""
                                                                        placeholder="<?php echo e(__('profile_link_url')); ?>..."
                                                                        value="<?php echo e($social->url); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="tw-ms-2">
                                                                <button
                                                                    class="tw-w-12 tw-h-12 tw-border-0 tw-rounded tw-bg-[#F1F2F4] tw-inline-flex tw-justify-center tw-items-center"
                                                                    type="button" id="remove_item">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                                            stroke="#18191C" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                        <path d="M15 9L9 15" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 15L9 9" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <div class="col-12 custom-select-padding">
                                                        <div class="d-flex tw-items-center">
                                                            <div class="d-flex mborder">
                                                                <div class="position-relative">
                                                                    <select
                                                                        class="w-100-p border-0 new-select form-control"
                                                                        name="social_media[]">
                                                                        <option value="" class="d-none" disabled
                                                                            selected><?php echo e(__('select_one')); ?></option>
                                                                        <option value="facebook"><?php echo e(__('facebook')); ?>

                                                                        </option>
                                                                        <option value="twitter"><?php echo e(__('twitter')); ?>

                                                                        </option>
                                                                        <option value="instagram"><?php echo e(__('instagram')); ?>

                                                                        </option>
                                                                        <option value="youtube"><?php echo e(__('youtube')); ?>

                                                                        </option>
                                                                        <option value="linkedin"><?php echo e(__('linkedin')); ?>

                                                                        </option>
                                                                        <option value="pinterest"><?php echo e(__('pinterest')); ?>

                                                                        </option>
                                                                        <option value="reddit"><?php echo e(__('reddit')); ?>

                                                                        </option>
                                                                        <option value="github"><?php echo e(__('github')); ?>

                                                                        </option>
                                                                        <option value="other"><?php echo e(__('other')); ?>

                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="w-100">
                                                                    <input class="border-0" type="url" name="url[]"
                                                                        id=""
                                                                        placeholder="<?php echo e(__('profile_link_url')); ?>...">
                                                                </div>
                                                            </div>
                                                            <div class="tw-ms-2">
                                                                <button
                                                                    class="tw-w-12 tw-h-12 tw-border-0 tw-rounded tw-bg-[#F1F2F4] tw-inline-flex tw-justify-center tw-items-center"
                                                                    type="button" id="remove_item">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                                            stroke="#18191C" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                        <path d="M15 9L9 15" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 15L9 9" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div id="multiple_feature_part">
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn tw-bg-[#F1F2F4] w-100 mt-4 add-new-social"
                                                        onclick="add_features_field()" type="button">
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#18191C" stroke-width="1.5"
                                                                stroke-miterlimit="10" />
                                                            <path d="M6.875 10H13.125" stroke="#18191C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 6.875V13.125" stroke="#18191C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span><?php echo e(__('add_new_social_link')); ?></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">
                                                <?php echo e(__('save_changes')); ?>

                                            </button>
                                    </div>

                                    </form>
                                </div>

                                
                                <div class="tab-pane fade <?php echo e(session('type') == 'alert' || session('type') == 'contact' || session('type') == 'account' || session('type') == 'visibility' || session('type') == 'password' || session('type') == 'account-delete' ? 'show active' : ''); ?> <?php echo e(error('password', 'show active')); ?>"
                                    id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <input type="hidden" name="type" value="contact">
                                        <div class="dashboard-account-setting-item pb-0">
                                            <h6><?php echo e(__('location')); ?></h6>
                                            <?php if(config('templatecookie.map_show')): ?>
                                                <div class="row">

                                                    <div class="col-lg-12 mb-3">
                                                        <?php if (isset($component)) { $__componentOriginale4f5378857e0431db5db83c630fbf8d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4f5378857e0431db5db83c630fbf8d9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.map.map-warning','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.map.map-warning'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4f5378857e0431db5db83c630fbf8d9)): ?>
<?php $attributes = $__attributesOriginale4f5378857e0431db5db83c630fbf8d9; ?>
<?php unset($__attributesOriginale4f5378857e0431db5db83c630fbf8d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4f5378857e0431db5db83c630fbf8d9)): ?>
<?php $component = $__componentOriginale4f5378857e0431db5db83c630fbf8d9; ?>
<?php unset($__componentOriginale4f5378857e0431db5db83c630fbf8d9); ?>
<?php endif; ?>
                                                        <?php
                                                            $map = $setting->default_map;
                                                        ?>
                                                        <div id="google-map-div"
                                                            class="<?php echo e($map == 'google-map' ? '' : 'd-none'); ?>">
                                                            <input id="searchInput" class="mapClass" type="text"
                                                                placeholder="Enter a location">
                                                            <div class="map mymap" id="google-map"></div>
                                                        </div>
                                                        <div class="<?php echo e($map == 'leaflet' ? '' : 'd-none'); ?>">
                                                            <input type="text" autocomplete="off" id="leaflet_search"
                                                                placeholder="<?php echo e(__('enter_city_name')); ?>"
                                                                class="full-width placeholder:tw-normal-case"
                                                                value="<?php echo e($candidate->exact_location ? $candidate->exact_location : $candidate->full_address); ?>" />
                                                            <br>
                                                            <div id="leaflet-map"></div>
                                                        </div>
                                                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="ml-3 text-md text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <?php
                                                    $session_location = session()->get('location');
                                                    $session_country = $session_location && array_key_exists('country', $session_location) ? $session_location['country'] : '-';
                                                    $session_exact_location = $session_location && array_key_exists('exact_location', $session_location) ? $session_location['exact_location'] : '-';

                                                    $candidate_country = $candidate->country;
                                                    $candidate_exact_location = $candidate->exact_location;
                                                ?>
                                                <div class="card-footer row mt-4 border-0">
                                                    <span>
                                                        <img src="<?php echo e(asset('frontend/assets/images/loader.gif')); ?>"
                                                            alt="loading" width="50px" height="50px"
                                                            class="loader_position d-none">
                                                    </span>
                                                    <div class="location_secion">
                                                        <?php echo e(__('country')); ?>: <span
                                                            class="location_country"><?php echo e($candidate_country ?: $session_country); ?></span>
                                                        <br>
                                                        <?php echo e(__('full_address')); ?>: <span
                                                            class="location_full_address"><?php echo e($candidate_exact_location ?: $session_exact_location); ?></span>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <?php
                                                    session([
                                                        'selectedCountryId' => null,
                                                        'selectedStateId' => null,
                                                        'selectedCityId' => null,
                                                    ]);
                                                    session([
                                                        'selectedCountryId' => $candidate->country,
                                                        'selectedStateId' => $candidate->region,
                                                        'selectedCityId' => $candidate->district,
                                                    ]);
                                                ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('country-state-city')->html();
} elseif ($_instance->childHasBeenRendered('g1lC7Bs')) {
    $componentId = $_instance->getRenderedChildComponentId('g1lC7Bs');
    $componentTag = $_instance->getRenderedChildComponentTagName('g1lC7Bs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g1lC7Bs');
} else {
    $response = \Livewire\Livewire::mount('country-state-city');
    $html = $response->html();
    $_instance->logRenderedChild('g1lC7Bs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="dashboard-account-setting-item">
                                            <h6><?php echo e(__('your_contact_information')); ?></h6>
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'phone','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'phone','value' => ''.e($contact->phone).'','id' => 'phone','placeholder' => ''.e(__('phone')).'','class' => 'phonecode'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'secondary_phone','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'secondary_phone','value' => ''.e($contact->secondary_phone).'','id' => 'phone2','placeholder' => ''.e(__('phone')).'','class' => 'phonecode'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'whatsapp_number','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'text','name' => 'whatsapp_number','value' => ''.e($candidate->whatsapp_number).'','id' => 'whatsapp_number','placeholder' => ''.e(__('whatsapp_number')).'','class' => 'phonecode'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'email','class' => 'pointer body-font-4 d-block text-gray-900 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div class="fromGroup has-icon2">
                                                        <div class="form-control-icon">
                                                            <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['type' => 'email','name' => 'email','value' => ''.e($contact->email).'','id' => '','placeholder' => ''.e(__('email_address')).'','class' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                                                            <div class="icon-badge-2">
                                                                <?php if (isset($component)) { $__componentOriginalfb6c0846e17f2096e6264e518f1c213b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.envelope-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.envelope-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $attributes = $__attributesOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__attributesOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b)): ?>
<?php $component = $__componentOriginalfb6c0846e17f2096e6264e518f1c213b; ?>
<?php unset($__componentOriginalfb6c0846e17f2096e6264e518f1c213b); ?>
<?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">
                                                <?php echo e(__('save_changes')); ?>

                                            </button>
                                        </div>

                                    </form>

                                    <hr>
                                    <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <input type="hidden" name="type" value="account">
                                        <div class="dashboard-account-setting-item">
                                            <h6><?php echo e(__('change_account_email')); ?> </h6>
                                            <div class="row tw-mb-8">
                                                <div class="col-lg-6 mt-2">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'email','class' => 'f-size-14 text-gray-700 rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div class="fromGroup rt-mb-15">
                                                        <input name="account_email" value="<?php echo e(auth()->user()->email); ?>"
                                                            class="form-control <?php $__errorArgs = ['account_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            id="account_email" type="email"
                                                            placeholder="<?php echo e(__('email_address')); ?>" required>

                                                    </div>
                                                    <?php $__errorArgs = ['account_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <?php if(session('requested_email')): ?>
                                                    <small> Your email address <?php echo e(session('requested_email')); ?> is
                                                        unverified . Check you email </small>
                                                <?php endif; ?>


                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <?php echo e(__('update_email')); ?>

                                            </button>
                                        </div>
                                    </form>

                                    <hr>
                                    <div class="dashboard-account-setting-item setting-border">
                                        
                                        
                                        

                                        <div class="row">
                                            <form id="alert" action="<?php echo e(route('candidate.settingUpdate')); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>
                                                <input type="hidden" name="type" value="alert">
                                                <input type="hidden" name="alert_type" value="status">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6><?php echo e(__('job_alert')); ?></h6>
                                                    <div class="input-group-text bg-transparent border-0"
                                                        id="basic-addon1">
                                                        <div class="form-check form-switch">
                                                            <input type="hidden" value="0"
                                                                name="received_job_alert">
                                                            <input name="received_job_alert" class="form-check-input"
                                                                type="checkbox" id="flexSwitchCheckDefault"
                                                                value="1"
                                                                <?php echo e($candidate->received_job_alert ? 'checked' : ''); ?>>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>
                                                <input type="hidden" name="type" value="alert">
                                                <input type="hidden" name="alert_type" value="role">
                                                <div class="col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'choose_job_role','class' => 'f-size-14 text-gray-700'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div>
                                                        <div class="tw-flex tw-justify-between tw-gap-3">
                                                            <select class="select2-taggable w-100-p" multiple
                                                                name="job_roles[]">
                                                                <?php $__currentLoopData = $job_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        <?php echo e($candidate->jobRoleAlerts && count($candidate->jobRoleAlerts) ? (in_array($job_role->id, $candidate->jobRoleAlerts->pluck('job_role_id')->toArray()) ? 'selected' : '') : ''); ?>

                                                                        value="<?php echo e($job_role->id); ?>">
                                                                        <?php echo e($job_role->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <div>
                                                                <button type="submit" class="btn btn-primary">
                                                                    <?php echo e(__('save_changes')); ?>

                                                                </button>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <p>
                                                            [<?php echo e(__('note_you_will_be_notified_for_this_role_only')); ?>]
                                                        </p>
                                                        <div class="form-control-icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="dashboard-account-setting-item setting-border">
                                        <form id="visibility" action="<?php echo e(route('candidate.settingUpdate')); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('put'); ?>
                                            <input type="hidden" name="type" value="visibility">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label
                                                        class="text-gray-900 rt-mb-15 fw-medium"><?php echo e(__('profile_privacy')); ?></label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text bg-transparent border border-gray-50 extra-design"
                                                            id="basic-addon1">
                                                            <div class="form-check form-switch">
                                                                <input name="profile_visibility" class="form-check-input"
                                                                    type="checkbox" id="flexSwitchCheckDefault"
                                                                    <?php echo e($candidate->visibility ? 'checked' : ''); ?>>
                                                                <span
                                                                    class="form-check-label f-size-14"><?php echo e(__('yes')); ?></span>
                                                            </div>
                                                        </div>
                                                        <input disabled type="text" class="form-control"
                                                            placeholder="Votre profil est <?php echo e($candidate->visibility ? 'public' : 'privé'); ?> maintenant"
                                                            id="msalary">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => false,'name' => 'resume_privacy','class' => 'text-gray-900 rt-mb-15 fw-medium'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text bg-transparent border border-gray-50 extra-design"
                                                            id="basic-addon1">
                                                            <div class="form-check form-switch">
                                                                <input name="cv_visibility" class="form-check-input"
                                                                    type="checkbox" id="flexSwitchCheckDefault"
                                                                    <?php echo e($candidate->cv_visibility ? 'checked' : ''); ?>>
                                                                <span
                                                                    class="form-check-label f-size-14"><?php echo e(__('yes')); ?></span>
                                                            </div>
                                                        </div>
                                                        <input disabled type="text" class="form-control"
                                                            placeholder="Votre Cv est <?php echo e($candidate->cv_visibility ? 'public' : 'privé'); ?> maintenant   "
                                                            id="msalary">
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="dashboard-account-setting-item setting-border">
                                        <h6><?php echo e(__('change_password')); ?></h6>
                                        <form action="<?php echo e(route('candidate.settingUpdate')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('put'); ?>
                                            <input type="hidden" name="type" value="password">
                                            <div class="row">
                                                <div class="col-lg-6 rt-mb-32">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'new_password','class' => 'f-size-14 text-gray-700 rt-mb-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div class="fromGroup rt-mb-15">
                                                        <div class="d-flex">
                                                            <input name="password"
                                                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                id="password-hide_show" type="password"
                                                                placeholder="<?php echo e(__('password')); ?>" required>
                                                            <div
                                                                class="has-badge <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-badge-cutom <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                                <i class="ph-eye <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> m-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>
                                                            </div>
                                                        </div>
                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span role="alert"
                                                                class="text-danger"><?php echo e(__($message)); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 rt-mb-32">
                                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['required' => true,'name' => 'confirm_password','class' => 'f-size-14 text-gray-700 rt-mb-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                                    <div class="fromGroup rt-mb-15">
                                                        <input name="password_confirmation"
                                                            class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            id="password-hide_show1" type="password"
                                                            placeholder="<?php echo e(__('confirm_password')); ?>" required>
                                                        <div
                                                            class="has-badge <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-badge-cutom <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> select-icon__one">
                                                            <i class="ph-eye"></i>
                                                        </div>
                                                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">
                                                        <?php echo e(__('save_changes')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="dashboard-account-setting-item setting-border">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4><?php echo e(__('close_delete_account')); ?></h4>
                                                <p><?php echo e(__('account_delete_msg')); ?></p>
                                                <form action="<?php echo e(route('candidate.settingUpdate')); ?>" id="AccountDelete"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('put'); ?>
                                                    <input type="hidden" name="type" value="account-delete">
                                                    <button type="button" onclick="AccountDelete()"
                                                        class="btn p-0 text-danger-500">
                                                        <span class="button-content-wrapper ">
                                                            <span class="button-icon">
                                                                <i class="ph-x-circle"></i>
                                                            </span>
                                                            <span class="button-text">
                                                                <?php echo e(__('close_account')); ?>

                                                            </span>
                                                        </span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-footer text-center body-font-4 text-gray-500">
            <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
        </div>
    </div>

    
    <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog tw-max-w-[536px]">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.resume.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <h5 class="tw-text-lg tw-text-[#18191C] tw-font-semibold tw-mb-[18px]" id="cvModalLabel">
                            <?php echo e(__('add_cv_resume')); ?></h5>
                        <div class="from-group py-2">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'cv_resume_name','required' => true,'class' => 'tw-mb-2 tw-text-sm tw-text-[#18191C]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <input type="text" name="resume_name" id="">
                            <?php $__errorArgs = ['is_remote'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group tw-mb-6">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'upload_cv_resume','class' => 'tw-mb-2 tw-text-sm tw-text-[#18191C]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="cv-image-upload-wrap">
                                <input name="resume_file" class="resume-file-upload-input" type="file"
                                    onchange="resumeManageReadURL(this, 'add');" accept="application/pdf"
                                    id="resume_add_input" />
                                <div class="drag-text">
                                    <?php if (isset($component)) { $__componentOriginal6af3e2b436adce470320268b793cd726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6af3e2b436adce470320268b793cd726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.upload-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.upload-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6af3e2b436adce470320268b793cd726)): ?>
<?php $attributes = $__attributesOriginal6af3e2b436adce470320268b793cd726; ?>
<?php unset($__attributesOriginal6af3e2b436adce470320268b793cd726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6af3e2b436adce470320268b793cd726)): ?>
<?php $component = $__componentOriginal6af3e2b436adce470320268b793cd726; ?>
<?php unset($__componentOriginal6af3e2b436adce470320268b793cd726); ?>
<?php endif; ?>
                                    <h3><?php echo e(__('browse_file')); ?></h3>
                                    <p><?php echo e(__('available_format')); ?> - PDF<br>
                                        <?php echo e(__('maximum_file_size')); ?> - 5 MB</p>
                                </div>
                            </div>
                            <div class="resume-file-upload-content none ">
                                <div class="wrap">
                                    <?php if (isset($component)) { $__componentOriginal5e5d0732d90e7647317fbfb9a794b048 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.file-icon2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.file-icon2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $attributes = $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $component = $__componentOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
                                    <h3 class="resume_selected_file_name">file</h3>
                                    <p>
                                        <span><span class="resume_selected_file_size">2.3</span> MB</span> <br>
                                        <span class="resume_selected_file_type">.pdf</span>
                                    </p>
                                    <div class="image-title-wrap">
                                        <button type="button" class="cv-remove-image">
                                            <?php if (isset($component)) { $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222 = $attributes; } ?>
<?php $component = App\View\Components\Svg\TrashIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.trash-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\TrashIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $attributes = $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $component = $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tw-flex tw-justify-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50" data-bs-dismiss="modal"
                                aria-label="Close"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('add_cv_resume')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                        <button type="button"
                            class="tw-rounded-full tw-flex tw-items-center tw-justify-center tw-p-3 tw-absolute -tw-top-[25px] -tw-right-[25px] tw-bg-white tw-border-2 tw-border-[#E7F0FA]"
                            data-bs-dismiss="modal" aria-label="Close">
                            <?php if (isset($component)) { $__componentOriginal20d8cfa0472e43878d38f6995aa6f752 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d8cfa0472e43878d38f6995aa6f752 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.modal-cross-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.modal-cross-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d8cfa0472e43878d38f6995aa6f752)): ?>
<?php $attributes = $__attributesOriginal20d8cfa0472e43878d38f6995aa6f752; ?>
<?php unset($__attributesOriginal20d8cfa0472e43878d38f6995aa6f752); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d8cfa0472e43878d38f6995aa6f752)): ?>
<?php $component = $__componentOriginal20d8cfa0472e43878d38f6995aa6f752; ?>
<?php unset($__componentOriginal20d8cfa0472e43878d38f6995aa6f752); ?>
<?php endif; ?>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="resumeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog tw-max-w-[536px]">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.resume.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="resume_id" id="resume_id_input">
                    <div class="modal-body">
                        <h5 class="tw-text-lg tw-text-[#18191C] tw-font-semibold tw-mb-[18px]" id="cvModalLabel">
                            <?php echo e(__('update_cv_resume')); ?></h5>
                        <div class="from-group py-2">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'cv_resume_name','required' => true,'class' => 'tw-mb-2 tw-text-sm tw-text-[#18191C]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <input type="text" name="resume_name" id="resume_name_input">
                            <?php $__errorArgs = ['is_remote'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group tw-mb-6">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'upload_cv_resume','class' => 'tw-mb-2 tw-text-sm tw-text-[#18191C]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="cv-image-upload-wrap">
                                <input name="resume_file" class="resume-file-upload-input" type="file"
                                    onchange="resumeManageReadURL(this, 'edit');" accept="application/pdf"
                                    id="resume_edit_input" />
                                <div class="drag-text">
                                    <?php if (isset($component)) { $__componentOriginal6af3e2b436adce470320268b793cd726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6af3e2b436adce470320268b793cd726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.upload-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.upload-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6af3e2b436adce470320268b793cd726)): ?>
<?php $attributes = $__attributesOriginal6af3e2b436adce470320268b793cd726; ?>
<?php unset($__attributesOriginal6af3e2b436adce470320268b793cd726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6af3e2b436adce470320268b793cd726)): ?>
<?php $component = $__componentOriginal6af3e2b436adce470320268b793cd726; ?>
<?php unset($__componentOriginal6af3e2b436adce470320268b793cd726); ?>
<?php endif; ?>
                                    <h3><?php echo e(__('change_file')); ?></h3>
                                    <p><?php echo e(__('current_resume_size')); ?>: <span id="resume_file_size"></span></p>
                                </div>
                            </div>
                            <div class="resume-file-upload-content none ">
                                <div class="wrap">
                                    <?php if (isset($component)) { $__componentOriginal5e5d0732d90e7647317fbfb9a794b048 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.file-icon2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.file-icon2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $attributes = $__attributesOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__attributesOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048)): ?>
<?php $component = $__componentOriginal5e5d0732d90e7647317fbfb9a794b048; ?>
<?php unset($__componentOriginal5e5d0732d90e7647317fbfb9a794b048); ?>
<?php endif; ?>
                                    <h3 class="resume_selected_file_name">file</h3>
                                    <p>
                                        <span><span class="resume_selected_file_size">2.3</span> MB</span> <br>
                                        <span class="resume_selected_file_type">.pdf</span>
                                    </p>
                                    <div class="image-title-wrap">
                                        <button type="button" class="cv-remove-image">
                                            <?php if (isset($component)) { $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222 = $attributes; } ?>
<?php $component = App\View\Components\Svg\TrashIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.trash-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\TrashIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $attributes = $__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__attributesOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222)): ?>
<?php $component = $__componentOriginald4cb652b3e1f6eeb66ae501a13aad222; ?>
<?php unset($__componentOriginald4cb652b3e1f6eeb66ae501a13aad222); ?>
<?php endif; ?>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tw-flex tw-justify-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50" data-bs-dismiss="modal"
                                aria-label="Close"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('add_cv_resume')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                        <button type="button"
                            class="tw-rounded-full tw-flex tw-items-center tw-justify-center tw-p-3 tw-absolute -tw-top-[25px] -tw-right-[25px] tw-bg-white tw-border-2 tw-border-[#E7F0FA]"
                            data-bs-dismiss="modal" aria-label="Close">
                            <?php if (isset($component)) { $__componentOriginal20d8cfa0472e43878d38f6995aa6f752 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d8cfa0472e43878d38f6995aa6f752 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.modal-cross-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.modal-cross-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d8cfa0472e43878d38f6995aa6f752)): ?>
<?php $attributes = $__attributesOriginal20d8cfa0472e43878d38f6995aa6f752; ?>
<?php unset($__attributesOriginal20d8cfa0472e43878d38f6995aa6f752); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d8cfa0472e43878d38f6995aa6f752)): ?>
<?php $component = $__componentOriginal20d8cfa0472e43878d38f6995aa6f752; ?>
<?php unset($__componentOriginal20d8cfa0472e43878d38f6995aa6f752); ?>
<?php endif; ?>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.educations.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel"><?php echo e(__('add_educations')); ?></h5>
                        
                        <div class="row rt-mb-18">
                            
                            <div class="col-md-9">
                                <div class="from-group rt-mb-18">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'diploma_or_certificat','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input type="text" name="level" required class="<?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(strtolower(__('diploma_or_certificat') )); ?>">
                                    <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="error invalid-feedback"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'year_obtention','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input type="text" name="year" value="<?php echo e(old('year')); ?>" placeholder="<?php echo e(__('year')); ?> "
                                    class="year_picker form-control border-cutom <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-12">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'notes','class' => 'rt-mb-8','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea class="form-control <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   name="notes" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                onclick="closeAddEducationModal()"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('add_education')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn-close" onclick="closeAddEducationModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    
    <div class="modal fade" id="editEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.educations.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel"><?php echo e(__('edit_education')); ?></h5>
                        <input type="hidden" name="education_id" id="education-modal-id">
                       
                        <div class="row rt-mb-18">
                            
                            <div class="col-md-9">
                                <div class="from-group rt-mb-18">
                                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'education_level','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <input id="education-modal-level" type="text" name="level" required
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('education_level')); ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'year','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input id="education-modal-year" type="text" name="year"
                                    value="<?php echo e(old('year')); ?>" placeholder="d/m/y"
                                    class="year_picker form-control border-cutom <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    required>
                            </div>
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-12">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'notes','class' => 'rt-mb-8','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea id="education-notes" class="form-control <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('notes')); ?>" name="notes" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                onclick="closeEditEducationModal()"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('update_education')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn-close" onclick="closeEditEducationModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="addExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.experiences.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel"><?php echo e(__('add_experience')); ?></h5>
                        <div class="from-group rt-mb-18">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'company','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <input type="text" name="company" required class="<?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('enter')); ?> <?php echo e(strtolower(__('the_company_name'))); ?>">

                            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'department','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input type="text" name="department" required
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('the_department')); ?>">
                            </div>
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'designation','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input type="text" name="designation" required
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('the')); ?> <?php echo e(strtolower(__('designation'))); ?> ">
                            </div>
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'start_date','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input type="text" name="start" value="<?php echo e(old('start')); ?>" placeholder="yyyy-mm-dd"
                                    class="date_picker form-control border-cutom <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    required>
                            </div>
                            <div class="col-lg-6 experience_end_date">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'end_date','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input type="text" name="end" value="<?php echo e(old('end')); ?>" placeholder="yyyy-mm-dd"
                                    class="date_picker form-control border-cutom <?php $__errorArgs = ['end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                        </div>
                        <div class="from-group d-flex gap-2 align-items-center rt-mb-24 custom-checkbox">
                            <input type="checkbox" name="currently_working" id="experience-modal-checkbox_create"
                                value="1">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'i_am_currently_working','for' => 'experience-modal-checkbox_create','required' => false,'class' => '!tw-mb-0 tw-cursor-pointer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-12">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'responsibilities','class' => 'rt-mb-8','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea class="form-control <?php $__errorArgs = ['responsibilities'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('these')); ?> <?php echo e(strtolower(__('responsibilities'))); ?>" name="responsibilities" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                onclick="closeAddExperienceModal()"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('add_experience')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn-close" onclick="closeAddExperienceModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    
    <div class="modal fade" id="editExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('candidate.experiences.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel"><?php echo e(__('edit_experience')); ?></h5>
                        <input type="hidden" name="experience_id" id="experience-modal-id">
                        <div class="from-group rt-mb-18">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'company','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <input id="experience-modal-company" type="text" name="company" required
                                placeholder="<?php echo e(__('enter')); ?> <?php echo e(strtolower(__('the_company_name'))); ?>">
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'department','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input id="experience-modal-department" type="text" name="department" required
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('the_department')); ?>">
                            </div>
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'designation','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input id="experience-modal-designation" type="text" name="designation" required
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('the')); ?> <?php echo e(strtolower(__('designation'))); ?>">
                            </div>
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'start_date','class' => 'rt-mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input id="experience-modal-start" type="text" name="start"
                                    value="<?php echo e(old('start')); ?>" placeholder="yyyy-mm-dd"
                                    class="date_picker form-control border-cutom <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    required>
                            </div>
                            <div class="col-lg-6 experience_end_date">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'end_date','class' => 'rt-mb-8','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <input id="experience-modal-end" type="text" name="end"
                                    value="<?php echo e(old('end')); ?>" placeholder="yyyy-mm-dd"
                                    class="date_picker form-control border-cutom <?php $__errorArgs = ['end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                        </div>
                        <div class="from-group d-flex gap-2 align-items-center rt-mb-24">
                            <input type="checkbox" name="currently_working" id="experience-modal-checkbox_edit"
                                value="1">
                            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'i_am_currently_working','for' => 'experience-modal-checkbox_edit','required' => false,'class' => '!tw-mb-0 !tw-cursor-pointer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        </div>
                        <div class="row rt-mb-18">
                            <div class="col-lg-12">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'responsibilities','class' => 'rt-mb-8','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea id="experience-responsibilities" class="form-control <?php $__errorArgs = ['responsibilities'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('these')); ?> <?php echo e(strtolower(__('responsibilities'))); ?>" name="responsibilities" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                            <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                onclick="closeEditExperienceModal()"><?php echo e(__('cancel')); ?></button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="button-content-wrapper ">
                                    <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                    <span class="button-text">
                                        <?php echo e(__('update_experience')); ?>

                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn-close" onclick="closeEditExperienceModal()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/css/bootstrap-datepicker.min.css">
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
    <?php if (isset($component)) { $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.map.leaflet.autocomplete_links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('map.leaflet.autocomplete_links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $attributes = $__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__attributesOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b)): ?>
<?php $component = $__componentOriginalc55f239e5bf30e5997dd7869a18fb76b; ?>
<?php unset($__componentOriginalc55f239e5bf30e5997dd7869a18fb76b); ?>
<?php endif; ?>
    <?php echo $__env->make('map::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

        .w-100-percent {
            width: 100% !important;
        }

        #jobrole #basic-addon1 {
            width: 50px !important;
            margin-left: 28px !important;
        }

        .border-cutom {
            border-radius: 5px 0 0 5px !important;
        }

        .input-group-text-custom {
            max-height: 48px;
            padding: 12px;
            background-color: #e9ecef;
            border-radius: 0 5px 5px 0;
        }

        .has-badge-cutom {
            top: 34% !important;
        }
    </style>


    <style>
        .mymap {
            border-radius: 12px;
            z-index: 999;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.select21').select2();
        });
        window.addEventListener('render-select2', event => {
            console.log('fired');
            $('.select21').select2();
        })
    </script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <?php if(app()->getLocale() == 'ar'): ?>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ar.min.js
                                                                                                                                    ">
        </script>
    <?php endif; ?>
    <script>
        //init datepicker
        $("#available_id_date").attr("autocomplete", "off");

        availableStatus('<?php echo e(old('status', $candidate->status)); ?>');

        $('#available_status').on('change', function() {
            availableStatus(this.value);
        });

        function availableStatus(status) {
            if (status == 'available_in') {
                $('#available_in_status').removeClass('d-none');
            } else {
                $('#available_in_status').addClass('d-none');
            }
        }


        function UploadMode(param) {
            if (param === 'photo') {
                $('#photo-uploadMode').removeClass('d-none');
                $('#photo-oldMode').addClass('d-none');
            } else {
                $('#banner-uploadMode').removeClass('d-none');
                $('#banner-oldMode').addClass('d-none');
            }
        }
        //init datepicker
        $("#date").attr("autocomplete", "off");
        //init datepicker
        $('#date').datepicker({
            format: 'dd-mm-yyyy',
            isRTL: "<?php echo e(app()->getLocale() == 'ar' ? true : false); ?>",
            language: "<?php echo e(app()->getLocale()); ?>",
            endDate: new Date()
        });
    </script>
    <script>
        $('#visibility').on('change', function() {
            $(this).submit();
        });
        $('#alert').on('change', function() {
            $(this).submit();
        });

        function AccountDelete() {
            if (confirm("Are you sure ??") == true) {
                $('#AccountDelete').submit();
            } else {
                return false;
            }
        }

        function resumeDelete() {
            if (confirm("Are you sure ?") == true) {
                $('#resumeForm').submit();
            } else {
                return false;
            }
        }

        function editResume(id, name, size) {
            $('#resume_id_input').val(id);
            $('#resume_name_input').val(name);
            $('#resume_file_size').html(size);
            $('#resumeEditModal').modal('show');
        }
        $('.cv-remove-image').on('click', function() {
            $('.resume-file-upload-input').replaceWith($('.resume-file-upload-input').clone());
            $('.resume-file-upload-content').hide();
            $('.cv-image-upload-wrap').show();
            $('.resume-file-upload-input').val('');
        })

        function resumeManageReadURL(input, type) {
            if (type == 'add') {
                var fileName = document.querySelector('#resume_add_input').files[0].name;
                var fileSize = document.querySelector('#resume_add_input').files[0].size / 1024 / 1024;
                var fileType = document.querySelector('#resume_add_input').files[0].type;
            } else {
                var fileName = document.querySelector('#resume_edit_input').files[0].name;
                var fileSize = document.querySelector('#resume_edit_input').files[0].size / 1024 / 1024;
                var fileType = document.querySelector('#resume_edit_input').files[0].type;
            }
            $('.resume_selected_file_name').html(fileName);
            $('.resume_selected_file_size').html(fileSize.toFixed(4));
            $('.resume_selected_file_type').html(fileType);
            if (input.files && input.files[0]) {
                console.log(input.className)
                var reader = new FileReader();
                reader.onload = function(e) {
                    if (input.className === 'profile-file-upload-input') {
                        $('.profile-image-upload-wrap').hide();
                        $('.profile-file-upload-image').attr('src', e.target.result);
                        $('.profile-file-upload-content').show();
                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'banner-file-upload-input') {
                        $('.banner-image-upload-wrap').hide();
                        $('.banner-file-upload-image').attr('src', e.target.result);
                        $('.banner-file-upload-content').show();
                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'resume-file-upload-input') {
                        $('.cv-image-upload-wrap').hide();
                        $('.resume-file-upload-content.none').show();
                    }
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                $('.profile-remove-image').on('click', function() {
                    // console.log(this.className)
                    $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
                    $('.profile-file-upload-content').hide();
                    $('.profile-file-upload-image').attr('src', '');
                    $('.profile-image-upload-wrap').show();
                })
                $('.banner-remove-image').on('click', function() {
                    // console.log(this.className)
                    $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
                    $('.banner-file-upload-content').hide();
                    $('.banner-file-upload-image').attr('src', '');
                    $('.banner-image-upload-wrap').show();
                })
            }
        }
        setTimeout(function() {
            <?php echo e(session()->forget('type')); ?>

        }, 10000);
    </script>

    
    <?php echo $__env->make('map::set-edit-leafletmap', ['lat' => $candidate->lat, 'long' => $candidate->long], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- ============== google map ========= -->
    <?php if (isset($component)) { $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.map.google-map-check','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.map.google-map-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $attributes = $__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__attributesOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4)): ?>
<?php $component = $__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4; ?>
<?php unset($__componentOriginal8bb4a77cbcdce0dc52116df2fe1539c4); ?>
<?php endif; ?>
    <script>
        function initMap() {
            var token = "<?php echo e($setting->google_map_key); ?>";
            var oldlat = <?php echo $candidate->lat ? $candidate->lat : $setting->default_lat; ?>;
            var oldlng = <?php echo $candidate->long ? $candidate->long : $setting->default_long; ?>;
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
                draggable: true,
                position: {
                    lat: oldlat,
                    lng: oldlng
                },
                map,
                // icon: image
            });
            google.maps.event.addListener(map, 'click',
                function(event) {
                    $('.loader_position').removeClass('d-none');
                    $('.location_secion').addClass('d-none');

                    pos = event.latLng
                    beachMarker.setPosition(pos);
                    let lat = beachMarker.position.lat();
                    let lng = beachMarker.position.lng();
                    axios.post(
                        `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${token}`
                    ).then((data) => {
                        if (data.data.error_message) {
                            toastr.error(data.data.error_message, 'Error!');
                            toastr.error('Your location is not set because of a wrong API key.', 'Error!');
                        }

                        const total = data.data.results.length;
                        let amount = '';
                        if (total > 1) {
                            amount = total - 2;
                        }
                        const result = data.data.results.slice(amount);
                        let country = '';
                        let region = '';
                        for (let index = 0; index < result.length; index++) {
                            const element = result[index];
                            if (element.types[0] == 'country') {
                                country = element.formatted_address;
                            }
                            if (element.types[0] == 'administrative_area_level_1') {
                                const str = element.formatted_address;
                                const first = str.split(',').shift()
                                region = first;
                            }
                        }
                        var form = new FormData();
                        form.append('lat', lat);
                        form.append('lng', lng);
                        form.append('country', country);
                        form.append('region', region);
                        form.append('exact_location', data.data.results[0].formatted_address);

                        setLocationSession(form);

                        $('.location_country').text(country);
                        $('.location_full_address').text(data.data.results[0].formatted_address ||
                            'No address found');
                        $('.loader_position').addClass('d-none');
                        $('.location_secion').removeClass('d-none');
                    })
                });
            google.maps.event.addListener(beachMarker, 'dragend',
                function() {
                    $('.loader_position').removeClass('d-none');
                    $('.location_secion').addClass('d-none');

                    let lat = beachMarker.position.lat();
                    let lng = beachMarker.position.lng();
                    axios.post(
                        `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${token}`
                    ).then((data) => {
                        if (data.data.error_message) {
                            toastr.error(data.data.error_message, 'Error!');
                            toastr.error('Your location is not set because of a wrong API key.', 'Error!');
                        }

                        const total = data.data.results.length;
                        let amount = '';
                        if (total > 1) {
                            amount = total - 2;
                        }
                        const result = data.data.results.slice(amount);
                        let country = '';
                        let region = '';
                        for (let index = 0; index < result.length; index++) {
                            const element = result[index];
                            if (element.types[0] == 'country') {
                                country = element.formatted_address;
                            }
                            if (element.types[0] == 'administrative_area_level_1') {
                                const str = element.formatted_address;
                                const first = str.split(' ').shift()
                                region = first;
                            }
                        }
                        var form = new FormData();
                        form.append('lat', lat);
                        form.append('lng', lng);
                        form.append('country', country);
                        form.append('region', region);
                        form.append('exact_location', data.data.results[0].formatted_address);

                        setLocationSession(form);

                        $('.location_country').text(country);
                        $('.location_full_address').text(data.data.results[0].formatted_address ||
                            'No address found');
                        $('.loader_position').addClass('d-none');
                        $('.location_secion').removeClass('d-none');
                    })
                });
            // Search
            var input = document.getElementById('searchInput');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            let country_code = '<?php echo e(current_country_code()); ?>';
            if (country_code) {
                var options = {
                    componentRestrictions: {
                        country: country_code
                    }
                };
                var autocomplete = new google.maps.places.Autocomplete(input, options);
            } else {
                var autocomplete = new google.maps.places.Autocomplete(input);
            }

            autocomplete.bindTo('bounds', map);
            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });
            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
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
    <!-- =============== google map ========= -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("[data-toggle=tooltip]").tooltip()
        })
    </script>

    <script>
        $('#pills-setting-tab').on('click', function() {
            setTimeout(() => {
                map.resize();
                leaflet_map.invalidateSize(true);
            }, 200);
        })
    </script>
    <script>
        $(".new-select").select2({ // minimumResultsForSearch: Infinity,
        });
    </script>
    <script type="text/javascript">
        // feature field
        function add_features_field() {
            $("#multiple_feature_part").append(`
        <div class="col-12 custom-select-padding">
            <div class="d-flex tw-items-center">
                <div class="d-flex mborder">
                    <div class="position-relative">
                        <select
                            class="w-100-p border-0 rt-selectactive-2 form-control" name="social_media[]">
                            <option value="" class="d-none" disabled selected><?php echo e(__('select_one')); ?></option>
                            <option value="facebook"><?php echo e(__('facebook')); ?></option>
                            <option value="twitter"><?php echo e(__('twitter')); ?></option>
                            <option value="instagram"><?php echo e(__('instagram')); ?></option>
                            <option value="youtube"><?php echo e(__('youtube')); ?></option>
                            <option value="linkedin"><?php echo e(__('linkedin')); ?></option>
                            <option value="pinterest"><?php echo e(__('pinterest')); ?></option>
                            <option value="reddit"><?php echo e(__('reddit')); ?></option>
                            <option value="github"><?php echo e(__('github')); ?></option>
                            <option value="other"><?php echo e(__('other')); ?></option>
                        </select>
                    </div>
                    <div class="w-100">
                        <input class="border-0" type="url" name="url[]" id="" placeholder="<?php echo e(__('profile_link_url')); ?>...">
                    </div>
                </div>
                <div class="tw-ms-2">
                    <button class="tw-w-12 tw-h-12 tw-border-0 tw-rounded tw-bg-[#F1F2F4] tw-inline-flex tw-justify-center tw-items-center" type="button" id="remove_item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#18191C" stroke-width="1.5" stroke-miterlimit="10"/>
                            <path d="M15 9L9 15" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 15L9 9" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `);
    $(".rt-selectactive-2").select2({ // minimumResultsForSearch: Infinity,
});
        }

        $(document).on("click", "#remove_item", function() {
            $(this).parent().parent().parent('div').remove();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/candidate/setting.blade.php ENDPATH**/ ?>
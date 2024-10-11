<?php $__env->startSection('title'); ?>
    <?php echo e(__('custom_css_and_js')); ?>

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
                <li class="breadcrumb-item active"><?php echo e(__('custom_css_and_js')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('custom_css_and_JS')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('custom_css_and_JS')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="alert alert-warning mb-3">
        <?php echo e(__('use_this_feature_to_integrate_any_third_party_integration_tool_using_their_verification_method_for_example')); ?>

        <a target="_blank" href="https://search.google.com/search-console"> <?php echo e(__('google_search_console')); ?> </a>, 
        <a target="_blank" href="https://analytics.google.com/"> <?php echo e(__('google_analytics')); ?></a>, 
        <a target="_blank" href="https://www.facebook.com/business/tools/meta-pixel"> <?php echo e(__('facebook_pixel')); ?></a>, 
        <a target="_blank" href="https://www.hubspot.com/"><?php echo e(__('hubspot_verification')); ?></a>, 
        <a target="_blank" href="https://zoho.com"><?php echo e(__('zoho_verification')); ?></a>, 
        <a target="_blank" href="https://help.pinterest.com/en/business/article/claim-your-website"> <?php echo e(__('pinterest_verification')); ?></a>, <?php echo e(__('and_many_more')); ?>

    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title line-height-36"><?php echo e(__('custom_css_and_js')); ?></h3>
        </div>
        <div class="row pt-3 pb-4">
            <div class="col-12">
                <div class="">
                    <div class="card-body">
                        <form action="<?php echo e(route('settings.custom.update')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'header_custom_style_before_head_end','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea name="header_css" id="headerCss" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    rows="5"><?php echo e($setting->header_css); ?></textarea>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"> <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <span><?php echo e(__('write_style_with_style_tag_like')); ?>,&nbsp;&nbsp;</span>
                                <span>
                                    <code>
                                        &lt;style&gt;
                                        .header-custom-style {
                                        color: red;
                                        }
                                        &lt;/style&gt;
                                    </code>
                                </span>
                            </div>
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'header_custom_script_before_head_end','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea name="header_script" id="headerScript" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    rows="5"><?php echo e($setting->header_script); ?></textarea>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"> <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <span><?php echo e(__('write_script_with_script_tag_like')); ?>,&nbsp;&nbsp;</span>
                                <span>
                                    <code>
                                        &lt;script&gt;
                                        console.log('Hello World');
                                        &lt;/script&gt;
                                    </code>
                                </span>
                            </div>
                            <div class="form-group">
                                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['name' => 'footer_custom_script_before_body_end','required' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <textarea name="body_script" id="bodyScript" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    rows="5"><?php echo e($setting->body_script); ?></textarea>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block" role="alert"> <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <span><?php echo e(__('write_script_with_script_tag')); ?>,&nbsp;&nbsp;</span>
                                <span>
                                    <code>
                                        &lt;script&gt;
                                        console.log('Hello World');
                                        &lt;/script&gt;
                                    </code>
                                </span>
                            </div>
                            <?php if(userCan('setting.update')): ?>
                                <div class="form-group">
                                    <button class="btn btn-primary"><?php echo e(__('update')); ?></button>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <!-- Create a simple CodeMirror instance -->
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/addon/foldgutter.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/theme/monokai.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/theme/material.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/theme/material-ocean.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/codemirror/theme/yonce.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Create a simple CodeMirror instance -->
    <script src="<?php echo e(asset('backend')); ?>/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/codemirror/mode/javascript/javascript.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/codemirror/mode/css/css.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/codemirror/addon/active-line.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/codemirror/addon/closebrackets.js"></script>
    <script>
        let headerCss = document.getElementById('headerCss');
        let headerScript = document.getElementById('headerScript');
        let bodyScript = document.getElementById('bodyScript');

        var editor = CodeMirror.fromTextArea(headerCss, {
            lineNumbers: true,
            styleActiveLine: true,
            lineWrapping: true,
            autoCloseBrackets: true,
            // theme: "material",
            mode: "css",
        });
        var editor = CodeMirror.fromTextArea(headerScript, {
            lineNumbers: true,
            styleActiveLine: true,
            lineWrapping: true,
            autoCloseBrackets: true,
            // theme: "material",
            mode: "javascript",
        });
        var editor = CodeMirror.fromTextArea(bodyScript, {
            lineNumbers: true,
            styleActiveLine: true,
            lineWrapping: true,
            autoCloseBrackets: true,
            // theme: "material",
            mode: "javascript",
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/custom.blade.php ENDPATH**/ ?>
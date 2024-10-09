<?php $__env->startSection('title'); ?>
    <?php echo e(__('website_settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('email_templates')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('email_templates')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <ul class="nav nav-pills flex-column">
                    <?php $__currentLoopData = $email_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email_template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $type = $email_template->type ?? "new";
                        ?>
                        <li class="nav-item border rounded mb-1">
                            <a class="nav-link <?php echo e($loop->first  ? 'active' : ''); ?>" data-toggle="tab"
                                href="#<?php echo e($type); ?>"><?php echo e($email_template->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="tab-content no-padding">
                    <?php $__currentLoopData = $email_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email_template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make("backend.layouts.partials.email-template-repeater", [
                            "active" => $loop->first,
                            "id" => $email_template->id,
                            "name" => $email_template->name ?? "",
                            "type" => $email_template->type ?? "",
                            "subject" => $email_template->subject ?? "",
                            "message" => $email_template->message ?? "",
                            "flags" => getEmailTemplateFormatFlagsByType($email_template->type ?? "")
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        (function ($) {
            "use strict"
            $(document).ready(function () {
                $(".classic-editor").map(function (i, elem) {
                    console.log(elem);
                    ClassicEditor.create(elem)
                        .then(editor => {
                            editor.ui.view.editable.element.style.height = '250px';
                        })
                        .catch(error => {
                            console.error(error);
                        });
                });
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/email-template.blade.php ENDPATH**/ ?>
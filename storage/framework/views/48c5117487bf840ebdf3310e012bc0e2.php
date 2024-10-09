<?php $__env->startSection('title'); ?>
    <?php echo e(__('upgrade_guide')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="line-height: 36px;"><?php echo e(__('upgrade_guide')); ?> (<strong>Current version <?php echo e(config('app.version')); ?></strong>)</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <ul class="mb-0">
                    <li class="">
                        Applicaion current version <strong><?php echo e(config('app.version')); ?></strong>
                        <a target="_blank" href="https://templatecookie.helpcenter.guide/articles/changelog-83c890-86e41">Check here to see latest version</a>
                    </li>
                    <li class="">
                        Get the most recent product zip file by visiting this page
                        <a target="_blank" href="https://codecanyon.net/downloads">Check Here</a>
                    </li>
                    <li class="">Extract downloaded zip file and find app.zip file</li>
                    <li class="">Put that app.zip file in the server's application root directory.</li>
                    <li class="">Extract app.zip (it will replace the most recent update in your application).</li>
                    <li class="">Finally click the below "Upgrade Now" button</li>
                </ul>
            </div>
        </div>
        <div class="card-footer text-center">
            <form action="<?php echo e(route('settings.upgrade.apply')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button onclick="return confirm('Would you like to upgrade your application ?')" style="width: 250px;" type="submit" class="btn btn-primary"><?php echo e(__('upgrade_now')); ?></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/upgrade-guide.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('email_list')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('email_list')); ?></h3>
                        <?php if(userCan('newsletter.sendmail')): ?>
                            <a href="<?php echo e(route('module.newsletter.send_mail')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                <i class="far fa-paper-plane"></i>&nbsp; <?php echo e(__('send_mail')); ?>

                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered">
                            <?php if($emails->count() > 0): ?>
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="50%"><?php echo e(__('email')); ?></th>
                                        <th width="40%"><?php echo e(__('subscriptions_date')); ?></th>
                                        <?php if(userCan('newsletter.delete')): ?>
                                            <th width="5%"><?php echo e(__('action')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                            <?php endif; ?>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($email->email); ?></td>
                                        <td><?php echo e(date('d M, Y', strtotime($email->created_at))); ?></td>
                                        <?php if(userCan('newsletter.delete')): ?>
                                            <td>
                                                <form action="<?php echo e(route('module.newsletter.delete', $email->id)); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('delete_email')); ?>"
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                        class="btn bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <h4><?php echo e(__('no_data_found')); ?></h4>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php if($emails->total() > $emails->perPage()): ?>
                            <div class="mt-3 d-flex justify-content-center">
                                <?php echo e($emails->links()); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Newsletter/Resources/views/index.blade.php ENDPATH**/ ?>
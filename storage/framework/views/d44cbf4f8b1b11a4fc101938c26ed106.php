<?php $__env->startSection('title'); ?>
    <?php echo e(__('category_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('category_list')); ?></h3>
                        <?php if(userCan('post.create')): ?>
                            <a href="<?php echo e(route('module.category.create')); ?>"
                                class="btn bg-primary float-right d-flex align-items-center justify-content-center"><i
                                    class="fas fa-plus"></i>&nbsp;<?php echo e(__('create')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="text-center">
                                                <th width="5%">#</th>
                                                <th><?php echo e(__('image')); ?></th>
                                                <th><?php echo e(__('name')); ?> (<?php echo e(__('posts')); ?>)</th>
                                                <?php if(userCan('post.update') || userCan('post.delete')): ?>
                                                    <th width="150px"> <?php echo e(__('action')); ?></th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e($loop->index + 1); ?></td>
                                                    <td>
                                                        <img width="50px" height="50px" class="rounded"
                                                            src="<?php echo e($category->image_url); ?>" alt="<?php echo e($category->name); ?>">
                                                    </td>
                                                    <td class="sorting_1 text-center" tabindex="0">
                                                        <?php echo e($category->name); ?>(<?php echo e($category->posts_count); ?>)
                                                    </td>
                                                    <?php if(userCan('post.update') || userCan('post.delete')): ?>
                                                        <td class="sorting_1 text-center" tabindex="0">
                                                            <?php if(userCan('post.update')): ?>
                                                                <a data-toggle="tooltip" data-placement="top"
                                                                    title="<?php echo e(__('edit')); ?>"
                                                                    href="<?php echo e(route('module.category.edit', $category->id)); ?>"
                                                                    class="btn bg-info"><i
                                                                        class="fas fa-edit"></i></a>
                                                            <?php endif; ?>
                                                            <?php if(userCan('post.delete')): ?>
                                                                <form
                                                                    action="<?php echo e(route('module.category.delete', $category->id)); ?>"
                                                                    method="POST" class="d-inline">
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <?php echo csrf_field(); ?>
                                                                    <button data-toggle="tooltip" data-placement="top"
                                                                        title="<?php echo e(__('delete')); ?>"
                                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                                        class="btn bg-danger"><i
                                                                            class="fas fa-trash"></i></button>
                                                                </form>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Blog/Resources/views/postcategory/index.blade.php ENDPATH**/ ?>
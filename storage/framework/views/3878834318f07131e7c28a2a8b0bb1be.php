<?php $__env->startSection('title'); ?>
    <?php echo e(__('post_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-2 p-1">
                                <h3 class="card-title line-height-36"><?php echo e(__('country_list')); ?></h3>
                            </div>
                            <div class="col align-self-end p-1">
                                <?php if(userCan('post.create')): ?>
                                    <a href="<?php echo e(route('location.country.create')); ?>"
                                        class="btn bg-primary float-right d-flex align-items-center mx-1 justify-content-center">
                                        <i class="fas fa-plus"></i>&nbsp;<?php echo e(__('create_country')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <!-- filter -->
                        <form id="formSubmit" action="" method="GET" onchange="this.submit();">
                            <div class="card-body border-bottom row">
                                <div class="col-12 col-md-3">
                                    <label><?php echo e(__('search')); ?></label>
                                    <input name="keyword" type="text" placeholder="<?php echo e(__('title')); ?>"
                                        class="form-control" value="<?php echo e(request('keyword')); ?>">
                                </div>
                                <div class="col-3 col-md-2">
                                    <label></label>
                                    <button type="submit" class="mt-2 form-control btn btn-primary">
                                        <?php echo e(__('search')); ?>

                                    </button>
                                </div>
                            </div>

                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="text-center">
                                            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending"
                                                aria-sort="descending" width="50%"><?php echo e(__('country')); ?></th>
                                            <?php if(userCan('post.edit') || userCan('post.delete')): ?>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    width="100px"> <?php echo e(__('actions')); ?></th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($posts->count() > 0): ?>
                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1 text-center" tabindex="0"><?php echo e($post->name); ?>

                                                    </td>
                                                    <?php if(userCan('post.update') || userCan('post.delete')): ?>
                                                        <td class="sorting_1 text-center" tabindex="0">
                                                            <?php if(userCan('post.update')): ?>
                                                                <a data-toggle="tooltip" data-placement="top"
                                                                    title="<?php echo e(__('edit_country')); ?>"
                                                                    href="<?php echo e(route('location.country.edit', $post->id)); ?>"
                                                                    class="btn bg-info"><i class="fas fa-edit"></i></a>
                                                            <?php endif; ?>
                                                            <?php if(userCan('post.delete')): ?>
                                                                <form
                                                                    action="<?php echo e(route('location.country.destroy', $post->id)); ?>"
                                                                    method="POST" class="d-inline">
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <?php echo csrf_field(); ?>
                                                                    <button data-toggle="tooltip" data-placement="top"
                                                                        title="<?php echo e(__('delete_post')); ?>"
                                                                        onclick="return confirm('<?php echo e(__('Are you sure want to delete this item?')); ?>');"
                                                                        class="btn bg-danger"><i
                                                                            class="fas fa-trash"></i></button>
                                                                </form>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td class="text-center" colspan="4"><?php echo e(__('no_data_found')); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php if(request('perpage') != 'all' && $posts->total() > $posts->count()): ?>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-center">
                                            <?php echo e($posts->appends(['state' => request('state')])->links()); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet"
        href="<?php echo e(asset('backend')); ?>/plugins/bootstrap-iconpicker/dist/css/bootstrap-iconpicker.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

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
    <script type="text/javascript"
        src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-iconpicker/dist/js/bootstrap-iconpicker.bundle.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/select2/js/select2.full.min.js"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })


        $('#target').iconpicker({
            align: 'left', // Only in div tag
            arrowClass: 'btn-danger',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 15,
            footer: true,
            header: true,
            icon: 'flag-icon-gb',
            iconset: 'flagicon',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom', // Only in button tag
            rows: 5,
            search: true,
            searchText: 'Search',
            selectedClass: 'btn-success',
            unselectedClass: ''
        });

        $('#target').on('change', function(e) {
            $('#icon').val(e.icon)
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/location/country/index.blade.php ENDPATH**/ ?>
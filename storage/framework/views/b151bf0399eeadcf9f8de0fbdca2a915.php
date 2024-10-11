<?php $__env->startSection('title'); ?>
    <?php echo e(__('country_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36"><?php echo e(__('country_list')); ?>

                            <span class="ml-1 badge bg-primary">
                                <?php echo e($allCountries->count()); ?>

                            </span>
                        </h3>
                        <div class="align-items-center  ml-auto">
                            <?php if(userCan('country.create')): ?>
                                <a href="<?php echo e(route('module.country.create')); ?>"
                                    class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                                    <i class="fas fa-plus"></i>
                                    &nbsp; <?php echo e(__('create')); ?>

                                </a>
                            <?php endif; ?>
                            <button id="DeleteButton" onclick="MultiDelete()" data-toggle="tooltip" data-placement="top"
                                title="<?php echo e(__('delete_selected_countries')); ?>"
                                class="d-none mr-3 btn bg-danger float-right align-items-center justify-content-center">
                                <i class="fas fa-trash"></i>
                                <span class="ml-1">
                                    <?php echo e(__('delete')); ?>

                                    <span id="selectedCount"
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div
                        class="row <?php echo e($setting->app_country_type === 'single_base' ? 'justify-content-between' : 'justify-content-end'); ?>">
                        <?php if($setting->app_country_type === 'single_base'): ?>
                            <div class="col-md-6 col-sm-12 col-lg-4">
                                <div class="px-3"><?php echo e(__('app_country')); ?></div>
                                <form action="<?php echo e(route('module.set.app.country')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-flex justify-space-between px-3">
                                        <select name="country" class="form-control form-control mr-2">
                                            <?php $__currentLoopData = $allCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e($setting->app_country == $country->id ? 'selected' : ''); ?>

                                                    value="<?php echo e($country->id); ?>" class="">
                                                    <?php echo e($country->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <button class="btn btn-primary btn bg-primary" type="submit">
                                            <?php echo e(__('save')); ?>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <form id="formSubmit" action="<?php echo e(route('module.country.index')); ?>" method="GET">
                                <div class="d-flex justify-space-between px-3 my-4">
                                    <input type="text"
                                        <?php if(request('name')): ?> value="<?php echo e(request('name')); ?>" <?php endif; ?>
                                        id="name" class="form-control mr-2"
                                        placeholder="<?php echo e(__('enter')); ?> <?php echo e(__('search')); ?>..." name="name"
                                        aria-label="">
                                    <button class="btn btn-primary btn bg-primary" type="submit">
                                        <?php echo e(__('search')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="example1_wrapper" class="">
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-hover responsive <?php echo e($countries->count() > 1 ? 'table-bordered' : ''); ?>">
                                    <thead>
                                        <tr class="text-center">
                                            <?php if($countries->count() > 1): ?>
                                                <th width="4%">
                                                    <div class="icheck-primary ml-1">
                                                        <input type="checkbox" id="checkboxAll">
                                                        <label for="checkboxAll">
                                                        </label>
                                                    </div>
                                                </th>
                                            <?php endif; ?>
                                            <th width="5%">#</th>
                                            <th><?php echo e(__('image')); ?></th>
                                            <th><?php echo e(__('name')); ?></th>
                                            <?php if(userCan('country.update') || userCan('country.delete')): ?>
                                                <th><?php echo e(__('action')); ?></th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($countries->count() > 0): ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="text-center items-center">
                                                    <?php if($countries->count() > 1): ?>
                                                        <td class="text-center items-center">
                                                            <div class="icheck-primary ml-1">
                                                                <input type="checkbox" data-id=<?php echo e($country->id); ?>

                                                                    class="sub_chk" id="checkbox<?php echo e($country->id); ?>">
                                                                <label for="checkbox<?php echo e($country->id); ?>">
                                                                </label>
                                                            </div>
                                                        </td>
                                                    <?php endif; ?>
                                                    <td class="text-center" tabindex="0">
                                                        <?php echo e($country->id); ?>

                                                    </td>
                                                    <td>
                                                        <div>
                                                            <img src="<?php echo e(asset($country->image)); ?>" alt="<?php echo e($country->name); ?>"
                                                                width="50px" height="50px">
                                                        </div>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <span>
                                                            <?php echo e($country->name); ?>

                                                        </span>
                                                    </td>
                                                    <?php if(userCan('country.update') || userCan('country.delete')): ?>
                                                        <td class="sorting_1 text-center" tabindex="0">
                                                            <?php if(userCan('country.update')): ?>
                                                                <a data-toggle="tooltip" data-placement="top"
                                                                    title="<?php echo e(__('edit')); ?>"
                                                                    href="<?php echo e(route('module.country.edit', $country->id)); ?>"
                                                                    class="btn bg-info"><i class="fas fa-edit"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                            <?php if(userCan('country.delete')): ?>
                                                                <form
                                                                    action="<?php echo e(route('module.country.delete', $country->id)); ?>"
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
                                        <?php else: ?>
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    <?php echo e(__('no_data_found')); ?>

                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php if(request('perpage') != 'all' && $countries->total() > $countries->count()): ?>
                            <div class="mt-3 d-flex justify-content-center">
                                <?php echo e($countries->links()); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .customRow1 {
                margin-top: 10px;
            }

            .customRow2 {
                margin-top: 10px;
                padding-left: 15px;
                padding-right: 15px;
            }

            .customdiv1 {
                margin-top: 5px;
                margin-right: .5rem !important;
            }

            .customdiv2 {
                margin-top: 5px;
                margin-right: .5rem !important;
            }

            .customdiv3 {
                margin-top: 5px;
                margin-bottom: 5px;
                margin-right: .5rem !important;
            }
        }
    </style>
    
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/css/bootstrap-iconpicker.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
    <script src="<?php echo e(asset('backend')); ?>/plugins/flagicon/dist/js/bootstrap-iconpicker.bundle.min.js"></script>

    <script>
        $("#checkboxAll").on('click', function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
            SelectIds();
        });
        $(".sub_chk").on('click', function() {
            SelectIds();
        });

        function SelectIds() {

            var Ids = [];
            $(".sub_chk:checked").each(function() {
                Ids.push($(this).attr('data-id'));
            });
            $('#selectedCount').html(parseInt(Ids.length));
            if (Ids != 0) {
                // Show Delete Button
                $('#DeleteButton').removeClass('d-none');
            } else {
                // Hide Delete Button
                $('#DeleteButton').addClass('d-none');
            }
        }

        function MultiDelete() {

            var Ids = [];
            $(".sub_chk:checked").each(function() {
                Ids.push($(this).attr('data-id'));
            });

            if (Ids != 0) {

                if (confirm("<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>") == true) {
                    AjaxCall(Ids);
                } else {
                    return false;
                }

            } else {
                alert('Please Select First');
            }
        }

        function AjaxCall(value) {
            $.ajax({
                url: "<?php echo e(route('module.country.multiple.delete')); ?>",
                type: "Delete",
                data: {
                    ids: value,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                dataType: 'json',
                success: function(result) {
                    location.reload();
                }
            });
        };
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Location/Resources/views/country/index.blade.php ENDPATH**/ ?>
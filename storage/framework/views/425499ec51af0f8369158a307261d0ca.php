<?php $__env->startSection('title'); ?>
    <?php echo e(__('translate_language')); ?>

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
                <li class="breadcrumb-item active"><?php echo e(__('translate_language')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
    <div class="container-fluid">
        <div class="alert alert-warning mb-3">
            <h5>
                <?php echo e(__('After_making_all_the_necessary_changes_please_click_the_Update_button')); ?>

            </h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title line-height-36">
                            <?php echo e($language->name); ?> - <?php echo e(__('translate_language')); ?>

                        </h3>
                        <a href="<?php echo e(route('languages.index')); ?>"
                            class="btn bg-primary float-right d-flex align-items-center justify-content-center">
                            <i class="fas fa-arrow-left"></i>
                            <?php echo e(__('back')); ?>

                        </a>
                    </div>
                    <div class="">
                        <!-- filter -->
                        <form id="formSubmit" action="" method="GET" onchange="this.submit();">
                            <div class="card-body row">
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
                    </div>

                    <div class="card-body">
                        <form action="<?php echo e(route('translation.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="lang_id" value="<?php echo e($language->id); ?>">
                            <div class="row">
                                <table class="table table-striped table-bordered mt-0 pt-0" id="tranlation-table"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="48%"><?php echo e(__('english_text')); ?></th>
                                            <th width="48%">
                                                <span class="d-flex justify-content-between">
                                                    <span><?php echo e(__('translation_text')); ?></span>
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $lastPageTotalData = request()->input('page') == null || request()->input('page') == 1 ? 0 : request()->input('page') * 100;
                                        ?>
                                        <?php $__currentLoopData = $translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($lastPageTotalData + $loop->iteration); ?></td>
                                                <td class="key"><?php echo e(ucwords(str_replace('_', ' ', $key))); ?>

                                                </td>
                                                <td>
                                                    <span class="d-flex">
                                                        <input type="text" class="form-control value  w-100"
                                                            name="<?php echo e($key); ?>" value="<?php echo e($value); ?>">
                                                        <button type="button"
                                                            onclick="AutoTrans('<?php echo e($key); ?>', '<?php echo e(ucwords(str_replace('_', ' ', $key))); ?>', '<?php echo e($language->code); ?>')"
                                                            class="btn btn-sm ml-1 bg-info">
                                                            <?php echo e(__('translate')); ?>

                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="d-flex ml-auto">
                                    <?php echo e($translations->appends(['keyword' => request()->input('keyword')])->links()); ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex mx-auto">
                                    <button type="submit" class="lang-btn btn btn-success">
                                        <i class="fas fa-sync"></i>
                                        <?php echo e(__('update')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .lang-btn {
            position: fixed;
            left: 50%;
            bottom: 50px;
            width: 200px;
            padding: 15px;
            text-align: center;
            transform: translateX(-50%, 0);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#translating_processing').attr("style", "display: none !important");

        function AutoTrans(key, value, lang) {
            $('#translating_processing').attr("style", "display: block !important");
            $('#translating_processing').show();
            $('.lang-btn').prop('disabled', true);

            $.ajax({
                url: "<?php echo e(route('translation.update.auto')); ?>",
                type: "POST",
                data: {
                    lang: lang,
                    text: value,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                dataType: 'json',
                success: function(result) {
                    $('input[name=' + key + ']').val(result);
                    $('.lang-btn').prop('disabled', false);
                    $('#translating_processing').attr("style", "display: none !important");

                    toastr.success('Translated Successfully', 'Success');
                },
                error: function(file, response) {
                    console.log(response);
                    $('#translating_processing').attr("style", "display: none !important");
                    toastr.error('Something went wrong while translating.Please try again', 'Error');
                    setTimeout(() => {
                        $('#translate_all').text('Translate All');
                        $('.lang-btn').prop('disabled', false);
                    }, 1000);
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/Modules/Language/Resources/views/lang_view.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Advertisement Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('website-settings'); ?>
<div class="container-fluid">
    <div class="alert alert-warning mb-3">
        <h5><?php echo e(__('place_your_advertising_networks_code')); ?></h5>
        <hr class="my-2">
        <?php echo e(__('ad_code_is_a_piece_of_html_or_javascript_that_you_can_place_on_your_website_to_display_advertisements_with_ad_code_you_can_earn_revenue_by_displaying_ads_from_various_advertising_networks_like_google_adsense_which_matches_relevant_ads_to_the_content_on_your_website')); ?>. <strong><?php echo e(__('click_the_eye_icon_to_see_position_place')); ?></strong>.
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="line-height: 36px;"><?php echo e(__('advertisement_settings')); ?></h3>
        </div>
        <form action="<?php echo e(route('settings.adinfo.update')); ?>" class="card-body" method="POST"
        enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
           <div class="row justify-content-center">
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" class="d-none" name="page_slug[]" value="<?php echo e($ad->page_slug); ?>">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="row mb-2">
                            <div class="col-lg-8">
                                <label for="" class="">
                                    <span id="span_text">
                                        <?php echo e(Str::ucfirst(str_replace('_', ' ', $ad->page_slug))); ?>

                                    </span>
                                    <span onclick="showPlaceDemo('<?php echo e(Str::ucfirst(str_replace('_', ' ', $ad->page_slug))); ?>','<?php echo e($ad->page_slug); ?>')" class="mt-2 ml-2">
                                        <i class="fas fa-eye fa-lg p-1 text-info cursor-pointer"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4 text-right">
                                <input class="switcher" type="checkbox" style="float:right;"
                                 name="<?php echo e($ad->page_slug); ?>"
                                data-id="<?php echo e($ad->id); ?>" <?php echo e(($ad->status == 0 ) ? '' : 'checked'); ?>

                                    data-bootstrap-switch>
                            </div>
                        </div>
                        <?php if(($ad->page_slug=='home_page_ad')||($ad->page_slug=='job_page_ad')||($ad->page_slug=='job_detailpage_ad')||($ad->page_slug=='job_detailpage_right_ad')): ?>
                            <textarea disabled   rows="4" class="form-control"></textarea>
                            <input name="ad_code[]" type="text" hidden value="<?php echo e($ad->ad_code); ?>">
                        <?php else: ?>
                            <textarea name="ad_code[]" rows="4" class="form-control"><?php echo e($ad->ad_code); ?></textarea>
                        <?php endif; ?>
                       
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <button type="submit" class="btn btn-primary mt-3"
                     style="width: 200px; height: 50px;">Save</button>
                </div>
            </div>
        </form>
    </div>
     <!-- example image show modal  -->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="advertise_ttile">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img id="place_image" src="" alt="" style="width:400px;height:500px;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- example image show modal  -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet"
        href="<?php echo e(asset('backend/plugins/bootstrap-switch/css/bootstrap4/bootstrap-switch.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
     function showPlaceDemo(title,slug) {
        $('#advertise_ttile').text('');
        $('#advertise_ttile').text(title);
        var image_path = '<?php echo e(URL::to('/')); ?>'+'/'+'dummy-data/images/companies/'+slug+'.webp';
        document.getElementById("place_image").src = image_path;
        
        $('#staticBackdrop').modal('show');
    }
    $(".switcher").bootstrapSwitch();
    $("input[data-bootstrap-switch]").on('switchChange.bootstrapSwitch', function(event, state) {
            let status = state ? 1 : 0;
            var id = $(this).data('id'); 

            $.ajax({
                url: "<?php echo e(route('settings.adstatus.update')); ?>",
                type: "PUT",
                data: {
                    'id': id, 
                    'status':status,
                    _token: '<?php echo csrf_token(); ?>'
                },
                beforeSend: function(){
                },
                complete: function(){
                },
                success: function(data) {
                    //console.log(data);
                }
            });
       
           
            
        });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/advertisement.blade.php ENDPATH**/ ?>
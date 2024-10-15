<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['popularTags']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['popularTags']); ?>
<?php foreach (array_filter((['popularTags']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="tw-flex tw-flex-wrap tw-items-center tw-gap-2 tw-mb-6 tw-mx-1.5 sm:tw-mx-0">
            <p class="tw-text-[#767F8C] tw-text-sm tw-mb-0"><?php echo e(__('popular_tag')); ?>:</p>
            <ul class="tw-popular-search tw-flex-wrap">
                <?php if(request('tag') && is_string(request('tag'))): ?>
                    <input type="hidden" value="<?php echo e(request('tag')); ?>" name="tag">
                <?php else: ?>
                    <input type="hidden" value="" name="tag">
                <?php endif; ?>
                <?php $__currentLoopData = $popularTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li onclick="tagFilter('<?php echo e($tag->name); ?>')" class="tw-text-bold <?php echo e(request('tag') == $tag->name ? 'tw-bg-blue-50 tw-text-blue-500 tw-font-semibold':''); ?>">
                        <a href="#"><?php echo e($tag->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php $__env->startSection('frontend_scripts'); ?>
    <script>
        $('#sort_by').on('change', function() {
            $('#job_search_form').submit();
        })
    </script>
    <script>
        $('#radius').on('change', function() {
            $('#job_search_form').submit();
        })

        function tagFilter(tagid) {
            $('input[name=tag]').val(tagid)
            $('#job_search_form').submit();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\wamp64\www\wura\resources\views/components/website/job/job-sorting.blade.php ENDPATH**/ ?>
<?php if($paginator->hasPages()): ?>
    <ul class="pagination justify-content-center align-items-center">

        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item">
                <button disabled class="page-link">
                    <i class="ph-arrow-left"></i>
                </button>
            </li>
        <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>">
                    <i class="ph-arrow-left"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(is_string($element)): ?>
                <li class="disabled"><span><?php echo e($element); ?></span></li>
            <?php endif; ?>

            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active"><button class="page-link" type="button"><?php echo e($page); ?></button></li>
                    <?php else: ?>
                        <li class="page-item "><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>">
                    <i class="ph-arrow-right"></i>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item">
                <button disabled class="page-link">
                    <i class="ph-arrow-right"></i>
                </button>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/vendor/pagination/frontend.blade.php ENDPATH**/ ?>
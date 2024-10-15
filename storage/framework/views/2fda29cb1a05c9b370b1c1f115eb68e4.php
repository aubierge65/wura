<?php if($paginator->hasPages()): ?>
        <nav class="d-flex justify-content-center">
            <ul class="pagination text-center">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item">
                        <button disabled style="cursor: not-allowed! important;" class="page-link">
                            <i class="ph-arrow-left"></i>
                        </button>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>">
                            <i class="text-primary-500 ph-arrow-left"></i>
                        </a>
                    </li>
                <?php endif; ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>">
                            <i class="text-primary-500 ph-arrow-right"></i>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <button disabled style="cursor: not-allowed! important;" class="page-link">
                            <i class="ph-arrow-right"></i>
                        </button>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/vendor/pagination/simple-bootstrap-4.blade.php ENDPATH**/ ?>
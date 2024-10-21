<tr>
    <td class="header mail-header">
        <a href="<?php echo e($url); ?>" style="display: inline-block;">
            <?php if(trim($slot) === 'Laravel'): ?>
                <img src="<?php echo e($setting->dark_logo_url); ?>" class="logo" alt="Laravel Logo">
            <?php else: ?>
                <?php echo e($slot); ?>

            <?php endif; ?>
        </a>
    </td>
</tr>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/vendor/mail/html/header.blade.php ENDPATH**/ ?>
<?php if(auth()->check()): ?>
    <li>
        <a href="<?php echo e(auth()->user()->role == 'company' ? route('company.messages'):route('candidate.messages')); ?>" class="tw-relative tw-text-white">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8 9.5H12M8 13H15M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.1971 3.23374 14.3397 3.65806 15.3845C3.73927 15.5845 3.77988 15.6845 3.798 15.7653C3.81572 15.8443 3.8222 15.9028 3.82221 15.9839C3.82222 16.0667 3.80718 16.1569 3.77711 16.3374L3.18413 19.8952C3.12203 20.2678 3.09098 20.4541 3.14876 20.5888C3.19933 20.7067 3.29328 20.8007 3.41118 20.8512C3.54589 20.909 3.73218 20.878 4.10476 20.8159L7.66265 20.2229C7.84309 20.1928 7.9333 20.1778 8.01613 20.1778C8.09715 20.1778 8.15566 20.1843 8.23472 20.202C8.31554 20.2201 8.41552 20.2607 8.61549 20.3419C9.6603 20.7663 10.8029 21 12 21Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <svg class="circle d-none unread-message-part" width="14" height="14" viewBox="0 0 14 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="7" cy="7" r="6" fill="#E05151" stroke="white" stroke-width="2">
                </circle>
            </svg>
        </a>
    </li>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/company/message-component.blade.php ENDPATH**/ ?>
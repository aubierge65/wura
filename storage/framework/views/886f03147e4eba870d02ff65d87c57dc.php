<li>
    <div class="notification-icon position-relative pointer tw-text-white">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path
                d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <?php if(candidateUnreadNotifications() > 0): ?>
            <svg id="unNotifications" class="circle" width="14" height="14" viewBox="0 0 14 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="7" cy="7" r="6" fill="#E05151" stroke="white" stroke-width="2">
                </circle>
            </svg>
        <?php endif; ?>
        <div class="notification-bar">
            <a href="#" onclick="ReadNotification()" class="notification-header">
                <h2><?php echo e(__('notifications')); ?></h2>
                <p><?php echo e(__('mark_all_as_read')); ?></p>
            </a>
            <div class="devider">
            </div>
            <div class="notification-list">
                <ul>
                    <?php if(candidateNotifications()->count() > 0): ?>
                        <?php $__currentLoopData = candidateNotifications(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($noti->type == 'App\Notifications\Website\Candidate\ApplyJobNotification'): ?>
                                <li>
                                    <a onclick="readSingleNotification('<?php echo e($noti->data['url2']); ?>', '<?php echo e($noti->id); ?>')"
                                        href="javascript:void(0)" class="d-flex">
                                        <div class="notification-thumb">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <rect x="32" y="72" width="192" height="144"
                                                    rx="8" fill="none" stroke="#000000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                                                </rect>
                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                    fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                                <line x1="32" y1="160" x2="224" y2="160"
                                                    fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16">
                                                </line>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <h4><?php echo e($noti->data['title2']); ?></h4>
                                            <p><?php echo e($noti->created_at->diffForHumans()); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($noti->type == 'App\Notifications\Website\Candidate\BookmarkJobNotification'): ?>
                                <li>
                                    <a onclick="readSingleNotification('<?php echo e($noti->data['url2']); ?>', '<?php echo e($noti->id); ?>')"
                                        href="javascript:void(0)" class="d-flex">
                                        <div class="notification-thumb">
                                            <?php if (isset($component)) { $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.bookmark-icon','data' => ['width' => '40','height' => '40']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.bookmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '40','height' => '40']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $attributes = $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $component = $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
                                        </div>
                                        <div class="">
                                            <h4><?php echo e($noti->data['title2']); ?></h4>
                                            <p><?php echo e($noti->created_at->diffForHumans()); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($noti->type == 'App\Notifications\Website\Candidate\RelatedJobNotification'): ?>
                                <li>
                                    <a onclick="readSingleNotification('<?php echo e($noti->data['url']); ?>', '<?php echo e($noti->id); ?>')"
                                        href="javascript:void(0)" class="d-flex">
                                        <div class="notification-thumb">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <rect x="32" y="72" width="192" height="144"
                                                    rx="8" fill="none" stroke="#000000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                                                </rect>
                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                    fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                                <line x1="32" y1="160" x2="224" y2="160"
                                                    fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16">
                                                </line>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <h4><?php echo e($noti->data['title']); ?></h4>
                                            <p><?php echo e($noti->created_at->diffForHumans()); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if($noti->type == 'App\Notifications\Website\Company\CandidateBookmarkNotification'): ?>
                                <li>
                                    <a onclick="readSingleNotification('<?php echo e($noti->data['url']); ?>', '<?php echo e($noti->id); ?>')"
                                        href="javascript:void(0)" class="d-flex">
                                        <div class="notification-thumb">
                                            <?php if (isset($component)) { $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.bookmark-icon','data' => ['width' => '40','height' => '40']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.bookmark-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '40','height' => '40']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $attributes = $__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__attributesOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff)): ?>
<?php $component = $__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff; ?>
<?php unset($__componentOriginale3d4f8b9d7aed7e1c0e81a32c0fa47ff); ?>
<?php endif; ?>
                                        </div>
                                        <div class="">
                                            <h4><?php echo e($noti->data['title']); ?></h4>
                                            <p><?php echo e($noti->created_at->diffForHumans()); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="text-center"><?php echo e(__('no_notification')); ?></div>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if(candidateNotificationsCount() > 6): ?>
                <div class="text-center bg-gray-50 p-2">
                    <a href="<?php echo e(route('company.allNotification')); ?>">
                        <span class="body-font-1 ft-wt-5 m-2 underCs"><?php echo e(__('view_all_notifications')); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</li>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/components/website/candidate/notifications-component.blade.php ENDPATH**/ ?>
<?php $__env->startSection('description'); ?><?php echo e(strip_tags($post->description)); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('og:image'); ?><?php echo e(asset($post->image)); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?><?php echo e($post->title); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="breadcrumbs breadcrumbs-height">
        <div class="container">
            <div class="breadcrumb-menu">
                <h6 class="f-size-18 m-0"><?php echo e(__('blog_deatils')); ?></h6>
                <ul>
                    <li><a href="<?php echo e(route('website.home')); ?>"><?php echo e(__('home')); ?></a></li>
                    <li>/</li>
                    <li><?php echo e(__('blog_deatils')); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- google adsense area  -->
        <?php if(advertisementCode('blog_detailpage_inside_blog')): ?>
            <div style="margin-top:50px;">
                <?php echo advertisementCode('blog_detailpage_inside_blog'); ?>

            </div>
        <?php endif; ?>
        <!-- google adsense area end -->
    </div>

    <div class="blog-content-area rt-pt-50 rt-mb-100 rt-mb-md-20">
        <div class="container">
            <div class="single-blog-page">
                <article class="single-blog-post blog-post hover-shadow:none">
                    <h4 class="rt-mb-24"><?php echo e($post->title); ?></h4>
                    <div class="entry-meta tw-flex-wrap tw-gap-3 align-items-center">
                        <a class="author-img-link d-flex align-items-center" href="#">
                            <img src="assets/images/all-img/authur-img.png" alt="Author" class="rt-mr-12">
                            <span class="body-font-3 text-gray-700"> <?php echo e($post->author->name); ?></span>
                        </a>
                        <a class="date" href="#">
                            <i class="ph-calendar-blank"></i>
                            <?php echo e(date('M d, Y', strtotime($post->created_at))); ?>

                        </a>
                        <?php if(count($post->comments) != 0): ?>
                            <a class="comment" href="<?php echo e(route('website.post', $post->slug)); ?>#comments">
                                <i class="ph-chat-circle-dots"></i>
                                <?php echo e($post->commentsCount()); ?> <?php echo e(__('comments')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="rt-pt-30 mt-3 blog-primary-image">
                        <img src="<?php echo e(url($post->image)); ?>" alt="post">
                    </div>
                    <br>
                    <h6 class="rt-mb-24">
                        <?php echo e($post->short_description); ?>

                    </h6>
                    <div class="body-font-3 text-gray-600">
                        <?php echo $post->description; ?>

                    </div>
                    <br>
                    <div class="rt-spacer-60"></div>
                    <ul class="rt-list gap-8">
                        <li class="d-inline-block body-font-3">
                            <?php echo e(__('share_this_job')); ?>

                        </li>
                        <li class="d-inline-block ms-3">
                            <button class="btn btn-outline-plain">
                                <span class="f-size-18 text-primary-500"> <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="iconify iconify--bx" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                        data-icon="bx:bxl-facebook">
                                        <path
                                            d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <a
                                    href="<?php echo e(socialMediaShareLinks(url()->current(), 'facebook')); ?>"><?php echo e(__('facebook')); ?></a>
                            </button>
                        </li>
                        <li class="d-inline-block">
                            <button class="btn btn-outline-plain">
                                <span class="f-size-18 text-twitter"> <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        class="iconify iconify--bx" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                        data-icon="bx:bxl-twitter">
                                        <path
                                            d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <a
                                    href="<?php echo e(socialMediaShareLinks(url()->current(), 'twitter')); ?>"><?php echo e(__('twitter')); ?></a>
                            </button>
                        </li>
                    </ul>
                </article>

                <div class="comments-elemenst rt-pt-100 rt-pt-md-50" id="comments">
                    <h6 class="rt-mb-32"><?php echo e(__('write_a_comment')); ?></h6>
                    <form action="<?php echo e(route('website.comment', $post->slug)); ?>" class="rt-mb-50" method="post">
                        <?php echo csrf_field(); ?>
                        <textarea rows="4" name="body" placeholder="<?php echo e(__('share_your_thoughts_on_this_post')); ?>?" class="rt-mb-15"></textarea>
                        <?php if(auth()->guard()->check()): ?>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('post_a_comment')); ?></button>
                        <?php else: ?>
                            <button type="submit"
                                class="btn btn-primary login_required"><?php echo e(__('post_a_comment')); ?></button>
                        <?php endif; ?>
                    </form>
                    <ul class="comments-list rt-list">
                        <?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="single-comments">
                                <div class="rt-single-icon-box rt-mb-15">
                                    <div class="icon-thumb rt-mr-16">
                                        <div class="user-img">
                                            <img src="<?php echo e(url($comment->user->image)); ?>" alt="Image" class="!tw-object-cover !tw-w-12 !tw-h-12 !tw-rounded-full">
                                        </div>
                                    </div>
                                    <div class="iconbox-content body-font-3 text-gray-700">
                                        <a class="user-name ft-wt-5 rt-mb-4 text-gray-900 hover:text-primary-500"
                                            href="#"><?php echo e($comment->user->name); ?></a>
                                        <span
                                            class="d-block body-font-4 text-gray-500"><?php echo e($comment->created_at->diffForHumans()); ?></span>
                                    </div>
                                </div>
                                <div class="body-font-3 text-gray-700">
                                    <?php echo nl2br($comment->body); ?>

                                </div>
                                <div class="body-font-4 mt-3">
                                    <button id="replies-<?php echo e($comment->id); ?>" data-id="<?php echo e($comment->id); ?>"
                                        class="btn btn-sm reply tw-p-0 tw-inline-flex tw-gap-2 tw-items-center tw-text-[#0A65CC]"
                                        onclick="showHideForm('reply-<?php echo e($comment->id); ?>')">
                                        <span>
                                            <?php if (isset($component)) { $__componentOriginala4b4836d9741543c92bf37e823149e6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4b4836d9741543c92bf37e823149e6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.svg.reply-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.reply-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4b4836d9741543c92bf37e823149e6b)): ?>
<?php $attributes = $__attributesOriginala4b4836d9741543c92bf37e823149e6b; ?>
<?php unset($__attributesOriginala4b4836d9741543c92bf37e823149e6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4b4836d9741543c92bf37e823149e6b)): ?>
<?php $component = $__componentOriginala4b4836d9741543c92bf37e823149e6b; ?>
<?php unset($__componentOriginala4b4836d9741543c92bf37e823149e6b); ?>
<?php endif; ?>
                                        </span>
                                        <span><?php echo e(__('reply')); ?></span>
                                    </button>
                                    <form id="reply-<?php echo e($comment->id); ?>"
                                        action="<?php echo e(route('website.comment', $post->slug)); ?>" class="rt-mb-50 d-none"
                                        method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="tw-flex tw-gap-4 tw-justify-between tw-items-center tw-pt-4">
                                            <div class="tw-w-[50px] tw-h-[50px] tw-overflow-hidden">
                                                <img src="<?php echo e(url($comment->user->image)); ?>" alt="user" class="tw-w-full tw-h-full tw-rounded-full tw-object-cover">
                                            </div>
                                            <textarea rows="1" name="body" placeholder="<?php echo e(__('share_your_thoughts_on_this_comment')); ?>?" class="tw-py-3 tw-px-[18px]"></textarea>
                                            <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>">
                                            <?php if(auth()->guard('user')->check()): ?>
                                                <button type="submit" class="btn btn-primary btn-inline">
                                                    <?php echo e(__('post_a_reply')); ?>

                                                </button>
                                            <?php else: ?>
                                                <button type="submit"
                                                    class="btn btn-primary tw-overflow-visible login_required">
                                                    Post Reply
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                                <?php if(count($comment->replies) > 0): ?>
                                    <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="single-comments">
                                <div class="rt-single-icon-box rt-mb-15">
                                    <div class="icon-thumb rt-mr-16">
                                        <div class="user-img">
                                            <img src="<?php echo e(url($reply->user->image)); ?>" alt="user" class="object-fit-contain !tw-w-16 !tw-h-16 !tw-rounded-full">
                                        </div>
                                    </div>
                                    <div class="iconbox-content body-font-3 text-gray-700">
                                        <a class="user-name ft-wt-5 rt-mb-4 text-gray-900 hover:text-primary-500"
                                            href="#"><?php echo e($reply->user->name); ?></a>
                                        <span
                                            class="d-block body-font-4 text-gray-500"><?php echo e($reply->created_at->diffForHumans()); ?></span>
                                    </div>
                                </div>
                                <div class="body-font-3 text-gray-700">
                                    <?php echo nl2br($reply->body); ?>

                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p><?php echo e(__('no_comments')); ?></p>
                        <?php endif; ?>
                    </ul>
                    <div class="rt-spacer-24"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="rt-spacer-80 rt-spacer-md-40"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function showHideForm(id) {
            var value = document.getElementById(id).style.display;
            var button = '#replies-' + id.slice(-1);
            if (value == 'none') {
                document.getElementById(id).classList.add('d-none');
                $(button).hide();
            } else {
                document.getElementById(id).classList.remove('d-none');
                $(button).show();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/frontend/pages/post.blade.php ENDPATH**/ ?>
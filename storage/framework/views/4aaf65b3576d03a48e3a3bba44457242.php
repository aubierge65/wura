
<?php $__env->startSection('title'); ?>
    <?php echo e(__('post_list')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sticky-note"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?php echo e(__('total_post')); ?></span>
                        <span class="info-box-number">
                            <?php echo e($blogs->total() ?? '0'); ?>

                        </span>
                    </div>
                </div>
            </div>
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?php echo e(__('total_comments')); ?></span>
                        <span class="info-box-number"><?php echo e($totalComments ?? '0'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?php echo e(__('total_authors')); ?></span>
                        <span class="info-box-number"><?php echo e($totalAuthor ?? '0'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-th"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?php echo e(__('total_category')); ?></span>
                        <span class="info-box-number"><?php echo e($categories->count() ?? '0'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 p-1">
                                <h3 class="card-title line-height-36"><?php echo e(__('post_list')); ?></h3>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="row">
                                    <?php if(request('keyword') ||
                                            Route::current()->parameter('category') ||
                                            request('author') ||
                                            request('status') ||
                                            request('sort_by')): ?>
                                        <div class="col-md-4">
                                            <a href="<?php echo e(route('module.blog.index')); ?>" class="ml-1 btn btn-danger d-block my-1 my-md-0"><i
                                                    class="fas fa-times"></i> &nbsp;<?php echo e(__('clear')); ?>

                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(userCan('post.create')): ?>
                                        <div class="col-md-4">
                                            <a href="<?php echo e(route('module.blog.create')); ?>" class="btn btn-primary d-block my-1 my-md-0"><i
                                                    class="fas fa-plus"></i>&nbsp;<?php echo e(__('create_post')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-4">
                                        <a href="<?php echo e(route('module.category.create')); ?>" class="btn bg-success d-block my-1 my-md-0">
                                            <i class="fas fa-plus"></i>&nbsp;<?php echo e(__('create_category')); ?>

                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo e(route('module.category.index')); ?>" class="btn btn-outline-primary d-block my-1 my-md-0">
                                            <i class="fas fa-eye"></i>&nbsp;<?php echo e(__('all_category')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <form id="formSubmit" action="<?php echo e(route('module.blog.index')); ?>" method="GET"
                        onchange="this.submit();">
                        <div class="card-body border-bottom row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('search')); ?></label>
                                <input name="keyword" type="text" placeholder="<?php echo e(__('search')); ?>" class="form-control"
                                    value="<?php echo e(request('keyword')); ?>">
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <label><?php echo e(__('category')); ?></label>
                                <select name="category" class="form-control w-100-p">
                                    <option value=""
                                        <?php echo e(!Route::current()->parameter('category') ? 'selected' : ''); ?>>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e(Route::current()->parameter('category') == $category->slug ? 'selected' : ''); ?>

                                            value="<?php echo e($category->slug); ?>">
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('author')); ?></label>
                                <select name="author" class="form-control w-100-p">
                                    <option value="" <?php echo e(!request('author') ? 'selected' : ''); ?>>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <option value="<?php echo e($author->id); ?>"
                                                <?php echo e(request('author') == $author->id ? 'selected' : ''); ?>>
                                                <?php echo e($author->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('status')); ?></label>
                                <select name="status" class="form-control w-100-p">
                                    <option value="" <?php echo e(!request('status') ? 'selected' : ''); ?>>
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <option value="published" <?php echo e(request('status') == 'published' ? 'selected' : ''); ?>>
                                        <?php echo e(__('published')); ?> (<?php echo e($totalPublished ?? '0'); ?>)
                                    </option>
                                    <option value="draft" <?php echo e(request('status') == 'draft' ? 'selected' : ''); ?>>
                                        <?php echo e(__('draft')); ?> (<?php echo e($totalDraft ?? '0'); ?>)
                                    </option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-6 col-12">
                                <label><?php echo e(__('language')); ?></label>
                                <select name="code" class="form-control w-100-p">
                                    <option value="">
                                        <?php echo e(__('all')); ?>

                                    </option>
                                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lang->code); ?>"
                                            <?php echo e(request('code') == $lang->code ? 'selected' : ''); ?>>
                                            <?php echo e($lang->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th><?php echo e(__('image')); ?></th>
                                    <th><?php echo e(__('title')); ?></th>
                                    <th><?php echo e(__('category')); ?></th>
                                    <th><?php echo e(__('comments')); ?></th>
                                    <th><?php echo e(__('author')); ?></th>
                                    <th><?php echo e(__('status')); ?></th>
                                    <th width="12%">
                                        <?php echo e(__('action')); ?>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="text-center">
                                            <img width="50px" height="50px" class="rounded"
                                                src="<?php echo e(asset($post->image)); ?>" alt="Blog: <?php echo e($post->category->name); ?>">
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo e(route('website.post', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                                        </td>
                                        <td class="text-center">
                                            <?php echo e($post->category->name); ?>

                                        </td>
                                        <td class="text-center"><?php echo e($post->comments_count); ?></td>
                                        <td class="text-center"><?php echo e($post->author->name); ?></td>
                                        <td class="text-center">
                                            <span
                                                class="<?php echo e($post->status == 'draft' ? 'text-danger bg-danger' : 'text-primary bg-primary'); ?> text-capitalize py-1 px-2 rounded">
                                                <?php echo e($post->status); ?>

                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo e(route('website.post', $post->slug)); ?>#comments"
                                                class="btn bg-success">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <?php if(userCan('post.update')): ?>
                                                <a data-toggle="tooltip" data-placement="top"
                                                    title="<?php echo e(__('edit')); ?>"
                                                    href="<?php echo e(route('module.blog.edit', $post->id)); ?>"
                                                    class="btn bg-info"><i class="fas fa-edit"></i></a>
                                            <?php endif; ?>
                                            <?php if(userCan('post.delete')): ?>
                                                <form action="<?php echo e(route('module.blog.destroy', $post->id)); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button data-toggle="tooltip" data-placement="top"
                                                        title="<?php echo e(__('delete')); ?>"
                                                        onclick="return confirm('<?php echo e(__('are_you_sure_you_want_to_delete_this_item')); ?>');"
                                                        class="btn bg-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <p><?php echo e(__('no_data_found')); ?>...</p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php if(request('perpage') != 'all' && $blogs->total() > $blogs->count()): ?>
                            <div class="mt-3 d-flex justify-content-center">
                                <?php echo e($blogs->onEachSide(1)->links()); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\Modules/Blog\Resources/views/index.blade.php ENDPATH**/ ?>
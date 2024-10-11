<?php $__env->startSection('title', __('custom_questions')); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.company.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Company\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $attributes = $__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__attributesOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c)): ?>
<?php $component = $__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c; ?>
<?php unset($__componentOriginal2dfe3240b40cab2b2b7b34fb7e3b482c); ?>
<?php endif; ?>
                <div class="col-lg-9">
                    <div x-data="manageQuestions" class="dashboard-right tw-ps-0 lg:tw-ps-5">
                        <div class="d-flex justify-content-between tw-items-center tw-w-full tw-mb-6 lg:tw-mt-0 tw-mt-6">
                            <h3 class="f-size-18 lh-1 mb-0"> <?php echo e(__('custom_questions')); ?> </h3>
                            <form
                                action="<?php echo e(route('company.questions.featureToggle')); ?>"
                                method="POST"
                                id="toggle-form-id">
                                <?php echo csrf_field(); ?>
                                <label>
                                    <input name="enableQuestion"
                                    <?php echo e(auth()->user()->company->question_feature_enable ? 'checked' : ''); ?>

                                    onchange="document.getElementById('toggle-form-id').submit();"
                                    class="tw-scale-150 " style="margin-right: 10px" type="checkbox" >
                                    <?php echo e(__('create_custom_questions')); ?>

                                    (<?php echo e(auth()->user()->company->question_feature_enable ? 'Enable' : 'Disable'); ?>)
                                </label>
                            </form>
                        </div>
                        <div class="tw-border tw-border-gray-200 tw-p-4 tw-rounded-lg border">
                            <form x-bind:action="<?php echo e(route('company.questions.store')); ?>" class="post-job-item rt-mb-15" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="tw-mb-3">
                                    <div class="tw-flex justify-content-between tw-items-center tw-mb-3">
                                        <h3 class="tw-text-base lh-1 mb-0">
                                            <span x-show="!isEditing" ><?php echo e(__('create')); ?>  </span>
                                            <span x-show="isEditing" ><?php echo e(__('update')); ?> </span>
                                            <?php echo e(__('question')); ?>

                                        </h3>
                                        <a x-show="isEditing" @click.prevent="setCreateMode"  href="#"><?php echo e(__('create_new_screening_question')); ?></a>
                                    </div>
                                    <input x-model="editingQuestion.title" name="newQuestion" class="form-control" type="text" placeholder="<?php echo e(__('question')); ?>..">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <input type="hidden" x-model="isEditing" name="isEditing" >
                                    <input type="hidden" x-model="editingQuestion.id" name="editingId" >
                                </div>
                                <div class="tw-mt-4 tw-flex tw-flex-wrap tw-items-start tw-justify-between">
                                    <div class="tw-flex tw-items-center tw-mb-2">
                                        <input x-model="editingQuestion.required" id="answerRequired" name="isRequired" class="tw-scale-150 tw-mr-2 tw-ml-1" type="checkbox">
                                        <label for="answerRequired" class="tw-select-none tw-inline-block">
                                            <?php echo e(__('candidate_must_answer')); ?>

                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary"> <?php echo e(__('Save')); ?> <?php echo e(__('question')); ?> </button>
                                </div>
                            </form>
                        </div>
                        <div class="row tw-mt-12">
                            <div class="col-sm-12 col-md-12">
                                <h3 class="f-size-18 lh-1 mb-4">
                                    <?php echo e(__('existing_questions')); ?> (<?php echo e($dataCount); ?>)
                                 </h3>
                                <div class=" overflow-hidden">
                                    <div class="">
                                        <div class="db-job-card-table text-center">
                                            <?php if($questions->count() > 0): ?>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class="text-start"><?php echo e(__('title')); ?></th>
                                                    <th class=""><?php echo e(strtoupper(__('required'))); ?></th>
                                                    <th class="text-end"><?php echo e(__('action')); ?></th>

                                                </tr>
                                                </thead>
                                                <tbody class="text-center">

                                                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td>
                                                                <div class="text-start">
                                                                        <span class="ml-2 text-gray-900 f-size-16  ft-wt-4">
                                                                            <?php echo e($question->title); ?>

                                                                        </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div >
                                                                    <?php if($question->required): ?>
                                                                        <svg  color="green" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>
                                                                    <?php else: ?>
                                                                        <svg color="red" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>

                                                                    <?php endif; ?>


                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-end mr-2">
                                                                    <a
                                                                       @click.prevent="editQuestion(<?php echo e($question->id); ?>)"
                                                                       class="f-size-25 cursor-pointer text-primary p-1">
                                                                        <i class="ph-pencil-simple"></i>
                                                                    </a>

                                                                    <a onclick="DataDelete('data-delete-form<?php echo e($question->id); ?>')"
                                                                       href="#"
                                                                       class="f-size-25 cursor-pointer text-danger-500 p-1">
                                                                        <i class="ph-trash-simple"></i>
                                                                    </a>
                                                                    <form class="d-none"
                                                                          id="data-delete-form<?php echo e($question->id); ?>"
                                                                          action="<?php echo e(route('company.questions.delete', $question->id)); ?>"
                                                                          method="POST">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('DELETE'); ?>
                                                                    </form>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($questions->count()): ?>
                                                    <tr>
                                                        <td colspan="2" class="text-center p-0">
                                                            <?php echo e($questions->links('vendor.pagination.simple-bootstrap-4')); ?>

                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                </tbody>
                                            </table>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">
                                                        <?php if (isset($component)) { $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a = $attributes; } ?>
<?php $component = App\View\Components\Svg\NotFoundIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.not-found-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg\NotFoundIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'tw-w-80']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $attributes = $__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__attributesOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a)): ?>
<?php $component = $__componentOriginal8bf6266e7f80e2665df15c5faf71b89a; ?>
<?php unset($__componentOriginal8bf6266e7f80e2665df15c5faf71b89a); ?>
<?php endif; ?>
                                                        <p class="mt-4"><?php echo e(__('no_data_found')); ?></p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-footer text-center body-font-4 text-gray-500">
            <?php if (isset($component)) { $__componentOriginal3d3a2a154c37220f944698284f758b7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d3a2a154c37220f944698284f758b7a = $attributes; } ?>
<?php $component = App\View\Components\Website\FooterCopyright::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.footer-copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\FooterCopyright::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $attributes = $__attributesOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__attributesOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d3a2a154c37220f944698284f758b7a)): ?>
<?php $component = $__componentOriginal3d3a2a154c37220f944698284f758b7a; ?>
<?php unset($__componentOriginal3d3a2a154c37220f944698284f758b7a); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('frontend_scripts'); ?>

    <script defer src="<?php echo e(asset('backend/js/alpine.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function manageQuestions(){
            return {
                currentPageQuestions : <?php echo json_encode($questions->items(), 15, 512) ?>,
                isEditing : false,
                editingQuestion : {},
                newQuestion : '',
                isRequired : false,

                editQuestion : function (id){
                   this.editingQuestion = this.currentPageQuestions.find((question)=>{
                       return question.id == id ;
                   });
                   this.isEditing = true ;

                },
                setCreateMode : function (){
                    this.isEditing = false
                    this.editingQuestion.required = false;
                    this.editingQuestion.title = '';
                    // this.editingQuestion = {};
                }

            }
        }
    </script>

    <script>
        function DataDelete(id) {
            if (confirm("<?php echo e(__('are_you_sure')); ?>") == true) {
                $('#' + id).submit();
            } else {
                return false;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/frontend/pages/company/manage-questions.blade.php ENDPATH**/ ?>
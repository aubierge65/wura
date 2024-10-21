<?php $__env->startSection('title', __('applications')); ?>

<?php $__env->startSection('main'); ?>
    <div class="dashboard-wrapper tw-min-h-screen tw-flex tw-flex-col tw-justify-between">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-right">
                        <div class="custom-breadcrumb">
                            <p>
                                <span class="inactive"><?php echo e(__('home')); ?></span>
                                <span>/</span>
                                <span class="inactive"><?php echo e(__('my_jobs')); ?></span>
                                <span>/</span>
                                <span class="inactive"><?php echo e($job->title); ?></span>
                                <span>/</span>
                                <span class="active"><?php echo e(__('applications')); ?></span>
                            </p>
                        </div>
                        <div class="application-wrapper">
                            <div class="application-wrapper-top">
                                <h2 class="title"><?php echo e(__('applications')); ?></h2>
                                <div class="filter-sort">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newColumnModal">
                                        <?php echo e(__('create_new')); ?>

                                    </button>
                                    <a href="<?php echo e(route('company.myjob')); ?>" class="btn">
                                        <?php echo e(__('back')); ?>

                                    </a>
                                </div>
                            </div>
                            <div id="app">
                                <application-kanban-board :application-groups="<?php echo e($application_groups); ?>" :job="<?php echo e($job); ?>"/>
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


    <!-- Modal -->
    <div class="modal fade cadidate-modal" id="aemploye-profile" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-modal="true" role="dialog">
        <div class="modal-dialog  modal-wrapper">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center">
                        <?php echo e(__('save_to')); ?>

                    </h5>
                    <div class="row mb-5 border-top">
                        <div class="col-md-12" id="categoryList">
                        </div>

                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo e(__('close')); ?>"></button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <?php if (isset($component)) { $__componentOriginaldc57ff9fd70e4266483ccaec3f7a5618 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc57ff9fd70e4266483ccaec3f7a5618 = $attributes; } ?>
<?php $component = App\View\Components\Website\Modal\CandidateProfileModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.modal.candidate-profile-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Website\Modal\CandidateProfileModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc57ff9fd70e4266483ccaec3f7a5618)): ?>
<?php $attributes = $__attributesOriginaldc57ff9fd70e4266483ccaec3f7a5618; ?>
<?php unset($__attributesOriginaldc57ff9fd70e4266483ccaec3f7a5618); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc57ff9fd70e4266483ccaec3f7a5618)): ?>
<?php $component = $__componentOriginaldc57ff9fd70e4266483ccaec3f7a5618; ?>
<?php unset($__componentOriginaldc57ff9fd70e4266483ccaec3f7a5618); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal6be80ba65449f002ff72e4abd1757318 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6be80ba65449f002ff72e4abd1757318 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.modal.new-column-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('website.modal.new-column-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6be80ba65449f002ff72e4abd1757318)): ?>
<?php $attributes = $__attributesOriginal6be80ba65449f002ff72e4abd1757318; ?>
<?php unset($__attributesOriginal6be80ba65449f002ff72e4abd1757318); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6be80ba65449f002ff72e4abd1757318)): ?>
<?php $component = $__componentOriginal6be80ba65449f002ff72e4abd1757318; ?>
<?php unset($__componentOriginal6be80ba65449f002ff72e4abd1757318); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_links'); ?>
    <style>
        #aemploye-profile .modal-wrapper {
            width: 30% !important;
        }

        #aemploye-profile .modal-body {
            overflow-x: hidden !important;
            overflow-y: scroll !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function createColumn() {
            var name = $('#name').val();
            $.ajax({
                url: "<?php echo e(route('company.applications.column.store')); ?>",
                type: "POST",
                data: {
                    name: name,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                dataType: 'json',
                success: function(res) {
                    if (res.success) {
                        $('#newColumnModal').modal('hide')
                        window.location.reload()
                    }
                },
                error: function(response) {
                    for (const [key, value] of Object.entries(response.responseJSON.errors)) {
                        $('#err' + key).text(value);
                        $(`input[name="${key}"]`).addClass('is-invalid');
                    }
                }
            });
        }
        $(document).ready(function() {
            function showCandidateProfileModal(username) {
                $.ajax({
                    url: "<?php echo e(route('website.candidate.application.profile.details')); ?>",
                    type: "GET",
                    data: {
                        username: username
                    },
                    success: function(response) {
                        console.log(response)
                        if (!response.success) {
                            if (response.redirect_url) {
                                return Swal.fire({
                                    title: 'Oops...',
                                    text: response.message,
                                    icon: 'error',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: "<?php echo e(__('upgrade_plan')); ?>"
                                }).then((result) => {
                                    if (result.value) {
                                        window.location.href = response.redirect_url;
                                    }
                                })
                            } else {
                                return Swal.fire('Error', response.message, 'error');
                            }
                        }

                        let data = response.data;
                        let social = data.social_info

                        data.name ? $('.candidate-profile-info h2').html(data.name) : '';
                        data.candidate.photo ? $('#candidate_image').attr("src", data.candidate.photo) :
                            '';
                        data.candidate.profession ? $('.candidate-profile-info h4').html(
                            capitalizeFirstLetter(data
                                .candidate.profession.name)) : '';
                        data.candidate.bio ? $('.biography p').html(data.candidate.bio) : '';

                        if (data.candidate.status == 'available') {
                            $('.candidate-profile-info h6').removeClass('d-none');
                        }

                        // Social info
                        if (social.facebook || social.twitter || social.linkedin || social.youtube ||
                            social
                            .instagram) {
                            $('#candidate_social_profile_modal').show()
                            social.facebook ? $('.social-media ul li:nth-child(1)').attr("href", social
                                    .facebook) :
                                '';
                            social.twitter ? $('.social-media ul li:nth-child(2)').attr("href", social
                                    .twitter) :
                                '';
                            social.linkedin ? $('.social-media ul li:nth-child(3)').attr("href", social
                                    .linkedin) :
                                '';
                            social.instagram ? $('.social-media ul li:nth-child(4)').attr("href", social
                                    .instagram) :
                                '';
                            social.youtube ? $('.social-media ul li:nth-child(5)').attr("href", social
                                    .youtube) :
                                '';

                        } else {
                            $('#candidate_social_profile_modal').hide()
                        }

                       // skills & languages
                    if (candidate.skills.length != 0) {
                        $("#candidate_skills span").remove();

                        $.each(candidate.skills, function(key, value) {
                            $('#candidate_skills').append(
                                `<span class="tw-bg-[#E7F0FA] tw-rounded-[4px] tw-text-sm tw-text-[#0A65CC] tw-px-3 tw-py-1.5">
                                    ${value.name}
                                </span>`
                            )
                        });
                    }

                    if (candidate.languages.length != 0) {
                        $("#candidate_languages div").remove();

                        $.each(candidate.languages, function(key, value) {
                            $('#candidate_languages').append(
                                `<div class="tw-inline-block tw-p-3 tw-bg-[#F1F2F4] tw-rounded-[4px]">
                                    <h4 class="tw-text-sm tw-text-[#474C54] tw-font-medium tw-mb-[2px]">${value.name}</h4>
                                </div>`

                            )
                        });
                    }

                    if (candidate.educations.length != 0) {
                        $("#candidate_profile_educations tr").remove();

                        $.each(candidate.educations, function(key, value) {
                            $('#candidate_profile_educations').append(
                                `<tr>
                                    <td>${value.level}</td>
                                    <td>${value.degree}</td>
                                    <td>${value.year}</td>
                                </tr>`
                            )
                        });
                    }

                    if (candidate.experiences.length != 0) {
                        $("#candidate_profile_experiences tr").remove();

                        $.each(candidate.experiences, function(key, value) {
                            let formatted_end = value.currently_working ? 'Currently Working' : value.formatted_end

                            $('#candidate_profile_experiences').append(
                                `<tr>
                                    <td>${value.company}</td>
                                    <td>${value.department}</td>
                                    <td>${value.designation}</td>
                                    <td>${value.formatted_start} - ${formatted_end}</td>
                                </tr>
                                `
                            )
                        });
                    }

                        // other info
                        data.candidate.birth_date ? $('#candidate_birth_date').html(data.candidate
                            .birth_date) : '';
                        data.candidate.marital_status ? $('#candidate_marital_status').html(capitalizeFirstLetter(data.candidate.marital_status)) : ''
                        data.candidate.gender ? $('#candidate_gender').html(capitalizeFirstLetter(data
                            .candidate
                            .gender)) : ''
                        data.candidate.experience ? $('#candidate_experience').html(data.candidate
                            .experience
                            .name) : ''
                        data.candidate.education ? $('#candidate_education').html(capitalizeFirstLetter(
                            data
                            .candidate.education.name)) : ''

                        data.candidate.website ? $('#candidate_website').html(data.candidate.website) :
                            ''
                        data.contact_info.country ? $('#candidate_location').html(data.contact_info
                            .country
                            .name) : ''
                        data.contact_info.address ? $('#candidate_address').html(data.contact_info
                            .address) : ''
                        data.contact_info.phone ? $('#candidate_phone').html(data.contact_info.phone) :
                            ''
                        data.contact_info.secondary_phone ? $('#candidate_seconday_phone').html(data
                            .contact_info
                            .secondary_phone) : ''
                        data.contact_info.email ? $('#contact_info_email').html(data.contact_info.email) : ''
                        if (data.candidate.cv_url) {
                            data.candidate.cv_url ? $('#candidate_cv').attr('href', data.candidate
                                .cv_url) : ''
                        } else {
                            $('#download_cv').hide();
                        }

                        $('#candidate-profile-modal').modal('show');
                        toastr.success(response.profile_view_limit, 'Success')
                    },
                    error: function(error) {
                        Swal.fire('Error', 'Something Went Wrong!', 'error');
                    }
                });
            }

            function capitalizeFirstLetter(string) {
                return string[0].toUpperCase() + string.slice(1);
            }

            function sendEmailCandidate(username) {
                $('#candidate_username').val(username)
                $('#send_message_modal').modal('show');
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\wura\resources\views/frontend/pages/company/draggable-application.blade.php ENDPATH**/ ?>
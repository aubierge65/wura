<?php $__env->startSection('title'); ?>
    <?php echo e(__('theme_settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2 mt-4">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('theme_settings')); ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('settings')); ?></li>
                <li class="breadcrumb-item active"><?php echo e(__('theme_settings')); ?></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('website-settings'); ?>
    <div class="alert alert-warning mb-3">
        <h5><?php echo e(__('heads_up_customize_the_way_you_like')); ?></h5>
        <hr class="my-2">
        <?php echo e(__('add_your_brand_theme_color_it_will_be_reflected_on_your_website_and_admin_panel_add_your')); ?> <a
            href="<?php echo e(route('settings.general')); ?>"><?php echo e(__('logo_and_favicon_here')); ?></a>.
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title line-height-36"><?php echo e(__('website_theme_style')); ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('primary_color')); ?></div>
                        <div class="card-body">
                            <div class="frontend-primary-color"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('secondary_color')); ?></div>
                        <div class="card-body">
                            <div class="frontend-secondary-color"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(userCan('setting.update')): ?>
            <div class="card-footer text-center">
                <button onclick="$('#color_picker_form').submit()" type="submit"
                    class="btn btn-primary w-250"><?php echo e(__('update')); ?></button>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title line-height-36"><?php echo e(__('admin_theme_style')); ?></h3>
                </div>
                <div class="px-4 pt-3 pb-4">
                    <form id="color_picker_form" action="<?php echo e(route('settings.theme.update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input id="sidebar_color_id" type="hidden" name="sidebar_color"
                            value="<?php echo e($setting->sidebar_color); ?>">
                        <input id="nav_color_id" type="hidden" name="nav_color" value="<?php echo e($setting->nav_color); ?>">
                        <input id="sidebar_txt_color_id" type="hidden" name="sidebar_txt_color"
                            value="<?php echo e($setting->sidebar_txt_color); ?>">
                        <input id="nav_txt_color_id" type="hidden" name="nav_txt_color"
                            value="<?php echo e($setting->nav_txt_color); ?>">
                        <input id="main_color_id" type="hidden" name="main_color" value="<?php echo e($setting->main_color); ?>">
                        <input id="accent_color_id" type="hidden" name="accent_color"
                            value="<?php echo e($setting->accent_color); ?>">
                        <input id="frontend_primary_id" type="hidden" name="frontend_primary_color"
                            value="<?php echo e($setting->frontend_primary_color); ?>">
                        <input id="frontend_secondary_id" type="hidden" name="frontend_secondary_color"
                            value="<?php echo e($setting->frontend_secondary_color); ?>">
                    </form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('left_sidebar_background_color')); ?></div>
                                <div class="card-body">
                                    <div class="sidebar-bg-color-picker"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('left_sidebar_text_color')); ?></div>
                                <div class="card-body">
                                    <div class="sidebar-text-color-picker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('top_nav_background_color')); ?></div>
                                <div class="card-body">
                                    <div class="navbar-bg-color-picker"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('top_nav_text_color')); ?></div>
                                <div class="card-body">
                                    <div class="navbar-text-color-picker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('main_color')); ?></div>
                                <div class="card-body">
                                    <div class="main-color-picker"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('accent_color')); ?></div>
                                <div class="card-body">
                                    <div class="accent-color-picker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(userCan('setting.update')): ?>
                    <div class="card-footer text-center">
                        <button onclick="$('#color_picker_form').submit()" type="submit"
                            class="btn btn-primary w-250"><?php echo e(__('update')); ?></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title line-height-36"><?php echo e(__('layout_setting')); ?> </h3>
                </div>
                <div class="px-4">
                    <div class="row pt-3 pb-4">
                        <form action="<?php echo e(route('settings.layout.update')); ?>" method="post" id="layout_form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="default_layout" id="layout_mode">
                        </form>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0"><?php echo e(__('left_navigation_layout')); ?></h5>
                                </div>
                                <img src="<?php echo e(asset('backend/image/setting/left-sidebarlayout.png')); ?>"
                                    class="card-img-top img-fluid w-250 h-auto" alt="top nav">

                                <?php if(userCan('setting.update')): ?>
                                    <div class="card-body">
                                        <?php if($setting->default_layout): ?>
                                            <a href="javascript:void(0)" onclick="layoutChange(0)"
                                                class="btn btn-danger"><?php echo e(__('inactivate')); ?></a>
                                        <?php else: ?>
                                            <a href="javascript:void(0)" onclick="layoutChange(1)"
                                                class="btn btn-primary"><?php echo e(__('activate')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0"><?php echo e(__('top_navigation_layout')); ?></h5>
                                </div>
                                <img src="<?php echo e(asset('backend/image/setting/top-sidebarlayout.png')); ?>"
                                    class="card-img-top img-fluid w-250 h-auto" alt="top nav">
                                <?php if(userCan('setting.update')): ?>
                                    <div class="card-body">
                                        <?php if($setting->default_layout): ?>
                                            <a href="javascript:void(0)" onclick="layoutChange(0)"
                                                class="btn btn-primary"><?php echo e(__('activate')); ?></a>
                                        <?php else: ?>
                                            <a href="javascript:void(0)" onclick="layoutChange(1)"
                                                class="btn btn-danger"><?php echo e(__('inactivate')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title line-height-36"><?php echo e(__('Choose Landing Page')); ?></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?php echo e(route('settings.landingPage.update')); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-sm-2">
                        <label class="image-container">
                            <input type="radio" name="landing_page" id="1" value="1"
                                <?php echo e($setting->landing_page == 1 ? 'checked' : ''); ?>>
                            <img class="full-image" src="<?php echo e(asset('backend/image/landing-page-01.png')); ?>"
                                alt="">
                            <span class="checked-badge"></span>
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="image-container">
                            <input type="radio" name="landing_page" id="2" value="2"
                                <?php echo e($setting->landing_page == 2 ? 'checked' : ''); ?>>
                            <img class="full-image" src="<?php echo e(asset('backend/image/landing-page-02.png')); ?>"
                                alt="">
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="image-container">
                            <input type="radio" name="landing_page" id="3" value="3"
                                <?php echo e($setting->landing_page == 3 ? 'checked' : ''); ?>>
                            <img class="full-image" src="<?php echo e(asset('backend/image/landing-page-03.png')); ?>"
                                alt="">
                        </label>
                    </div>
                </div>
                <div class="row mt-3 mx-auto">
                    <?php if(userCan('setting.update')): ?>
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('update')); ?>

                        </button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>

    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/pickr')); ?>/classic.min.css" />
    <style>
        .image-container {
            height: 300px;
            overflow: hidden;
            position: relative;
            border: 2px solid #ced4da;
            cursor: pointer;
        }

        .image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-top: 0px solid transparent;
            border-left: 56px solid var(--main-color);
            border-bottom: 32px solid transparent;
            display: none;
        }

        .image-container input {
            display: none;
        }

        .image-container:has(input:checked) {
            border: 2px solid var(--main-color);
        }

        .image-container:has(input:checked)::after {
            display: block;
        }

        .full-image {
            width: 100%;
            height: auto;
            transition: transform 2s ease;
            display: block !important;
        }

        .image-container:hover .full-image {
            transform: translateY(calc(-100% + 300px));
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend/plugins/pickr')); ?>/pickr.min.js"></script>
    <script>
        // layout change function define
        function layoutChange(value) {
            $('#layout_mode').val(value)
            $('#layout_form').submit()
        }
        const colorPickers = [{
                default: '<?php echo e($setting->sidebar_color); ?>',
                el: ".sidebar-bg-color-picker",
                input: '#sidebar_color_id',
                variable: '--sidebar-bg-color',
            },
            {
                default: '<?php echo e($setting->sidebar_txt_color); ?>',
                el: ".sidebar-text-color-picker",
                input: '#sidebar_txt_color_id',
                variable: '--sidebar-txt-color',
            },
            {
                el: ".navbar-bg-color-picker",
                default: '<?php echo e($setting->nav_color); ?>',
                variable: '--top-nav-bg-color',
                input: "#nav_color_id",
            },
            {
                el: ".navbar-text-color-picker",
                default: '<?php echo e($setting->nav_txt_color); ?>',
                variable: '--top-nav-txt-color',
                input: "#nav_txt_color_id",
            },
            {
                el: ".accent-color-picker",
                default: '<?php echo e($setting->accent_color); ?>',
                variable: '--accent-color',
                input: "#accent_color_id",
            },
            {
                el: ".main-color-picker",
                default: '<?php echo e($setting->main_color); ?>',
                variable: '--main-color',
                input: "#main_color_id",
            },
            {
                el: ".frontend-primary-color",
                default: '<?php echo e($setting->frontend_primary_color); ?>',
                variable: '--frontend-primary-color',
                input: "#frontend_primary_id",
            },
            {
                el: ".frontend-secondary-color",
                default: '<?php echo e($setting->frontend_secondary_color); ?>',
                variable: '--frontend-secondary-color',
                input: "#frontend_secondary_id",
            },
        ]

        let root = document.documentElement;
        const defaultComponents = {
            preview: true,
            opacity: true,
            hue: true,

            interaction: {
                hex: true,
                rgba: true,
                cmyk: true,
                input: true,
                save: true,
                clear: true,
            }
        }
        // color picker call
        colorPickers.forEach(element => {
            const colorPicker = Pickr.create({
                el: element.el,
                theme: "classic",
                default: element.default,
                components: defaultComponents
            });

            colorPicker.on('change', (color, source, instance) => {
                setColor(color.toRGBA().toString(0), null, element.variable, element.input);
            }).on('save', (color, instance) => {
                let colorVal = color ? color.toHEXA().toString(0) : $(element.input).val();
                console.log(colorVal);
                setColor(colorVal, true, element.variable, element.input);
            });

            function setColor(color, instance, variable, input) {
                root.style.setProperty(variable, color);

                if (instance) {
                    $(input).val(color);
                    colorPicker.hide();
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.setting-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/settings/pages/theme.blade.php ENDPATH**/ ?>
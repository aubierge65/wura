<script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/livewire.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/adminlte.min.js')); ?>"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/axios.min.js"></script>
<script src="<?php echo e(asset('backend/plugins/select2/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo e(asset('backend')); ?>/plugins/dropify/js/dropify.min.js"></script>
<script>
    <?php if(Session::has('success')): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>", 'Success!')
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
        toastr.warning("<?php echo e(Session::get('warning')); ?>", 'Warning!')
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
        toastr.error("<?php echo e(Session::get('error')); ?>", 'Error!')
    <?php endif; ?>

    // toast config
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "hideMethod": "fadeOut"
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Navbar Collapse Toggle
    var isNavCollapse = JSON.parse(localStorage.getItem("sidebar_collapse"))
    isNavCollapse ? $('body').addClass('sidebar-collapse') : null;

    $('#nav_collapse').on('click', function() {
        localStorage.setItem("sidebar_collapse", isNavCollapse == true ? false : true);
    });
</script>
<!-- Custom Script -->
<script>
    // notification read
    function ReadNotification() {
        $.ajax({
            url: "<?php echo e(route('admin.notification.read')); ?>",
            type: "POST",
            data: {
                _token: '<?php echo e(csrf_token()); ?>'
            },
            dataType: 'json',
            success: function(data) {
                $('#unNotifications').html('');
            }
        });
    }
    // call tooltip function
    $('[data-toggle="tooltip"]').tooltip();
    // Call ckeditor
    if (document.querySelector('#image_ckeditor')) {
        ClassicEditor.create(document.querySelector('#image_ckeditor'), {
                ckfinder: {
                    uploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>"
                },
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Call ckeditor
    if (document.querySelector('#image_ckeditor_2')) {
        ClassicEditor.create(document.querySelector('#image_ckeditor_2'), {
                ckfinder: {
                    uploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>"
                },
            })
            .catch(error => {
                console.error(error);
            });
    }


    if (document.querySelector('#editor4')) {
        ClassicEditor.create(document.querySelector('#editor4'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }

    if (document.querySelector('#editor2')) {
        ClassicEditor.create(document.querySelector('#editor2'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }

    if (document.querySelector('#editor3')) {
        ClassicEditor.create(document.querySelector('#editor3'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }

    function setLocationSession(form) {
        axios.post('/set/session', form)
            .then((res) => {
                // console.log(res.data);
                // toastr.success("Location Saved", 'Success!');
            })
            .catch((e) => {
                toastr.error("Something Wrong", 'Error!');
            });
    }
    $('#filterForm').on('change', function() {
        $(this).submit();
    })

    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
    $('.select2-taggable').select2({
        theme: 'bootstrap4',
        tags: true
    })
    $('.dropify').dropify();
</script>
<script>
    window.onload = function() {
        document.querySelector('.preloader').style.display = 'none';
    };
</script>
<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH /var/www/vhosts/wura.africa/httpdocs/resources/views/backend/layouts/partials/scripts.blade.php ENDPATH**/ ?>
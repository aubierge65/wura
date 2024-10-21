<script>
    function resumeModalClose() {
        $('#resumeModal').modal('hide');
        $('#cvModal').modal('show');

        $.ajax({
            url: "<?php echo e(route('candidate.get.resume.ajax')); ?>",
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>"
            },
            dataType: 'json',
            success: function(response) {
                $('#resume_id').html('');
                $.each(response, function(key, value) {
                    $('#resume_id').append(`
                    <option value="${value.id}">
                        ${value.name}
                      </option>
                    `);
                });

                $("#resume_id").select2({
                    dropdownParent: $("#cvModal")
                });
            },
            error: function(response) {
                toastr.error('Something is wrong', 'Error');
            }
        });
    }

    function resumeAddModal() {
        // $('#cvModal').modal('hide');
        $("#resumeModal").modal("show");
    }
</script>
<?php /**PATH /opt/lampp/htdocs/MEGATECH/wura1/resources/views/components/website/candidate/add-resume-modal-script.blade.php ENDPATH**/ ?>
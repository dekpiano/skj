$(document).on("change", "#banner_status", function() {
    //console.log($(this).attr('ban-id'));
    //console.log($(this).val());
    $.post("../admin/Control_admin_banner/change_status", {
            onoff: $(this).prop('checked'),
            BanId: $(this).attr('ban-id'),
            Valus: $(this).val()
        }, function(data, status) {
            //console.log(data);
            if (data == 1) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'เปลี่ยนแปลงสำเร็จ',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        // window.location.reload();
                    }
                })
            } else {
                // alertify.error('เปลี่ยนแปลงข้อมูลไม่สำเร็จ');
            }
        })
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });

});
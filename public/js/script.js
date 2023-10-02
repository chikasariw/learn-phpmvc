$(function() {
    $('.tombolTambah').on('click', function() {
        $('#formModalLabel').html('Tambah Data');
    });

    $('.modalEdit').on('click', function() {
        $('#formModalLabel').html('Edit Data');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc1/public/test2/ubah');

        const id = $(this).data('id');
        

        $.ajax({
            url: 'http://localhost/phpmvc1/public/test2/getubah',
            data: {id : id},
            method:'post',
            dataType: 'json',
            success: function(data) {
                $('#namanovel').val(data.namanovel);
                $('#penulis').val(data.penulis);
                $('#warna').val(data.warna);
                $('#id').val(data.id);
            }
        });
    });


});


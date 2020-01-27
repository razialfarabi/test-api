$(function () {
    $('.tomboltambah').on('click', function () {
        $('#newMenuModalLabel').html('Tambah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form')[0].reset();
    });

    $('.tomboledit').on('click', function () {
        $('#newMenuModalLabel').html('Ubah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/bnn/pegawai/ubah');

        const nip = $(this).data('id');
        $.ajax({
            url: 'http://localhost/bnn/pegawai/ambildata',
            data: { nip: nip },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama_pegawai);
                $('#nip').val(data.nip);
                $('#jabatan').val(data.jabatan);
                $('#no_hp').val(data.no_hp);
                $('#alamat').val(data.alamat);
                $('#jk').val(data.jk);
            }
        });
    });


    $('.tomboltambahdokter').on('click', function () {
        $('#newMenuModalLabel').html('Tambah Data Dokter');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form')[0].reset();
    });

    $('.tomboleditdokter').on('click', function () {
        $('#newMenuModalLabel').html('Ubah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/bnn/dokter/ubah');

        const nip = $(this).data('id');
        $.ajax({
            url: 'http://localhost/bnn/dokter/ambildata',
            data: { nip: nip },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nip').val(data.id_dokter);
                $('#nama').val(data.nama_dokter);
                $('#no_hp').val(data.no_hp);
                $('#alamat').val(data.alamat);
                $('#jk').val(data.jk);
            }
        });
    });

    $('.tomboltambahperawat').on('click', function () {
        $('#newMenuModalLabel').html('Tambah Data Perawat');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form')[0].reset();
    });

    $('.tomboleditperawat').on('click', function () {
        $('#newMenuModalLabel').html('Ubah Data Perawat');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/bnn/perawat/ubah');

        const nip = $(this).data('id');
        $.ajax({
            url: 'http://localhost/bnn/perawat/ambildata',
            data: { nip: nip },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nip').val(data.id_perawat);
                $('#nama').val(data.nama_perawat);
                $('#no_hp').val(data.no_hp);
                $('#alamat').val(data.alamat_perawat);
                $('#jk').val(data.jk);
            }
        });
    });



});
<?= $this->session->flashdata('message'); ?>
<div class="card mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No Kerangka</th>
                        <th scope="col">No Polisi</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mobil as $m) : ?>
                        <tr>
                            <td><?= $m['no_kerangka'] ?></td>
                            <td><?= $m['no_polisi'] ?></td>
                            <td><?= $m['merek'] ?></td>
                            <td><?= $m['tipe'] ?></td>
                            <td><?= $m['tahun'] ?></td>
                            <td>
                                <a href="<?= base_url('mobil/ubah') ?>/<?= $m['no_kerangka'] ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('mobil/hapus') ?>/<?= $m['no_kerangka'] ?>" class="badge badge-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('mobil/tambah') ?>" class="btn btn-success float-right mt-3">Tambah Data</a>
    </div>
</div>
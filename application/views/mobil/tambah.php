<div class="card mt-3">
    <div class="card-body">
        <form action="<?= base_url('mobil/simpan') ?>" method="post">
            <div class="form-group">
                <label for="nokerangka">No Kerangka</label>
                <input type="text" class="form-control" id="nokerangka" name="nokerangka" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="nopolisi">No Polisi</label>
                <input type="text" class="form-control" id="nopolisi" name="nopolisi">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <input type="text" class="form-control" id="merek" name="merek">
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" name="tipe">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Tahun</label>
                <?php $tahun = range(1900, strftime("%Y", time())); ?>
                <select class="form-control" id="tahun" name="tahun">
                    <option>Select Year</option>
                    <?php foreach ($tahun as $t) : ?>
                        <option value="<?php echo $t; ?>"><?php echo $t; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Tambah</button>
            <a href="<?= base_url('mobil') ?>" class="btn btn-success float-left">Kembali</a>
        </form>
    </div>
</div>
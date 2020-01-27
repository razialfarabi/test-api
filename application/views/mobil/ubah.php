<div class="card mt-3">
    <div class="card-body">
        <form action="<?= base_url('mobil/simpanubah') ?>" method="post">
            <input type="hidden" value="<?= $mobil['id'] ?>" name="id">
            <div class="form-group">
                <label for="nokerangka">No Kerangka</label>
                <input type="text" class="form-control" id="nokerangka" name="nokerangka" aria-describedby="emailHelp" value="<?= $mobil['no_kerangka'] ?>">
            </div>
            <div class="form-group">
                <label for="nopolisi">No Polisi</label>
                <input type="text" class="form-control" id="nopolisi" name="nopolisi" value="<?= $mobil['no_polisi'] ?>">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <input type="text" class="form-control" id="merek" name="merek" value="<?= $mobil['merek'] ?>">
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $mobil['tipe'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Tahun</label>
                <?php $tahun = range(1900, strftime("%Y", time())); ?>
                <select class="form-control" id="tahun" name="tahun">
                    <option>TAHUN</option>
                    <?php foreach ($tahun as $t) : ?>
                        <option value="<?php echo $t; ?>" <?php if ($t == $mobil['tahun']) { ?> selected <?php } ?>>
                            <?php echo $t; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Ubah</button>
            <a href="<?= base_url('mobil') ?>" class="btn btn-success float-left">Kembali</a>
        </form>
    </div>
</div>
<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('obat/update'); ?>">
                    <input type="hidden" name="id_obat" value="<?= $r['id_obat']; ?>">
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" name="name_obat" value="<?= $r['name_obat']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Daftar W</label>
                        <select name="daftar_w" id="" class="form-control" required>
                            <option value="<?= $r['daftar_w'] ?>"><?= $r['daftar_w']; ?></option>
                            <option value="P.NO1">P.NO1</option>
                            <option value="P.NO2">P.NO2</option>
                            <option value="P.NO3">P.NO3</option>
                            <option value="P.NO4">P.NO4</option>
                            <option value="P.NO5">P.NO5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="text" name="jumlah" value="<?= $r['jumlah']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" value="<?= $r['harga']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
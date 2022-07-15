<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('obat/insert'); ?>">
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" name="name_obat" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Daftar W</label>
                        <select name="daftar_w" id="" class="form-control" required>
                            <option value="P.NO1">P.NO 1</option>
                            <option value="P.NO2">P.NO 2</option>
                            <option value="P.NO3">P.NO 3</option>
                            <option value="P.NO4">P.NO 4</option>
                            <option value="P.NO5">P.NO 5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
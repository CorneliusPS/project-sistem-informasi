<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan/tambah'); ?>" class="btn btn-success btn-sm float-right">Kunjungan Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Nama Pasien</th>
                                <th class="text-center">Umur</th>
                                <th class="text-center">Dokter</th>
                                <th class="text-center">Rekam Medis</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($kunjungan as $r){ ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['tgl_berobat']; ?></td>
                                    <td><?= $r['nama_p']; ?></td>
                                    <td><?= $r['umur']; ?></td>
                                    <td><?= $r['nama_d']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kunjungan/rekam/<?= $r['id_berobat']; ?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url().'kunjungan/edit/'.$r['id_berobat'];?>" class="btn btn-warning btn-sm">Edit</a>
                                        
                                        <a href="<?= base_url().'kunjungan/hapus/'.$r['id_berobat'];?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
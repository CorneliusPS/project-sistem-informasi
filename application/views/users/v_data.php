<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('users/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($users as $r){ ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['username']; ?></td>
                                    <td><?= $r['nama']; ?></td>
                                    <td>
                                        <a href="<?= base_url().'users/edit/'.$r['id_perawat'];?>" class="btn btn-warning btn-sm">Edit</a>
                                        
                                        <a href="<?= base_url().'users/hapus/'.$r['id_perawat'];?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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
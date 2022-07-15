<section class="konten mt-2">
  <div class="container-fluid">
      <div class="card border-primary">
          <div class="card-header bg-primary text-white">
              <?= $title; ?>

              <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th class="text-center">No.</th>
                              <th class="text-center">Nama Obat</th>
                              <th class="text-center">Daftar W</th>
                              <th class="text-center">Jumlah</th>
                              <th class="text-center">Harga</th>
                              <th class="text-center">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; foreach($obat as $r){ ?>
                              <tr>
                                  <td class="text-center"><?= $no; ?></td>
                                  <td><?= $r['name_obat']; ?></td>
                                  <td><?= $r['daftar_w']; ?></td>
                                  <td><?= $r['jumlah']; ?></td>
                                  <td>Rp <?= $r['harga']; ?></td>
                                  <td>
                                      <a href="<?= base_url().'obat/edit/'.$r['id_obat'];?>" class="btn btn-warning btn-sm">Edit</a>
                                        
                                      <a href="<?= base_url().'obat/hapus/'.$r['id_obat'];?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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
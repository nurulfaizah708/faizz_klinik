<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('user/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($user as $r){ ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['username']; ?></td>
                                    <td><?= $r['nama_lengkap']; ?></td>
                                    <td>
                                        <a href="<?= base_url().'user/edit/'.$r['id']; ?>" 
                                        class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'user/hapus/'.$r['id']; ?>" 
                                        class="btn btn-danger btn-sm" onClick="return confirm('Yakin Mau Hapus Data?')">Hapus</a>
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
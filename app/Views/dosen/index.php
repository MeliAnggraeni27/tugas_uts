<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
                    <a href="<?= base_url('dosen/create') ?>" class="btn btn-primary mb-3">Tambah Dosen</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Dosen</th>
                                    <th>Nama Dosen</th>
                                    <th>Mata Kuliah Dosen</th>
                                    <th>Alamat Dosen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dosen as $row) : ?>
                                    <tr>
                                        <td><?= $row['nama_dosen'] ?></td>
                                        <td><?= $row['matkul_dosen'] ?></td>
                                        <td><?= $row['alamat_dosen'] ?></td>
                                        <td>
                                            <a href="<?= base_url('dosen/edit/' . $row['id_dosen']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= base_url('dosen/delete/' . $row['id_dosen']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#dataTable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

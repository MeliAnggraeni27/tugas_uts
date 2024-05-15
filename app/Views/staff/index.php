<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Data Staff</h1>
                    <a href="<?= base_url('staff/create') ?>" class="btn btn-primary mb-3">Tambah Staff</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Staff</th>
                                    <th>Bagian Staff</th>
                                    <th>No Telepon Staff</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($staff as $row) : ?>
                                    <tr>
                                        <td><?= $row['nama_staff'] ?></td>
                                        <td><?= $row['bagian_staff'] ?></td>
                                        <td><?= $row['notlp_staff'] ?></td>
                                        <td>
                                            <a href="<?= base_url('staff/edit/' . $row['id_staff']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= base_url('staff/delete/' . $row['id_staff']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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

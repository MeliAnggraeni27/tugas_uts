<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Edit Dosen</h1>
                    <form action="<?= base_url('dosen/update') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $dosen['id'] ?>">
                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="matkul_dosen">Mata Kuliah Dosen</label>
                            <input type="text" class="form-control" id="matkul_dosen" name="matkul_dosen" value="<?= $dosen['matkul_dosen'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_dosen">Alamat Dosen</label>
                            <textarea class="form-control" id="alamat_dosen" name="alamat_dosen"><?= $dosen['alamat_dosen'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

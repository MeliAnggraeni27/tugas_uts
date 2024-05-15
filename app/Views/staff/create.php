<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Tambah Staff</h1>
                    <form action="<?= base_url('staff/store') ?>" method="post">
                        <div class="form-group">
                            <label for="nama_staff">Nama Staff</label>
                            <input type="text" class="form-control" id="nama_staff" name="nama_staff">
                        </div>
                        <div class="form-group">
                            <label for="bagian_staff">Bagian Staff</label>
                            <input type="text" class="form-control" id="bagian_staff" name="bagian_staff">
                        </div>
                        <div class="form-group">
                            <label for="notlp_staff">Nomor Telepon Staff</label>
                            <input type="text" class="form-control" id="notlp_staff" name="notlp_staff">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

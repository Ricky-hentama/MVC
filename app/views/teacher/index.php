<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Guru
            </button>

            <h3 class="mt-3 ">Daftar Guru Penta</h3>

            <ul class="list-group">
                <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?= $guru["nama"] ?>
                        <a href="<?= BASEURL; ?>teacher/detail/<?= $guru['id'] ?>" class="badge badge-primary ">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>teacher/tambah" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama">
                        <small id="namaHelp" class="form-text text-muted">Menggunakan nama palsu dapat dikenakan pidana.</small>
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="mapel" name="mapel">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
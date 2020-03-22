<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::Flash(); ?>
        </div>
    </div>
    <div class="mb-3">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari data guru" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" id="tambahDataGuru">
                Tambah Data Guru
            </button>

            <h3 class="mt-3 ">Daftar Guru Penta</h3>

            <ul class="list-group">
                <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item "><?= $guru["nama"] ?>
                        <!-- badge hapus -->
                        <a href="<?= BASEURL; ?>teacher/hapus/<?= $guru['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $guru['nama'] ?> ?');">Hapus</a>
                        <!-- badge ubah -->
                        <a href="<?= BASEURL; ?>teacher/ubah/<?= $guru['id'] ?>" class="badge badge-warning float-right ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id'] ?>" id="ubah">Ubah</a>
                        <!-- badge detail -->
                        <a href="<?= BASEURL; ?>teacher/detail/<?= $guru['id'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
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
                <form action="<?= BASEURL; ?>teacher/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama">
                        <small id="namaHelp" class="form-text text-muted">Menggunakan nama palsu dapat dikenakan pidana.</small>
                    </div>
                    <div class="form-group">
                        <label for="mapel">Bidang keahlian</label>
                        <input type="text" class="form-control" id="mapel" name="mapel">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option>Single</option>
                            <option>Istri 1</option>
                            <option>Istri 2</option>
                            <option>Istri 3</option>
                            <option>Istri 4</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" id="tombol-aksi" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
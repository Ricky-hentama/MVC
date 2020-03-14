<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['mapel']; ?></h6>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Umur</th>
                        <th scope="col">status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><?= $data['guru']['id']; ?></td>
                        <td><?= $data['guru']['umur']; ?></td>
                        <td><?= $data['guru']['status']; ?></td>
                    </tr>

                </tbody>
            </table>

            <a href="<?= BASEURL; ?>/teacher" class="card-link badge badge-danger">kembali</a>
        </div>
    </div>
</div>
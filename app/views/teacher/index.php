<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Guru</h3>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['guru'] as $guru) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $guru['nama'] ?></td>
                            <td><?= $guru['mapel'] ?></td>
                            <td><?= $guru['umur'] ?></td>
                            <td><?= $guru['status'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Guru</h3>
            <ul>
                <?php foreach ($data['guru'] as $gr) : ?>

                    <li><?= $gr['nama']; ?></li>
                    <li><?= $gr['mapel'] ?></li>
                    <li><?= $gr['umur']; ?></li>
                    <br>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
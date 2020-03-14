<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Guru</h3>

            <ul class="list-group">
                <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?= $guru["nama"] ?>
                        <a href="" class="badge badge-primary ">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>






        </div>
    </div>
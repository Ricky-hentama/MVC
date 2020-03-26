<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="http://localhost/mvc/public">PENTA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="http://localhost/mvc/public">Home <span class="sr-only">(current)</span>
                </a>
                <a class="nav-item nav-link" href="<?= BASEURL; ?>about">About </a>
                <a class="nav-item nav-link" href="<?= BASEURL; ?>teacher">Teacher</a>
                <a class="nav-item nav-link" href="<?= BASEURL; ?>about/page">Page</a>
            </div>
        </div>
    </nav>